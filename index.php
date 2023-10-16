<?php 
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Online Notice Board</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=d8757aeceb75e3b7250ddf3380e9d994">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css?h=587ac2057624923cd5be3eaf8b1158cd">






</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container" style="height: 30px;">
            <a class="navbar-brand" href="/noticey/index.php">Online Notice Board</a><button data-toggle="collapse"
                data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
                data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="./registration.php">Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="./login.php">Login&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="./admin/index.php">Admin Login</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="#about">About</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                            href="#contact">Contact</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/bg.jpg');margin-top: 70px;">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span style="color: #cda8a8;">Welcome To Online Notice Board System</span>
                </div>
                <div class="intro-heading text-uppercase"><span style="color: #f3f3f3;">It's glad to help you</span>
                </div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button"
                    href="registration.php">Get
                    Started</a>
            </div>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js?h=55603d8db4181fc7bc80e0433e95435c"></script>
</body>

</html>