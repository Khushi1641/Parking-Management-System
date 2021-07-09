<!DOCTYPE php>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:13 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Park On</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/php5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index-2.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href="#"><i class="fa fa-phone"></i><span>(+91) 90987 89089</span></a></div>
                                <div class="top-menu-item"><a href="#"><i class="fa fa-envelope"></i><span>parkOn@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <?php
                                    session_start();
                                            if(isset($_SESSION['n']))
                                            {
                                            ?>
                                            <li><a href="logout.php">Logout</a></li>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <li><a href="index.php">Login</a></li>
                                            <?php
                                            }
                                        ?>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children    ">
                                        <a href="index.php">Home</a>
                                       
                                    </li>
                                    <li class="menu-item "><a href="about.php">About</a></li>
                                    <li class="menu-item ">
                                        <a href="services.php">Services</a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="reservation1.php">Booking</a>
                                    </li>

                                    <li class="menu-item "><a href="register.php">Register</a></li>
                                     <li class="menu-item active-color "><a href="contact.php">contact</a></li>
                                   
                                    
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Get in touch</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> pages </a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-map-marker"></i></div>
                        <h4>Address</h4>
                        <span>604 abc1, CG road, Navrangpura, Ahmedabad</span>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-phone"></i></div>
                        <h4>telePhone</h4>
                        <a href="#"><span>(+61)  3 8376 6284</span></a>
                        <a href="#"><span>(+61)  3 8376 6284</span></a>
                    </div>
                </div>
                
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-envelope"></i></div>
                        <h4>Email</h4>
                        <a href="#"><span>parkon@imail.com</span></a>
                        <a href="#"><span>info@wheelrental.com</span></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- ////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t85 marg-lg-b90  marg-md-t50">
                        <h5>Say Hello! </h5>
                        <h3>Send Us a <span>Message</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <form action="dataform_contact.php" method="POST"></form>

                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-contact-form text-center marg-lg-b145">
                        <div class="form">
                            <input type="text" name="name"placeholder="Your Name *" style="border-color: gray; text-decoration-color: black">
                            <input type="text" name="email"placeholder="Your Email *" style="border-color: gray;">
                            <input type="text" name="subject"placeholder="Subject*" style="border-color: gray;">
                            <textarea   placeholder="Message *" name="message" style="border-color: gray;"></textarea>
                            <button type="submit" class="wheel-btn" name="submit">Submit Message</button>
                            <!-- <center><input type="submit" name="submit" value="Submit" class="wheel-btn" style="color:black; background-color: darkorange; margin-left: 350px;"></center> -->
                        </div>
                    </div>
                </div>
            </form>
            </div>    
            </div>
        </div>
        
                <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; ParkOn 2019 | Designed & Developed with Love By Khushi & Mahek</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Service</a></li>
                            <li><a href="contact.php">Contact</a></li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>

<!-- Mirrored from demos.jeweltheme.com/wheel/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:15 GMT -->
</php>