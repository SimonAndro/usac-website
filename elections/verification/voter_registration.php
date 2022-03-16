<?php
declare (strict_types = 1);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = getConfig("data_file_name"); //name of file that store data

$base_url = getConfig("base_url"); // url of site

$error_bag = []; // to store error
$res["type"] = "error";

// if (stripos($_SERVER["HTTP_USER_AGENT"], "wechat") || stripos($_SERVER["HTTP_USER_AGENT"], "alipay")) {
//     $error_bag[] = "open link in browser to get ticket";

//     $res["value"] = $error_bag;
//     echo json_encode($res);
//     return false;
// }

$locking_file = "file.lock";
if (file_exists($locking_file)) {
    $error_bag[] = "Server busy, try again later";
    $res["value"] = $error_bag;
    echo json_encode($res);
    return false;

} else {
    file_put_contents($locking_file, "locking file created"); // create cron locking file
}

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

            $email = empty($_POST["university"]) ? "" : trim(strval($_POST["email"]));

            $studID = empty($_POST["studID"]) ? "" : trim(strval($_POST["studID"]));

            if (verify_student($province, $studname, $university, $studID, $email)) {

                $voter_id = "";
                $voter_pass = "";
                $subject = "";
                $bodys = "";

                if (!sendMail($email, $subject, $bodys)) {
                    $error_bag[] = "sending voter credentials failed, contact admin";
                    $res["value"] = $error_bag;
                } else {
                    $res["type"] = "success";
                    $res["value"] = "voter credentials sent successfully to email";

                    //setup voter in voting system
                }

            } else {

                $res["value"] = $error_bag;
                echo json_encode($res);
            }
            break;
        case "draw": // randomly get lucky draw winner
            $pass = trim($_POST["pass"]);
            if ($pass != getConfig("spin_pass")) {
                $error_bag[] = "Invalid spin password";
                $res["value"] = $error_bag;
            }
            // Read excel file
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
            // get active worksheet
            $workSheet = $spreadsheet->getActiveSheet();

            $workSheet_array = $workSheet->toArray();

            $issued_array = array_filter($workSheet_array, "issued");
            $array_keys = array_keys($issued_array);

            $lucky_num = rand(00, count($issued_array) - 1); // get luck winner
            $lucky_key = $array_keys[$lucky_num];

            $lucky_winner = strval($issued_array[$lucky_key][4]);

            $lucky_winner = str_replace("#", "", $lucky_winner);
            $lucky_winner = str_replace("-", "", $lucky_winner);

            // set lucky winner
            $workSheet->getCell("F" . ($lucky_key + 1))->setValue('winner');

            //writing changes directly using loaded spreadsheet data
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save($inputFileName);

            $res["type"] = "success";
            $res["value"] = str_split($lucky_winner);
            foreach ($res["value"] as $key => $value) // find and replace zero with 10 in the array, needed by slotmachine.js
            {
                if ($value == "0") {
                    $res["value"][$key] = "10";
                }
            }

            echo json_encode($res); // return luck winner
            return false;

            break;
        default:
            $error_bag[] = "unknown request";
            $res["value"] = $error_bag;
            break;
    }

    echo json_encode($res);

} else {

    if ($voterId = @$_GET["vi"] and $voterPass = @$_GET["vp"]) {
        //mark as verified voter

        //redirect to test voting
        header("Location: ../voting/login.php?verified_login=true&voter=$voterId&password=$voterPass");
    }
    echo json_encode("error occurred, contact Admin");
}

unlink($locking_file); //remove locking file
exit();

// verify student number, checks if the student number exists in the spreadsheet
function verify_student($province, $studname, $university, $studID, $email)
{
    global $error_bag;

    if (strlen($province) && strlen($studname) && strlen($university) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $workSheet_array = $workSheet->toArray();

        $filtered_array = array_filter($workSheet_array, function ($val) use ($province, $studname, $university, $email) {
            return ($val[0] == $province and $val[1] == $studname and $val[2] == $university and $val[3] == $studID);
        });

        if (empty($filtered_array)) {
            $student = $workSheet_array[$key];

            if ($student[3] == "issued") //checking if ticket has already been issued
            {
                $error_bag[] = "student no. $studnum has already retrieved a ticket. contact organizer.";

                return false;
            }

            return [$student, $key];
        }

    } else {
        $error_bag[] = "some fields are missing";

        return false;
    }

    $error_bag[] = "student no. not found, contact organizer";

    return false;
}

// generate ticket
function get_student($province, $studname_sir, $studname_other, $workSheet)
{
    global $error_bag;

    if (strlen($province) && strlen($studname_sir)) {
        $workSheet_array = $workSheet->toArray();

        $filtered_array = array_filter($workSheet_array, function ($val) use ($province, $studname_sir, $studname_other) {
            
            return ($val[0] == $province and (strpos( strtolower($val[1]), strtolower($studname_sir)) !== false || (strlen($studname_other) and strpos(strtolower($val[1]), strtolower($studname_other)) !== false)));
        });

        if (empty($filtered_array)) {

            $error_bag[] = "No record found, contact commissioner.";

            return false;
        }

        $keys = array('province', 'name', 'university', 'id','vi','vp','china','grad','contact','email');
        $count = 0;
        $stud_data = [];
        foreach($filtered_array as $val )
        {            
            $stud_data[] = array_combine($keys, $val);
        }

        dump_to_file($stud_data);

        return $stud_data;

    } 

    $error_bag[] = "some fields are missing";

    return false;
}

//mark voter as verified
function markVerified($voterId, $voterPass)
{

}

// returns configuration value
function getConfig($key)
{
    $config = include __DIR__ . "/config.php";
    return $config[$key];
}

// debugging purposes
function dump_to_file($data)
{
    file_put_contents("./debug.txt", print_r($data, true) . "\n", FILE_APPEND);
}
