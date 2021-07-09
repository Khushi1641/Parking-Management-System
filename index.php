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
                        <form action="checklogin.php" method="POST">
                           <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: #A94442; background: #F2DEDE; padding: 10px; width: 95%; border-radius: 5px; margin: 6px auto;"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                 <?php if (isset($_GET['er'])) { ?>
                <p class="error" style="color: #A94442; background: #F2DEDE; padding: 10px; width: 95%; border-radius: 5px; margin: 6px auto;"><?php echo $_GET['er']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['m'])) { ?>
                <p class="success" style="color: #A94442; background: #F2DEDE; padding: 10px; width: 95%; border-radius: 5px; margin: 6px auto;"><?php echo $_GET['m']; ?></p>
                <?php } ?>
                            <label for="userName" class="fa fa-user"><span>Username</span>
                            <input type="text" placeholder="Enter username" name="username" required>
                            </label>
                            <label for="userPass" class="fa fa-lock"><span>Password</span>
                            <input type="password" placeholder="password" name="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </label>
                            <label for="User type" class="fa fa-lock"><span>Usertype</span>
                            <select name="usertype" style="height: 30px; width: 320px;border:none">
                                <option value="1" style="height: 30px; width: 320px;border:none">Customer</option>
                                <option value="2" style="height: 30px; width: 320px;border:none">Security Guard</option>
                            </select></label>
                            <center><input type="submit" id="btn" value="LOGIN" name="submit"></center>
                        </br>
                            <a href="forgetpassword.php"><b>Forgot password?</b></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                        <img src="images/i7.png" alt="" class="wheel-img">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                        <div class="wheel-header">
                    
                            <h3>About the <span>System</span></h3>
                        </div>
                        
                        <p>This system is a versatile system which can be implemented at any location and condition with simple modification. This Project is also helpful to reduce man-power and total capital. Required for its installation and maintenance. This also reduces the congestion in the slot, as the number of vehicle are increasing day by day. For parking authorities and vehicle owner, parking management system resources are flexible enough to operate and manage. The design and implementation of parking management system is very easy to supervise and manage. This system can be easily handled by the staff members because of its well organized structure.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////// -->
        <div class="wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                            <h5>the Biggest Online </h5>
                            <h3>car <span>Parking</span>  Service</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-clients">
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-bg3">
                            <div class="wheel-service-logo">
                                <img src="images/ico1.png" alt="">
                            </div>
                            <h5>Most Affordable</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-lr0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                            <div class="wheel-service-logo">
                                <img src="images/ico2.png" alt="">
                            </div>
                            <h5>Best Rated</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-l0 padd-md-lr15">
                        <div class="wheel-service-item  text-center wheel-bg5">
                            <div class="wheel-service-logo">
                                <img src="images/ico3.png" alt="">
                            </div>
                            <h5>Excellent Service</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="wheel-service-img">
                        <img src="images/i1.png" alt="" class="wheel-img">
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                        <h3>What can<span> Park On</span> do for me?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-testimonial text-center">
                        <p>This system aims at providing a digital parking system handled by a PARKSOL AGENCY. Our motive is to provide easy and convenient parking slots to a user to park their vehicles. We allocate slots to the user as per their vehicle types and requirements as well as this system also provides facilities like vehicle cleaning, car washing, Air pumping etc. User can secure their parking slot by advance booking features. User is also eligible to release their allocated slots according to their convenience.  </p>
                        <!-- <div class="wheel-testimonial-info">
                            <span>Anthony Marshal</span>
                            <img src="images/l1.png" alt="">
                            <p> C.E.O. & Co-Founder</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 padd-lr0 ">
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-users"></i>
                        <span data-to="753" data-speed="10000"></span><b>+</b>
                        <p>Dedicated Employees</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-thumbs-o-up"></i>
                        <span data-to="9053" data-speed="5000"></span><b>+</b>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa  fa-car"></i>
                        <span data-to="529" data-speed="6000"></span><b>+</b>
                        <p>100% Fit Veihicles</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-trophy"></i>
                        <span data-to="111" data-speed="1000"></span><b>+</b>
                        <p>Int. Awards Achieved</p>
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