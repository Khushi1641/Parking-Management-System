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
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
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
       
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">ADMIN</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <!-- <li><a href="index.php"><i class="fa fa-key"></i> Log In</a></li> -->
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
                        <span>Manage Guard</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addguard.php">Add Guard</a></li>
                        <li><a href="viewguard.php">View Guard</a></li>
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
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     View Parking
    </div>
    <div>
      <table class="table">
        <thead>
            <?php
require 'dbconnect.php';
$qry = "SELECT * FROM user_tbl WHERE Isactive=1 or Isactive=0";
$rs = mysqli_query($conn,$qry);
?>
    <tr>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Username</td>
        <td>Email</td>
        <td>Mobile num</td>
        <td>Gender</td>
        <td>Password</td>
        <td>Usertype</td>
        <td>Security Question</td>
        <td>Security Answer</td>
        <td>Isactive</td>
        <td>Status</td>
        <td>Delete</td>

    </tr>
    <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {
                //if($row['usertype']==2)
                //{ 
                ?>  
        <tr>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobilenum'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['usertype'];?></td>
            <td><?php echo $row['security_question'];?></td>
            <td><?php echo $row['security_answer'];?></td>
            <td><?php echo $row['isactive'];?></td>
            <td><a href="userstatus.php?id=<?php echo $row['id']?>">Change</a></td>
            <td><a href="deleteuser.php?id=<?php echo $row['id']?>">Delete</a></td>

        </tr>       

<?php    
    //}
    }
}   
    ?>      
    </table>    
</body>
</html>
           </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
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
</body>
</html>
