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
                        <li><a href="adddservice.php">Add Services</a></li>
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
        var_dump($_GET);
        $service_id = $_GET['service_id'];
        echo $service_id;
        $qry="SELECT * from service_tbl WHERE service_id = '$service_id'";
        $rs=mysqli_query($conn,$qry);
        $row = mysqli_fetch_assoc($rs);
        $qry1="SELECT * FROM vehicle_tbl WHERE Isactive =1";
        $rs1=mysqli_query($conn,$qry1);
        $row1 = mysqli_fetch_assoc($rs1);
        ?>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel">
                        <header class="panel-heading">
                            Edit Service
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action ="updateservice.php" method = "POST">
                                <input type="hidden" name="service_id" value="<?php echo $row['service_id'];?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Service Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="service_name" value="<?php echo $row['service_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vehicle Id</label>
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                                <select name="vehicle_id" class="form-control">
                                <?php
                                if(mysqli_num_rows($rs1))
                                {
                                    while($row=mysqli_fetch_assoc($rs1))
                                    {
                                        echo $row1['vehicle_id'];
                                ?>  
                                
                                <option value="<?php echo $row1['vehicle_id']; ?>"><?php echo $row1['vehicle_id'];?></option>
                                <?php
                                    }
                                }
                                ?>  
                                </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Vehicle Id</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div> -->
                                
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <input type="submit" name="submit" class="btn btn-info">
                            </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
          <div class="footer">
            <div class="wthree-copyright">
              <p>?? 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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
