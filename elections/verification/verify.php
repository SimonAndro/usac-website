<?php
declare (strict_types = 1);

//error_reporting(0);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

include __DIR__ . '/../../includes/utils.php';

$inputFileName = getConfig("data_file_name"); //name of file that store data

$locking_file = "file.lock";

$base_url = getConfig("base_url"); // url of site

$error_bag = []; // to store error
$res["type"] = "error";

// Read excel file
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
// get active worksheet
$workSheet = $spreadsheet->getActiveSheet();

if (isset($_POST) and !empty($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case "get_voter": // generate ticket

            $province = empty($_POST["studprovince"]) ? "" : trim(strval($_POST["studprovince"]));

            $studname_sir = empty($_POST["studname_sir"]) ? "" : trim(strval($_POST["studname_sir"]));

            $studname_other .= empty($_POST["studname_other"]) ? "" : trim(strval($_POST["studname_other"]));

            if ($studdata = get_student($province, $studname_sir, $studname_other, $workSheet)) {
                $res["type"] = "student_data";
                $res["value"] = $studdata;
            } else {
                $res["value"] = $error_bag;
            }
            break;
        case "send_voter_credentials": // send voter credentials
            $province = empty($_POST["province"]) ? "" : trim(strval($_POST["province"]));

            $studname = empty($_POST["studname"]) ? "" : trim(strval($_POST["studname"]));

            $university = empty($_POST["university"]) ? "" : trim(strval($_POST["university"]));

            $email = empty($_POST["email"]) ? "" : trim(strval($_POST["email"]));

            $studID = empty($_POST["studID"]) ? "" : trim(strval($_POST["studID"]));

            // dump_to_file($_POST);

            if ($student = verify_student($province, $studname, $university, $studID, $email, $workSheet)) {

                //generate voters id and pass
                $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $voter_id = substr(str_shuffle($set), 0, 15);

                $voter_pass = randomPassword();

                if (writeProtect()) {
                    writeVoterData($studID, $voter_id, $voter_pass, $email);
                    writeUnprotect();

                    $subject = "USAC 2022 Elections Voter Verification";

                    $verifURL = getAppConfig('base-url') . "elections/verification/verify.php?route=verify&vi=$voter_id&vp=$voter_pass&si=$studID";

                    $bodys = "<div><h4>USAC Decides</h4></div><br /><div>Hello $studname!,</div><br /><div>Note: Don't share this link with anyone or else someone can use it to vote on your behalf.</div><br /><div>Click the link below to verify your voter information. This is the link you will also use for voting. (if clicking it doesn't work, you may need to manually copy it to a new browser window)</div><br /><div><a href='$verifURL'>$verifURL</a></div><br /><br /><div>Regards, USAC 2022 EC</div><br /><br /> \" Every Election is determined by those who show up.\"";

                    if (!sendMail($email, $subject, $bodys)) {
                        $error_bag[] = "sending voter credentials failed, contact admin";
                        $res["value"] = $error_bag;
                    } else {
                        $res["type"] = "success";
                        $res["value"] = "voter credentials sent successfully to email";
                    }

                } else {
                    $res["value"] = $error_bag;
                }

            } else {

                $res["value"] = $error_bag;
            }
            break;
        default:
            $error_bag[] = "unknown request";
            $res["value"] = $error_bag;
            break;
    }

    echo json_encode($res);

} else {

    if ("verify" == @$_GET["route"] and $voterId = @$_GET["vi"] and $voterPass = @$_GET["vp"] and $studID = @$_GET["si"]) {
        
        $voterId = empty($voterId)?"":trim($voterId);
        $voterPass = empty($voterPass)?"":trim($voterPass);
        $studID = empty($studID)?"":trim($studID);
        
        //mark as verified voter
        $workSheet_array = $workSheet->toArray();
        if (strlen($voterId) && strlen($voterPass) && (count($workSheet_array) > intval($studID))) {
            $workSheet_array = $workSheet->toArray();

            $val = $workSheet_array[$studID];

            $student = array('province' => $val[0], 'name' => $val[1], 'university' => $val[2], 'id' => $val[3], 'vi' => $val[4], 'vp' => $val[5], 'china' => $val[6], 'grad' => $val[7], 'contact' => $val[8], 'email' => $val[9], 'verified' => $val[10]);
            

            if (($student["vi"] == ($voterId)) and (($student["vp"]) == ($voterPass)) ) { // expects one record

                if(strlen($student["verified"])>0)
                {
                    //redirect to voting
                    header("Location: ../voting/login.php?verified_login=true&voter=$voterId&password=$voterPass");
                    exit();
                
                }

                require_once __DIR__ . '/../voting/admin/includes/session.php';
            

                //setup voter in voting system
                $name_explode = explode(" ", $student["name"]);
                $firstname = $name_explode[0];

                if(count($name_explode)>1) {//remove first name
                    unset($name_explode[0]);
                }

                $lastname = implode(" ", $name_explode);
                $password = password_hash($student["vp"], PASSWORD_DEFAULT);
                $voter = $student["vi"];

                $sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES ('$voter', '$password', '$firstname', '$lastname', '')";
                            
                if ($conn->query($sql)) {

                    dump_to_file("voter write success");

                    if (writeProtect()) {
                        markVerified($studID);
                        writeUnprotect();

                        echo "redirecting";

                        //redirect to voting
                        header("Location: ../voting/login.php?verified_login=true&voter=$voterId&password=$voterPass");
                    } else {
                        exit("Server Busy, reload page to try again");
                    }

                } else {
                    exit("An error occurred, contact admin with error code 706");
                }
            } else {
                exit("Looks like a Suspicious Activity, but if it is not contact admin with error code 904");
            }
        }
        exit("Looks like a Suspicious activity, but if it is not contact admin with error code 905");
    }
}

