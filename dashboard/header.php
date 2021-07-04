<?php

require_once "./../global_auth.php";
require_once "actions.php";

dump_to_file("$_GET");

// function generateRandomString($length = 6) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }

// $val['action'] = "register";
// $val['gender'] = "female";
// $val['birthdate'] ="1998/01/05";
// $val['university'] = "Macorni";
// $val['grad_year'] ="2022/07/15";
// $val['name'] ="Owen falls ".generateRandomString();
// $val['name_last'] ="Owen falls ".generateRandomString();
// $val['password'] = "1234abcd!%";
// $val['email']  = generateRandomString()."@email.com";

// $_POST['val'] = $val;

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
                        //send validation email
                        $keys = $user->getValidationKey(); 
                        $myurl = getAppConfig("site_url")."/dashboard/index.php";
                        $headers = 'MIME-Version: 1.0'."\r\n";
                        $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
                        $headers .= "From: ".getAppConfig('site_title')." ".getAppConfig('site_reply_mail')."\r\n";
                        $bodys = "<div><h4>".getAppConfig('site_title')."</h4></div><div>Hello, ".$user->getName().", Before you can login, you first need to activate your account. To do so, please follow this link(if clicking it doesn't work, you may need to manually copy it to a new browser window):</div><br /><br /><div><a href='$myurl?pub=$keys'>$myurl?pub=$keys</a></div><br /><br /><div>Regards, ".getAppConfig('site_title')."</div>";
                        $subject = "Welcome to ".getAppConfig('site_title');
                        
                        if(!mail($user->getEmail(),$subject,$bodys,$headers))
                        {
                            $errors[] = 'Account requires verification, send verification email failed';
                            $output["user"] = $user;
                        }else{
                            $errors[] = "Account verification link has been sent to your email address";
                        }
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
                else if(strlen($val['email']) > 30) 
                {
                    $valid = false;
                    $errors[] = 'Email should be less than 30 character';
                }
                else { //if the email is not blank and valid:
                    //convert the email to lowercase
                    $val['email'] = htmlspecialchars(strtolower(trim($val['email'])));
        
                    //search for the lowercase version of `$val['email']`
                    if (count($usersTable->find([['column'=>'email', 'match'=>'=','value'=>$val['email']]])) > 0) {
                        $valid = false;
                        $errors[] = 'Provided email address is already registered';
                    }
                }
        
                $val['password'] = trim($val['password']);
                if (empty($val['password'])) {
                    $valid = false;
                    $errors[] = 'Password cannot be blank';
                }

                $val['name'] = trim($val['name']);
                if (empty($val['name'])) {
                    $valid = false;
                    $errors[] = 'first name can\'t be empty';
                }

                $val['name_last'] = trim($val['name_last']);
                if (empty($val['name_last'])) {
                    $valid = false;
                    $errors[] = 'last name can\'t be empty';
                }

                $val['university'] = trim($val['university']);
                if (empty($val['university'])) {
                    $valid = false;
                    $errors[] = 'university can\'t be empty';
                }

                $val['grad_year'] = trim($val['grad_year']);
                if (empty($val['grad_year'])) { 
                    $valid = false;
                    $errors[] = 'graduation date can\'t be empty';
                }

                $val['birthdate'] = trim($val['birthdate']);
                if (empty($val['birthdate'])) { 
                    $valid = false;
                    $errors[] = 'birthdate can\'t be empty';
                }
        
                $val['gender'] = trim($val['gender']);
                if(empty($val['gender']))
                {
                    $valid = false;
                    $errors[] = 'Please select gender';
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

                    //last name 
                    $newUser['name_last'] = htmlspecialchars($val['name_last']);

                    //birth date
                    $newUser['date_birth'] = htmlspecialchars($val['birthdate']);

                    //university
                    $newUser['university'] = htmlspecialchars($val['university']);

                    //graduation date
                    $newUser['grad_date'] = htmlspecialchars($val['grad_year']);

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
                    //print_r($savedUser);
                    if($savedUser->getUserId())
                    {
                        // register on social platform
                        $ossn_salt = ossn_generateSalt();
						$ossn_password = ossn_generate_password($val["password"], $ossn_salt);
                        $ossn_fields["type"] = "normal";
                        $ossn_fields["username"] = explode(" ",$savedUser->getName())[0];
                        $ossn_fields["email"] = $savedUser->getEmail();
                        $ossn_fields["password"] = $ossn_password;
                        $ossn_fields["salt"] = $ossn_salt;
                        $ossn_fields["first_name"] = $savedUser->getFirstName();
                        $ossn_fields["last_name"] = $savedUser->getLastName();
                        $ossn_fields["last_login"]=0;
                        $ossn_fields["last_activity"]=0;
                        $ossn_fields["activation"]=$keys;
                        $ossn_fields["time_created"]=time();

                        $ossn_pdo = create_ossn_pdo();
                        if(!$ossn_pdo){
                            // handle error
                            //header("Location: ../error.php?code=0x1543");
                            $errors["code"][] = "0x1543";
                            //die();
                        }else{
                            $ossn_users_table = new \Ninja\DatabaseTable($ossn_pdo , 'ossn_users', 'guid', 'User');
                            $ossn_user = $ossn_users_table->save($ossn_fields);
                            dump_to_file($ossn_user);
                            if(empty($ossn_user->{"guid"}))
                            {
                                //handle error
                                //header("Location: ../error.php?code=0x1544");
                                $errors["code"][] = "0x1544";
                                //die();
                            }
    
                        }
                       
                        // register on newsportal
                        $np_fields["fullname"] =  $savedUser->getFirstName()." ".$savedUser->getLastName();
                        $np_fields["username"] = explode(" ",$savedUser->getName())[0];
                        $np_fields["password"] = md5($val["password"]);
                        $np_fields["email"] = $savedUser->getEmail();
                        $np_fields["ipos"] = np_get_ipos();
                        $np_fields["keysi"] = $keys;

                        $np_pdo = create_np_pdo();
                        if(!$np_pdo){
                            // handle error
                            //header("Location: ../error.php?code=0x1545");
                            $errors["code"][] = "0x1545";
                            //die();
                        }else{
                            $np_users_table = new \Ninja\DatabaseTable($np_pdo , 'users', 'usid', 'User');
                            $np_user = $np_users_table->save($np_fields);
                            dump_to_file($np_user);
                            if(empty($np_user->{"usid"}))
                            {
                                //handle error
                               // header("Location: ../error.php?code=0x1546");
                                //die();
                                $errors["code"][] = "0x1546";
                            } 
                        }
                                               
        
                        if(empty($errors))
                        {
                            //send validation email
                            $myurl = getAppConfig("site_url")."/dashboard/index.php";
                            $headers = 'MIME-Version: 1.0'."\r\n";
                            $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
                            $headers .= "From: ".getAppConfig('site_title')." ".getAppConfig('site_reply_mail')."\r\n";
                            $bodys = "<div><h4>".getAppConfig('site_title')."</h4></div><div>Hello, ".$savedUser->getName().", Before you can login, you first need to activate your account. To do so, please follow this link(if clicking it doesn't work, you may need to manually copy it to a new browser window):</div><br /><br /><div><a href='$myurl?pub=$keys'>$myurl?pub=$keys</a></div><br /><br /><div>Regards, ".getAppConfig('site_title')."</div>";
                            $subject = "Welcome to ".getAppConfig('site_title');
                            
                            if(!mail($savedUser->getEmail(),$subject,$bodys,$headers))
                            {
                                $errors[] = 'send verification email failed';
                                $msg = "fail";
                            }else{
                                $msg = "success";
                            }
                        }else{
                            $msg = "fail";
                        }

                        dump_to_file($errors);
                        if(!empty($errors["code"]))
                        {
                            $errors[] = "error code: ".$errors["code"][0];
                            unset($errors["code"]);

                            //remove saved emails
                            dump_to_file($savedUser);
                            if(!empty($savedUser->{"id"}))
                            {
                                
                                $newUser["id"] = $savedUser->{"id"};
                                $newUser["email"] = $newUser["email"]."*".time(); 
                                $savedUser = $usersTable->save($newUser);
                            }
                            
                            if(!empty($np_user->{"usid"}))
                            {
                                $np_fields["email"] = $np_fields["email"]."*".time(); 
                                $np_user = $np_users_table->save($np_fields);
                            }
                                                        

                            if(!empty($np_user->{"guid"}))
                            {
                                $ossn_fields["email"] =  $ossn_fields["email"]."*".time();
                                $ossn_user = $ossn_users_table->save($ossn_fields);
                            }
                            
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
                /*
                *activate on main site
                */
                $userUpdate["id"] = $user->getUserId();
                $userUpdate["email_ok"] = 1;
                $usersTable->save($userUpdate);
                $authentication->saveSession($user->getEmail(),$user->getPassword());

                /* 
                * active on newsportal
                */
                $np_pdo = create_np_pdo();
                if(!$np_pdo){
                    // handle error
                    header("Location: ../error.php?code=0x1545-2");
                    die();
                }
                $np_users_table = new \Ninja\DatabaseTable($np_pdo , 'users', 'usid', 'User');
                $sql = "SELECT * FROM ".$np_users_table->getTableName()." WHERE email=?";
                $np_res = $np_users_table->customQuery($sql, $user->getEmail());
                $np_user = $np_res[0];
                if(empty($np_user->{"usid"}))
                {
                    //handle error
                    header("Location: ../error.php?code=0x1546-2");
                    die();
                }
                $np_user_update["usid"] = $np_user->{"usid"};
                $np_user_update["tempass"] = 1;
                $np_user_update["active"] = 1;
                $np_users_table->save($np_user_update);

                /*
                * active on social community
                */
                $ossn_pdo = create_ossn_pdo();
                if(!$ossn_pdo){
                    // handle error
                    header("Location: ../error.php?code=0x1543-2");
                    die();
                }
                $ossn_users_table = new \Ninja\DatabaseTable($ossn_pdo , 'ossn_users', 'guid', 'User');
                $sql = "SELECT * FROM ".$ossn_users_table->getTableName()." WHERE email=?";
                $ossn_res = $ossn_users_table->customQuery($sql, $user->getEmail());
                $ossn_user = $ossn_res[0];
                if(empty($ossn_user->{"guid"}))
                {
                    //handle error
                    header("Location: ../error.php?code=0x1544-2");
                    die();
                }
                $ossn_user_update["guid"] = $ossn_user->{"guid"};
                $ossn_user_update["activation"] = "";
                $ossn_users_table->save($ossn_user_update);
                
                header("Location: ".getAppConfig("site_url")."/dashboard/index.php");
                die();
            }else{
                header("Location: ../error.php?code=0x1547");
                die();
            }
        }else{
            dump_to_file($res);
            header("Location: ../error.php?code=0x1548");
            die();
        }
        
    }
    ?> 
    <script type="text/javascript">
    // redirect to register.php
    window.location.href = '<?php echo getAppConfig("site_url"); ?>/register.php';
    </script>
    <?php
    die();
}
elseif(isset($_GET['logout']))
{
    $authentication->logout();
    header("Location: ../register.php");
    die();
}else{
    if(!$currentUser = $authentication->getUser())
    {
        header("Location: ../error.php?code=0x15452");
        die();
    }
}
?>

<?=$output?>
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
    <link href="../assets/css/custom.css" rel="stylesheet" />

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
                    <?php if($currentUser->isAdmin()):?>
                    <li class="<?=$page=="tables"?"active":""?>">
                        <a href="./tables.php">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <?php endif ?>
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