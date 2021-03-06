<cms:php>
    require_once __DIR__ ."/../global_auth.php";
    global $CTX;
    if($authentication->isLoggedIn()){
    $CTX->set( 'user_logged_in', 1, 'global' );
    }

    /*
    $sql = "SELECT total_users FROM ".$core_config_table->getTableName()." LIMIT 1";;
    $res = $core_config_table->customQuery($sql);
    $res = $usersTable->customQuery($sql);
    $res= (array)$res[0];
    $totalUsers = $res['total_users'];
    */

    $sql = "SELECT COUNT(id) FROM ".$usersTable->getTableName()." WHERE email_ok=1";
    $res = $usersTable->customQuery($sql);
    $totalUsers = $res[0]->{'COUNT(id)'};
    //dump_to_file($totalUsers);
    $CTX->set( 'usac_total_user', $totalUsers, 'global' );

    if($CTX->get('u_sub_page') == "directory")
    {
        $dpage_size = 10;
        $curr_page = 1;
        $total_pages = 1;

        if(!empty($_POST['val']))
        {
            $val = $_POST['val'];
            if(!empty($val['dir_search']) && !empty($val['key_word']))
            {
                $key_word = htmlentities(trim($val['key_word']));
                $CTX->set( 'u_s_key_word', $key_word, 'global' );

                $sql = "SELECT * FROM ".$usersTable->getTableName()." WHERE (name LIKE '%$key_word%' ) OR (name_last LIKE '%$key_word%' ) OR (university LIKE '%$key_word%' ) AND email_ok=1 LIMIT $dpage_size";
                $res = $usersTable->customQuery($sql);
                $CTX->set('u_user_data',$res,'global');
            }
        }
        else{

            if(!empty($_GET['dir_page']) and is_numeric($_GET['dir_page']) and $_GET['dir_page']>0) //check for valide page
            {
                $dpage = (int)$_GET['dir_page'];
            }else{
                $dpage = 1;
            }


            if($dpage == 1){
                $doffset = 0;
            }else{
                $doffset = (int)($dpage-1)*$dpage_size;
            }

            $sql = "SELECT * FROM ".$usersTable->getTableName()." WHERE email_ok=1 ORDER BY id DESC LIMIT $dpage_size OFFSET $doffset ";
            $res = $usersTable->customQuery($sql);

            $curr_page = ceil((count($res) + $doffset)/$dpage_size);

            $total_pages = ceil($totalUsers/$dpage_size);

            $next_page = $curr_page+1;
            if($next_page <= $total_pages)
            {
                $CTX->set( 'u_next_page', $next_page, 'global' );
            }
            $prev_page = $curr_page-1;
            if($prev_page > 0)
            {
                $CTX->set( 'u_prev_page', $prev_page, 'global' );
            }
            $CTX->set('u_user_data',$res,'global');
        }
        $CTX->set( 'u_dcurr_page', $curr_page, 'global' );
        $CTX->set( 'u_dtotal_page', ($total_pages==0)?1:$total_pages, 'global' );
    }
</cms:php>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><cms:show u_page /> | Uganda Students' Association In China</title>

    <meta name="description" content="The USAC Website is the information hub for Ugandan Students in China. It provides information about coming activities, scholarship opportunities, seminars and other related information.">
    <meta name="keywords" content="usac students, usac-students, uganda students association in china, usac">
    <meta name="author" content="USAC">

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="Uganda Students' Association in China,the information hub for Ugandan Students in China.">
    <meta name="twitter:site" content="@uganda_china">
    <meta name="twitter:creator" content="@uganda_china">
    <meta name="twitter:url" content="http://twitter.com">
    <meta name="twitter:title" content="home | Uganda Students' Association in China"> <!-- maximum 140 char -->
    <meta name="twitter:description" content="The USAC Website is the information hub for Ugandan Students in China. It provides information about coming activities, scholarship opportunities, seminars and other related information. "> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/usac-logo.png">
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="home | Uganda Students' Association In China">
    <meta property="og:url" content="https://usac-students.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="USAC website">
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website"> <!-- 'article' for single page  -->
    <meta property="og:image" content="assets/img/usac-logo.png">
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/mstile-150x150.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
<script src="assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<![endif]-->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css">

    <!-- Jquery Ui css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="assets/vendor/jquery/jquery-ui.css"> -->

    <!--Animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all">

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css">

    <!--owl carousel css -->
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all">

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all">

    <!--Nice Select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all">

    <!--Offcanvas css -->
    <link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all">

    <!-- MODERNIZER  -->
    <script src="assets/vendor/modernizr/modernizr-custom.js"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4913481205042140"
     crossorigin="anonymous"></script>

</head>

<body>

    <!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="preheader-area" style="position:relative; z-index:10;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-7">
                        <!-- <div class="preheader-left">
                            <a href="mailto:usacadmin@usac.com"><strong>Email:</strong> usacadmin@usac.com</a>
                            <a href="mailto:info@construc.com"><strong>Hotline:</strong> 880 454 5477</a>
                        </div> -->
                    </div>

                    <div class="col-lg-6 col-sm-5 col-5 text-right">
                        <div class="preheader-right">
                            <cms:if user_logged_in>
                                <a title="Dashboard" class="btn-auth btn-auth-rev" href="./dashboard">Dashboard</a>
                                <a title="Register or Login" class="btn-auth btn-auth"
                                    href="./dashboard/index.php?logout=1">Logout</a>
                                <cms:else />
                                <a title="Register or Login" class="btn-auth btn-auth" href="register.php">Login or
                                    Signup</a>
                            </cms:if>

                            <cms:if k_template_name="register.php">
                                <cms:if user_logged_in>
                                    <cms:php>
                                        header("Location: ./dashboard");
                                    </cms:php>
                                </cms:if>
                            </cms:if>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-area" id="fixheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/img/usac-logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="menucontent">
                                <ul class="navbar-nav ml-auto">
                                    <li class='nav-item <cms:if u_page eq "home" > active </cms:if>'><a class="nav-link"
                                            href="index.php">Home</a></li>
                                    <li class='nav-item <cms:if u_page eq "about" > active </cms:if>'><a
                                            class="nav-link" href="about.php">About</a></li>
                                    <li class='nav-item <cms:if u_page eq "event" > active </cms:if>'><a
                                            class="nav-link" href="event.php">Event</a></li>
                                    <li class='nav-item <cms:if u_page eq "gallery" > active </cms:if>'><a
                                            class="nav-link" href="gallery.php">Gallery</a></li>
                                    <li class='nav-item <cms:if u_page eq "blog" > active </cms:if>'>
                                        <a class="nav-link" href="blog.php">Blog</a>
                                    </li>
                                    <li class='nav-item <cms:if u_page eq "member" > active </cms:if> dropdown'>
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"
                                            role="button">Member Area</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="newsportal">News Portal</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="community">Social
                                                    Community</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="committee.php">Committee</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="directory.php">Directory</a>
                                            <li class="nav-item"><a class="nav-link" href="constitution.php">Constitution</a>
                                            <li class="nav-item"><a class="nav-link" href="register.php">Create Account</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class='nav-item <cms:if u_page eq "contact" > active </cms:if>'><a class="nav-link"
                                            href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--== Header Area End ==-->