exit();

// verify student number, checks if the student number exists in the spreadsheet
function verify_student($province, $studname, $university, $studID, $email, $workSheet)
{
    global $error_bag;

    if (strlen($province) && strlen($studname) && strlen($university) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $workSheet_array = $workSheet->toArray();

        $filtered_array = array_filter($workSheet_array, function ($val) use ($province, $studname, $university, $studID) {

            return (strtolower(trim($val[0])) == strtolower($province)) and (strtolower(trim($val[1])) == strtolower($studname)) and (strtolower(trim($val[2])) == strtolower($university)) and (strtolower(trim(strval($val[3]))) == strtolower($studID));
        });

        // dump_to_file($filtered_array);

        if (count($filtered_array) == 1) { // expects one record

            $keys = array('province', 'name', 'university', 'id', 'vi', 'vp', 'china', 'grad', 'contact', 'email', 'verified');

            foreach ($filtered_array as $val) {
                $student = array_combine($keys, $val);
                $student["email"] = $email;

                break;
            }

            return $student;
        }

    }

    $error_bag[] = "error in student info fields";

    return false;
}

// generate ticket
function get_student($province, $studname_sir, $studname_other, $workSheet)
{
    global $error_bag;

    if (strlen($province) && strlen($studname_sir)) {
        $workSheet_array = $workSheet->toArray();

        $filtered_array = array_filter($workSheet_array, function ($val) use ($province, $studname_sir, $studname_other) {

            return (strtolower(trim($val[0])) == strtolower($province) and (strpos(strtolower(trim($val[1])), strtolower($studname_sir)) !== false || (strlen($studname_other) and strpos(strtolower(trim($val[1])), strtolower($studname_other)) !== false)));
        });

        if (empty($filtered_array)) {

            $error_bag[] = "No record found, contact commissioner.";

            return false;
        }

        $keys = array('province', 'name', 'university', 'id', 'vi', 'vp', 'china', 'grad', 'contact', 'email', 'verified');
        $count = 0;
        $stud_data = [];
        foreach ($filtered_array as $val) {
            $student = array_combine($keys, $val);
            if ($student["verified"] != "") {
                $student["email"] = "hidden";
                $student["status"] = "Verified";

            } elseif ($student["vi"] != "") {
                $student["email"] = "hidden";
                $student["status"] = "Pending Email Verification";
            } else {
                $student["email"] = "not submitted";
                $student["status"] = <<<STATUS
                <form action="" method="post" class="form-inline general-form" onsubmit="return false;">
                    <input type="hidden" name="action" value="send_voter_credentials">
                    <input type="hidden" name="province" value="{$student['province']}">
                    <input type="hidden" name="studname" value="{$student['name']}">
                    <input type="hidden" name="university" value="{$student['university']}">
                    <input type="hidden" name="studID" value="{$student['id']}">
                    <div class="form-group mr-2"><input type="email" name="email" placeholder="email" required></div>
                    <button type="submit" class="btn btn-sm btn-primary">Verify</button>
                </form>
                STATUS;
            }

            $row = <<<EACHSTUDENT
                <tr>
                <th scope="row">1</th>
                <td>{$student['name']}</td>
                <td>{$student['province']}</td>
                <td>{$student['university']}</td>
                <td>{$student['email']}</td>
                <td>{$student["status"]}</td>
                </tr>
            EACHSTUDENT;

            $stud_data[] = $row;
        }

        //dump_to_file($stud_data);

        return $stud_data;

    }

    $error_bag[] = "some fields are missing";

    return false;
}

function writeProtect()
{
    global $error_bag;

    global $locking_file;

    if (file_exists($locking_file)) {
        $error_bag[] = "Server busy, try again later";
        return false;

    } else {
        file_put_contents($locking_file, "locking file created"); // create cron locking file
    }

    return true;
}

function writeUnprotect()
{
    global $locking_file;

    unlink($locking_file); //remove locking file
}

//write voter data
function writeVoterData($studID, $voter_id, $voter_pass, $email)
{
    global $spreadsheet;

    global $workSheet;

    global $inputFileName;

    // set voter Id
    $workSheet->getCell("E" . ($studID + 1))->setValue($voter_id);

    // set voter pass
    $workSheet->getCell("F" . ($studID + 1))->setValue($voter_pass);

    // set voter email
    $workSheet->getCell("J" . ($studID + 1))->setValue($email);

    //writing changes directly using loaded spreadsheet data
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save($inputFileName);
}

//mark voter as verified
function markVerified($studID)
{
    global $spreadsheet;

    global $workSheet;

    global $inputFileName;

    // set verified
    $workSheet->getCell("K" . ($studID + 1))->setValue(date("Y/m/d H:i:s"));

    //writing changes directly using loaded spreadsheet data
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save($inputFileName);
}

function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

// returns configuration value
function getConfig($key)
{
    $config = include __DIR__ . "/config.php";
    return $config[$key];
}

//debugging purposes
function dump_to_file($data)
{
    file_put_contents("./debug.txt", print_r($data, true) . "\n", FILE_APPEND);
}
