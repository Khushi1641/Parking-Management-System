<!DOCTYPE php>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:03:36 GMT -->
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

                                    <li class="menu-item  active-color"><a href="register.php">Register</a></li>
                                     <li class="menu-item "><a href="contact.php">contact</a></li>
                                   
                                    
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
                            <h3>Register</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> pages </a></li>
                                <li class="active">Register</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="wheel-register-block">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-5 padd-l0">
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>have an account? Log In</h5>
                            </div>
                            <form action="#">
                                <label for="userName" class="fa fa-user"><input type="text" id="userName" placeholder='Username / Email'></label>
                                <label for="userPass" class="fa fa-lock"><input type="text" id='userPass' placeholder='Passsword'></label>
                                <button class="wheel-btn">Login Now</button>
                                <label class="password-sing clearfix" for="input-val2">
                                <input type='checkbox' id='input-val2'><span>Keep me signed in</span>
                                <a href="#">Forgot password?</a>
                                </label>
                            </form>
                        </div>
                    </div> -->
                    <div class="col-md-7 padd-r0">
                        <?php 
                        require 'dbconnect.php';
                        $qry = "SELECT * FROM security_tbl WHERE Isactive =1";
                        $rs = mysqli_query($conn,$qry);
                        ?>
                        <div class=" marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Sign up Now </h5>
                                <h3>Get<span>Registered</span></h3>
                            </div>
                            <form action="registration.php" method="POST">
                                <label for="exampleInputname">First name</label>
                                <input type="text" placeholder="First Name" class="form-control" name="firstname">
                                <label for="exampleInputname">Last name</label>
                                <input type="text" placeholder="Last Name" class="form-control" name="lastname">
                                <label for="exampleInputname">Username</label>
                                <input type="text" placeholder="Username" class="form-control" name="username">
                                <label for="exampleInputname">Email</label>
                                <input type="text" placeholder="Email" class="form-control" name="email">
                                <label for="exampleInputname">Mobile no.</label>
                                <input type="text" placeholder="Mobile no." class="form-control" name="mobilenum" minlength="10">
                                <label for="exampleInputname">Gender :</label>
                                <input type="radio" name="gender" value="male" >male
                                         <input type="radio" name="gender" value="female">Female 
                                </br>
                                <label for="exampleInputname">Password</label>
                                <input type="password" placeholder="Password" class="form-control" name="password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <label for="exampleInputname">Confirm Password</label>
                                <input type="password" placeholder="Confirm Password" class="form-control" name="confirmpassword" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <!-- <label for="exampleInputname">Security Question</label>
                                <select name="security_question" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs))
                                    {
                                        while($row=mysqli_fetch_assoc($rs))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row['security_question']; ?>"><?php echo $row['security_question'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select>
                                <label for="exampleInputname">Security Answer</label>
                                <input type="text" placeholder="Security Answer" name="security_answer" class="form-control"> -->
                                <label for="input-val1">
                                <input type="checkbox" id='input-val1' required="required"><span>I agree with the </span>
                                <!-- <a href="#">Terms and Conditions</a> -->
                                </label>
                                <input type="submit" name="submit" value="sign Up" class="wheel-btn">
                                <!-- <button class="wheel-btn">Sign Up</button> -->
                            </form>
                            
                        </div>
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

<!-- Mirrored from demos.jeweltheme.com/wheel/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:03:37 GMT -->
</php>