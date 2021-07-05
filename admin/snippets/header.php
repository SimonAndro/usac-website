<cms:php>
    require_once __DIR__ ."/../global_auth.php";
    if($authentication->isLoggedIn()){
        global $CTX;
        $CTX->set( 'user_logged_in', 1, 'global' );
    }
</cms:php>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>USAC</title>

    <meta name="description" content="simple description for your site">
    <meta name="keywords" content="keyword1, keyword2">
    <meta name="author" content="Jobz">

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@yourtwitterusername">
    <meta name="twitter:creator" content="@yourtwitterusername">
    <meta name="twitter:url" content="http://twitter.com">
    <meta name="twitter:title" content="Your home page title, max 140 char"> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-144-144.png">
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title">
    <meta property="og:url" content="http://your domain here.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Your site name here">
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website"> <!-- 'article' for single page  -->
    <meta property="og:image" content="assets/img/opengraph/fbphoto-476-476.png">
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
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
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
</head>

<body>

    <!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="preheader-area">
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
                                <a title="Register or Login" class="btn-auth btn-auth" href="register.php">Login or Signup</a>
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
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.php" data-toggle="dropdown"
                                            role="button">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="blog.php">Blog List</a></li>
                                            <li class="nav-item"><a class="nav-link" href="single-blog.php">Single Blog
                                                    Right Sidebar</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="single-blog-leftsidebar.php">Single Blog left Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="single-blog-withoutsidebar.php">Single Blog No Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
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
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--== Header Area End ==-->