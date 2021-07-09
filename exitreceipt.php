<?php
    session_start();
?>
<!DOCTYPE html>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:15 GMT -->
<head>
        <style type="text/css">
            .formdata
            {
                height: 600px;
                width: 100%;
/*                margin-bottom: 40px; 
*/            }

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel - Responsive and Modern Car Rental Website Template</title>
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
                                <div class="top-menu-item"><a href="#"><i class="fa fa-phone"></i><span>(+61) 3214 546789</span></a></div>
                                <div class="top-menu-item"><a href="#"><i class="fa fa-envelope"></i><span>contact@wheel-rental.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a href="index.php">Login</a></li> -->
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                               <ul class="main-menu dl-menu">
                                    <li class="menu-item    menu-item-has-children    ">
                                        <a href="index.php">Home</a>
                                       
                                    </li>
                                    <li class="menu-item"><a href="about.php">About</a></li>
                                    <li class="menu-item ">
                                        <a href="services.php">Services</a>
                                    </li>
                                    <li class="menu-item current-menu-parent active-color">
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
        <!-- ////////////////////////////////////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Confirmation receipt</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Reservation </a></li>
                                <li class="active">Receipt</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////// -->
            <div class="step3 formdata" >
                <div class="container" style="height:500px; width:500px;">
                <div class="row form-group">
                <div class="col-xs-12">
<!--                 <ul class="nav nav-pills nav-justified thumbnail setup-panel">
 -->                    
                       <!--<center<h4 class="form-control">Confirmation receipt</h4></center>
                        </ul>-->
                    

    
        <div class="container col-xs-12">
            <table class="table table-striped" style="margin-top: 50px;">
                <tr>
                    <th><center><h3>Title</h3></center></th>
                    <th><h3>Data</h3></th>
                </tr>
                <?php
                require 'dbconnect.php';
                    $user = $_SESSION['id'];
                    $select_user = "SELECT * FROM user_tbl WHERE `id`='".$user."'";
                    $rs_user = mysqli_query($conn,$select_user);
                    if(mysqli_num_rows($rs_user))
                    {
                        while($row_user=mysqli_fetch_assoc($rs_user))
                        {
                            ?>
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <?php echo $row_user['username']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <?php echo $row_user['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Contact:
                                </td>
                                <td>
                                    <?php echo $row_user['mobilenum']; ?>
                                </td>
                            </tr>
                            <?php 
                            $select_park = "SELECT * FROM parking_tbl WHERE `u_id`='".$user."' ORDER BY `parking_tbl`.`parking_id` DESC";
                            echo $select_park;
                            $rs_park = mysqli_query($conn,$select_park);

                                    if(mysqli_num_rows($rs_park))
                                    {
                                        $row_park=mysqli_fetch_assoc($rs_park)
                                    ?>
                                    <tr>
                                        <td>Vehical Type:</td>
                                        <td><?php echo $row_park['vehicle_type'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Vehical Number:</td>
                                        <td><?php echo $row_park['vehicle_number'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Slot Name:</td>
                                        <td><?php echo $row_park['slot_name'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Entry Date:</td>
                                        <td><?php echo $row_park['enterdate'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Entry Time:</td>
                                        <td><?php echo $row_park['entertime'];?></td>
                                    </tr>
                                    <tr>
                                        <td>hour:</td>
                                        <td><?php echo $row_park['hours'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Selected Services:</td>
                                        <td>
                                            <?php
                                            $parkid = $row_park['parking_id'];
                                            $select_serv = "SELECT * FROM service_tbl WHERE `park_id`='".$parkid."'";
                                            $rs_serv = mysqli_query($conn,$select_serv);
                                            if(mysqli_num_rows($rs_serv)>0)
                                            {
                                                while($row_serv=mysqli_fetch_assoc($rs_serv))
                                                {
                                                    
                                                    if($row_serv['serv1']=="on")
                                                    {
                                                        echo "External washing";
                                                    }
                                                    echo "<br>";
                                                    if($row_serv['serv2']=="on")
                                                    {
                                                        echo "Carpet Cleaning";
                                                    }
                                                    echo "<br>";
                                                    if($row_serv['serv3']=="on")
                                                    {
                                                        echo "Glass Cleaning";
                                                    }
                                                    echo "<br>";
                                                    if($row_serv['serv4']=="on")
                                                    {
                                                        echo "Car shinning with dry cloth";
                                                    }
                                                    echo "<br>";
                                                    if($row_serv['serv5']=="on")
                                                    {
                                                        echo "Pressure water cleaning";
                                                    }
                                                    echo "<br>";
                                                    if($row_serv['serv6']=="on")
                                                    {
                                                        echo "Dust Removing";
                                                    }
                                                    echo "<br>";

                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount:</td>
                                        <td><?php echo $row_park['service_amount'];?></td>
                                    </tr>
                                    <?php
                                    }
                            }
                        }

                ?>
            </table>
                       
                </div>
                </div>
                </div>
            </div>
        </div>
        
                <marquee><font color="blue"><h3>Thank you for parking with us!<h3></font></marquee>
       
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By <a href="https://themeforest.net/user/bigpsfan">bigpsfan</a> &amp; Developed By <a href="https://jeweltheme.com/">Jewel Theme</a></span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact</a></li>
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

<!-- Mirrored from demos.jeweltheme.com/wheel/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:30 GMT -->
</php>