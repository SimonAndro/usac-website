<?php

require_once "./../global_auth.php";

dump_to_file($_GET);

if(!$authentication->isLoggedIn())
{
    // check if user is login
    if(isset($_POST['val']))
    {
        $val = $_POST['val'];
        $action = $val['action'];

        $output["msg"] = "";
        $errors = [];

        switch($action)
        {
            case "login":
               $email = isset($val['email'])?trim($val['email']):null;
               $password = isset($val['password'])?trim($val['password']):null;

                $sql = "SELECT * FROM ".$usersTable->getTableName()." WHERE email=?";
                $res = $usersTable->customQuery($sql, $email);
                $user = $res[0];

                if(!empty($user))
                {
                    if(!$user->isEmailOk())
                    {
                        $errors[] = "Invalid Login Credentials";
                    }
                }

               if(empty($errors) && $authentication->login($email, $password))
               {
                    $output["msg"] = "success";
                    $output["action"] = "url";
                    $output["value"] = "dashboard/index.php";
               }else{
                    $error[] = "Invalid Login Credentials";
                    $output["errors"] = $errors;
                    $output["msg"] = "fail";
               }
            break;
            case "register":
                //Assume the data is valid to begin with
                $valid = true;
                $errors = [];

                //$newUser = "";
                $msg = "fail";
        
                //But if any of the fields have been left blank, set $valid to false
                if (empty($val['email'])) {
                    $valid = false;
                    $errors[] = 'Email cannot be blank';
                }
                else if (filter_var($val['email'], FILTER_VALIDATE_EMAIL) == false) {
                    $valid = false;
                    $errors[] = 'Invalid email address';
                }
                else { //if the email is not blank and valid:
                    //convert the email to lowercase
                    $val['email'] = htmlspecialchars(strtolower($val['email']));
        
                    //search for the lowercase version of `$val['email']`
                    if (count($usersTable->find([['column'=>'email', 'match'=>'=','value'=>$val['email']]])) > 0) {
                        $valid = false;
                        $errors[] = 'Provided email address is already registered';
                    }
                }
        
                if (empty($val['password'])) {
                    $valid = false;
                    $errors[] = 'Password cannot be blank';
                }

                if (empty($val['name'])) {
                    $valid = false;
                    $errors[] = 'name can\'t be empty';
                }

                if (empty($val['university'])) {
                    $valid = false;
                    $errors[] = 'university can\'t be empty';
                }

                if (empty($val['birthdate'])) {
                    $valid = false;
                    $errors[] = 'birthdate can\'t be empty';
                }
        
                if(empty($val['gender']))
                {
                    $valid = false;
                    $errors[] = 'Please select gender';
                }else{
                    $gender = "female";
                }
            
                if($valid)
                {
                    if(($input = inputFile('student_card')))
                    {
                        $upload = new \Ninja\Uploader($input, 'image');
                        $upload->setPath("files/images/"."IdCards" .'/'.time()."/");
                        if($upload->passed()) {
                            $result = $upload->uploadFile()->result();
                            $newUser["studentCard"] = $result;
                        }else{
                            $errors[] = 'student Id card upload failed';
                            $valid = false;
                        }
                    }else{
                        $valid = false;
                        $errors[] = 'student Id card required';
                    }
                }             

                //If $valid is still true, no fields were blank and the data can be added
                if ($valid == true) {
                    // email
                    $newUser['email'] = $val['email'];

                    //Hash the password before saving it in the database
                    $newUser['password'] = password_hash($val['password'], PASSWORD_DEFAULT);
                    
                    //name
                    $newUser['name'] = htmlspecialchars($val['name']);

                    //university
                    $newUser['university'] = htmlspecialchars($val['university']);

                    //role
                    $newUser['role'] = 0;

                    //gender
                    $newUser['gender'] = htmlspecialchars($val['gender']);

                    //created at
                    $newUser['created_at'] = time(); 

                    
                    $keys = sha1(uniqid(getAppConfig("secret").mt_rand(),true));
                    $keys = substr($keys,0,35);

                    $newUser["validation_key"] = $keys;
        
                    //When submitted, the $newUser variable now contains a lowercase value for email
                    //and a hashed password
                    $savedUser = $usersTable->save($newUser);
                    if($savedUser->getUserId())
                    {// send validation email
                        $myurl = getAppConfig("site_url")."/dashboard/index.php";
                        $headers = 'MIME-Version: 1.0'."\r\n";
                        $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
                        $headers .= "From: ".getAppConfig('site_title')." ".getAppConfig('site_reply_mail')."\r\n";
                        $bodys = "<div><h4>".getAppConfig('site_title')."</h4></div><div>Hello, ".$savedUser->getName().", Before you can login, you first need to activate your account. To do so, please follow this link(if clicking it doesn't work, you may need to manually copy it to a new browser window):</div><br /><br /><div><a href='$myurl?pub=$keys'>$myurl?pub=$keys</a></div><br /><br /><div>Regards, ".getAppConfig('site_title')."</div>";
                        $subject = "Welcome to ".getAppConfig('site_title');
                        
                        if(!mail($savedUser->getEmail(),$subject,$bodys,$headers))
                        {
                            $errors[] = 'send verification email failed';
                        }else{
                            $msg = "success";
                        }
                    }else{
                        $errors[] = 'new account couldn\'t be created. contact admin';
                    }    
                }
                $output["errors"] = $errors;
                $output["msg"] = $msg;
            break;
        }
    
        $output = json_encode($output);
        header('Content-Type: application/json');
        echo $output;
        die();
    }elseif(isset($_GET['pub']))
    {
        $pub = htmlspecialchars(@$_GET['pub']);
        //check for this public key
        $res = $usersTable->find([['column'=>'validation_key', 'match'=>'=','value'=>$pub]]);
        $user = $res[0];
        if(!empty($user))
        {
            if ($user->getUserId() && !$user->isEmailOk()) {

                $userUpdate["id"] = $user->getUserId();
                $userUpdate["email_ok"] = 1;
                $usersTable->save($userUpdate);
    
                $authentication->saveSession($user->getEmail(),$user->getPassword());
    
                header("Location: ".getAppConfig("site_url")."/dashboard/index.php");
                die();
            }else{
                header("Location: ../error.php");
                die();
            }
        }else{
            header("Location: ../error.php");
            die();
        }
        
    }
    header("Location: ../register.php");
    die();
}
elseif(isset($_GET['logout']))
{
    $authentication->logout();
    header("Location: ../register.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        USAC dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.15.3/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                    <div class="logo-image-small text-center">
                        <img src="../assets/img/usac-logo.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="" class="simple-text logo-normal">
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?=$page=="index"?"active":""?>">
                        <a href="./index.php">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                 
                    <li class="<?=$page=="user"?"active":""?>">
                        <a href="./user.php">
                            <i class="nc-icon nc-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="<?=$page=="tables"?"active":""?>">
                        <a href="./tables.php">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">USAC User Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-button-power"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Actions</span>
                                    </p>
                                </a>
                             
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./../">View Site</a>
                                    <hr style="padding:0;margin:0;">
                                    <a class="dropdown-item" href="./index.php?logout=1">Logout</a>
                                </div>
                            </li>
    
                        </ul>
                    </div>
                </div>
            </nav>