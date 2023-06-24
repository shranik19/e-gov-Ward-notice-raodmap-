<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Ward notice application</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

</head>
<!-- body -->

<body>

    <div class="logo-head">WNA(Ward Notice Application)</div>
    <div class="header">
        <div class="container">
            <!--  header inner -->
            <div class="col-sm-12">

                <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <img class="logo" src="images/wna_logo.png">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/home">HOME<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/notice">NOTICE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/event">EVENTS</a>
                                </li>
                                <li class="#" href="#">
                                    <a class="nav-link" href="/service">SERVICE</a>
                                </li>
                                <li class="#" href="#">
                                    <a class="nav-link" href="/roadmap">ROADMAP</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="/contact">CONTACT</a>
                                </li>

                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="/admin/login">ADMIN</a>
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header end -->


    @yield('content')



    <!--Contact_section start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text"><a
                                    href="https://www.google.com/maps/dir/27.7103128,85.3440271/Jayabageshwori+Temple,+Jayabageshwori+Marg,+Kathmandu+44600,+Nepal/@27.7102952,85.2739868,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x39eb197767d4985d:0xde144fbb22731390!2m2!1d85.344047!2d27.7103485">Jayabageshwori,Kathmandu<br>Nepal</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text"><a href="tel:+9779842478862">988-9842478862</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text"><a
                                    href="mailto:shraniksanga9@gmail.com">shraniksangat9@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact_section end -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="copyright_text">© 2023 All Rights Reserved. <a href="https://html.design">Designed
                                by: Shranik Soyeshma and Nhuja</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        @yield('script')

</body>

</html>
