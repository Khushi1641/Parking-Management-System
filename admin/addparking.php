<?php
session_start();
    if(!isset($_SESSION['n']))
    {
        header("location:index.php");
    }
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">ADMIN</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Parking</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addparking.php">Add Parking</a></li>
                        <li><a href="viewparking.php">View Parking</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Vehicle</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addvehicle.php">Add Vehicle</a></li>
                        <li><a href="viewvehicle.php">View Vehicle</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Slots</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addslot.php">Add Slots</a></li>
                        <li><a href="viewslot.php">View Slots</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Services</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addservice.php">Add Services</a></li>
                        <li><a href="viewservice.php">View Services</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Security Que.</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addsecurity.php">Add Security Que.</a></li>
                        <li><a href="viewsecurity.php">View Security Que.</a></li>
                    </ul>
                </li>
                <li>
                    <a href="viewproduct.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>View User</span>
                    </a>
                </li>
                <li>
                    <a href="viewproduct.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>View Feedback</span>
                    </a>
                </li> 
                <li>
                    <a href="viewproduct.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>View Contact</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>State Management</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addstate.php">Add State</a></li>
                        <li><a href="viewstate.php">View State</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>City Management</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addcity.php">Add City</a></li>
                        <li><a href="viewcity.php">View City</a></li>
                    </ul>
                </li>
                
                
            </ul>         
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
        <?php 
        require 'dbconnect.php';
$qry1 = "SELECT * FROM slot_tbl WHERE Isactive =1";
$qry2 = "SELECT * FROM slot_tbl WHERE Isactive =1";
$qry3 = "SELECT * FROM vehicle_tbl WHERE Isactive =1";
$qry4 = "SELECT * FROM vehicle_tbl WHERE Isactive =1";
$qry5 = "SELECT * FROM vehicle_tbl WHERE Isactive =1";
$qry6 = "SELECT * FROM service_tbl WHERE Isactive =1";


$rs1 = mysqli_query($conn,$qry1);
$rs2 = mysqli_query($conn,$qry2);
$rs3 = mysqli_query($conn,$qry3);
$rs4 = mysqli_query($conn,$qry4);
$rs5 = mysqli_query($conn,$qry5);
$rs6 = mysqli_query($conn,$qry6);
        ?>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel">
                        <header class="panel-heading">Add Parking</header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="insertparking.php" method="POST">
                               <!--  <div class="form-group">
                                    <label for="exampleInputEmail1">Slot Id</label>
                                    <select name="slot_id" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs1))
                                    {
                                        while($row1=mysqli_fetch_assoc($rs1))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row1['slot_id']; ?>"><?php echo $row1['slot_id'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select> -->
                                    <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slot Id">  -->
                                <!-- </div> -->
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Vehicle Id</label>
                                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Vehicle ID"> -->
                                    <!-- <select name="vehicle_id" class="form-control">
                                    <?php
                                    // if(mysqli_num_rows($rs3))
                                {
                                        // while($row3=mysqli_fetch_assoc($rs3))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row3['vehicle_id']; ?>"><?php echo $row3['vehicle_id'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vehicle Type</label>
                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="User ID"> -->
                                    <select name="vehicle_type" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs4))
                                    {
                                        while($row4=mysqli_fetch_assoc($rs4))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row4['vehicle_type']; ?>"><?php echo $row4['vehicle_type'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vehicle Number</label>
                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type"> -->
                                    <select name="vehicle_number" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs5))
                                    {
                                        while($row5=mysqli_fetch_assoc($rs5))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row5['vehicle_number']; ?>"><?php echo $row5['vehicle_number'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">SLot Name</label>
                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Number"> -->
                                    <select name="slot_name" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs2))
                                    {
                                        while($row2=mysqli_fetch_assoc($rs2))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row2['slot_name']; ?>"><?php echo $row2['slot_name'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Service name</label>
                                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                    <!-- <select name="service_name" class="form-control">
                                    <?php
                                    if(mysqli_num_rows($rs6))
                                    {
                                        while($row6=mysqli_fetch_assoc($rs6))
                                        {
                                    ?>  
                                    
                                    <option value="<?php echo $row6['service_name']; ?>"><?php echo $row6['service_name'];?></option>
                                    <?php
                                        }
                                    }
                                    ?>  
                                    </select> -->
                                <!--</div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Slot Available</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Service Id</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Parking Id</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DateTime</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div> -->
                                
                                
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
          <div class="footer">
            <div class="wthree-copyright">
              <p></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    
    <!-- //calendar -->
</body>
</html>
