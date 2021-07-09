<!DOCTYPE php>
<php lang="en">
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
    </head>
    <body class="">
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.php"><img src="images/logo1.png" alt="" width="80" height="900"></a>
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
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
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
                                    
                                     <li class="menu-item "><a href="contact.php">contact</a></li>
                                   
                                    
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-start">
            <img src="images/bg1.jpg" alt="" class="wheel-img">
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                        <h1>We Give You Space  </h1>
                        <h2>Park - Your Car - Safe</h2>
                        <span>We Help you to park a car</span>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                        <form action="sendmail.php" method="POST">
                           <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: #A94442; background: #F2DEDE; padding: 10px; width: 95%; border-radius: 5px; margin: 6px auto;"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                            <label for="userName" class="fa fa-user"><span>Email:</span>
                            <input type="text" placeholder="Enter email" name="email" required>
                            </label>
                            <center><input type="submit" id="btn" value="Send E-mail" name="submit"></center>
                        </br>
                            <!-- <a href="sendmail.php"><b>Forgot password?</b></a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    
      
     
      
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; ParkOn 2021 | Designed & Developed by Khushi</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
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

<!-- Mirrored from demos.jeweltheme.com/wheel/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:03:31 GMT -->
</php>
<?php
    session_start();
    if(isset($_SESSION['n']))
    {
        header("location:reservation1.php");
    }
    if(isset($_COOKIE['username']))
    {
        $un=$_COOKIE['username'];
        $ps=$_COOKIE['password'];
    }
    else
    {
        $un="";
        $ps="";
    }
    if(isset($_GET['err']))
    {
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("your vehical already park.");
            });
        </script>
        <?php
    }
?>