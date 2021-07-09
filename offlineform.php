<!DOCTYPE php>
<php lang="en">
  <?php
    session_start();
    ?>
<!-- Mirrored from demos.jeweltheme.com/wheel/reservation1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:13 GMT -->
<head>
        <style type="text/css">
            .tw
            {
                background: lightgray;
                color: black;
                height: 100px;
                border-radius: 10px;
            }
            .tw:hover,.fw:hover
            {
                background: gray;
                color: white;
            }
            .fw
            {
                background: lightgray;
                color: black;
                height: 100px;
                border-radius: 10px;
                margin-top: 60px;
            }
            .park
            {
                width: 700px;
                height: 300px;  
            }
            .formdata
            {
                border: 1px solid black;
                height: 300px;
                width: 100%;
                margin-bottom: 20px; 
            }
            .but
            {
                height: 50px;
                width: 150px;
                background: yellowgreen;
                color: white;
                font-size: 18px;
                line-height: 50px;
            }
            .final tr td 
            {
                padding-bottom: 20px;
            }
            .fff
            {
                line-height: 20px;
            }
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
        </style>
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
        <link rel="stylesheet" type="text/css" href="assets/css/btn.css">
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
                                <div class="top-menu-item"><a href="#"><i class="fa fa-envelope"></i><span>OFFLINE</span></a></div>

                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                   <?php
                                    //session_start();
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
                                    <li class="menu-item  active-color ">
                                        <a href="offlineform.php">OfflineForm</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="releasebooking.php">Release booking</a>
                                      </li>
<!--                                     <li class="menu-item "><a href="register.php">Register</a></li>
 -->                                     <li class="menu-item "><a href="contact.php">contact</a></li>
                                   
                                    
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
                            <h3>Reservation</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Reservation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="step-wrap">
            <!-- ////////////////////////////////////////// -->
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <ul class="steps">
                            <li class="title-wrap active">
                                <div class="title">
                                    Make a reservation
                                </div>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ////////////////////////////////////////// -->
        </div>

        <!-- ////////////////////////////////////////// -->
        <div class="container">
                <h3 class="text-left"> Offline booking form</h3><br>
                    <div class="container col-xs-12">
                        <div class="row clearfix">
                        <div class="col-md-12 column">  
            </div>
        </div>
    </div>

                <tbody>
                      <div class="container col-xs-12">
         <form action="dataform_guard.php" method="POST"> 
          <center>
            <div class="park">
              <div class="row">
              
                <?php
                    require 'dbconnect.php';

                    $kaka = $_SESSION['id'];
                    $select_kaka = "SELECT Location from guard_tbl WHERE id='".$kaka."'";
                    $rs_kaka = mysqli_query($conn,$select_kaka);
                    $row_kaka = mysqli_fetch_assoc($rs_kaka);
                    $location = $row_kaka['Location'];
                    $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='".$location."'";
                    $rs_slt = mysqli_query($conn,$select_slt);
                    // if(isset($_GET['$vehicle_type']))
                    // {
                    //   $vehicle_type=$_GET[''];
                    // }
                    if(mysqli_num_rows($rs_slt)>0)
                    {
                      while($row_slt=mysqli_fetch_assoc($rs_slt))
                      {
                          ?>
                          <a href="?slt=<?php echo $row_slt['slot_name'];?>&vt=2 wheeler">
                              <div class="col-md-1" id="pushbtn">
                                  <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}elseif($row_slt['slot_name']==$_GET['slt']){echo "background: yellowgreen;color:white";}?>">
                                      <div>
                                          <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <?php
                      }
                    }
                ?>
                <?php
                    $select_slt4 = "SELECT * FROM slot_tbl WHERE `vehicle_type`='4 wheeler' AND `Location`='".$location."'";
                    $rs_slt4 = mysqli_query($conn,$select_slt4);
                    if(mysqli_num_rows($rs_slt4)>0)
                    {
                      while($row_slt4=mysqli_fetch_assoc($rs_slt4))
                      {
                          ?>
                          <a href="?slt=<?php echo $row_slt4['slot_name'];?>&vt=4 wheeler">
                              <div class="col-md-2" id="pushbtn">
                                  <div class="tw slot" style="<?php if($row_slt4['Isactive']==2){echo "background: #c44848;color:black";}elseif($row_slt4['slot_name']==$_GET['slt']){echo "background: yellowgreen;color:white";}?>; margin-top: 20px">
                                      <div>
                                          <h3 style="line-height:100px;"><?php echo $row_slt4['slot_name'];?></h3>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <?php
                      }
                    }
                ?>    
              </div>
            </div>
          </center>              
                    
                    <div class="container col-xs-12">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <!-- <th class="text-center">
                            Vehicle type:
                        </th> -->
                        <th class="text-center">
                            Vehicle number: 
                        </th>
                        
                         <th class="text-center">
                            No of hours:               
                         </th>  

                    </tr>
                    

                </thead>
                <tbody>
                    <tr id='addr0'>
                        
                
                        <!-- <td>
                        <select name="vtype">
                            <option value="2">two wheeler</option>
                           <option value="4">four wheeler</option>
                        </select>
                        </td> -->
                        <td>
                        <input type="text" name='Loc0' placeholder='Vehicle no.' class="form-control"/>
                        </td>
                       
                        
                        <td>
                            <input type="text" id="hrs" name="hrs" max="4" class="form-control" required>
                        </td>
                        
                    </tr>
                    
                    <tr id='addr1'></tr>
                </tbody>
                </table>
                <?php
                if(isset($_GET['vt']))
                {
                 ?>
                    <input type="hidden" name="vt" value="<?php echo $_GET['vt'];?>">
                 <?php 
                }
                ?>
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                <input type="hidden" name="slot" value="<?php echo $_GET['slt'];?>">
                <input type="hidden" name="location" value="<?php echo $row_kaka['Location'];?>">
            </div>
        </div>
        <center><button type="submit" class="btn btn-default btn-lg" >SUBMIT</button></center>
      
  
</div>

            </div>
    </div>

    </div>
    </div>
    </form>
<!--///////////////////////////////////////////////////////////////////////-->
        

    
     
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By <a href="https://themeforest.net/user/bigpsfan">bigpsfan</a> &amp; Developed By <a href="https://jeweltheme.com/">Jewel Theme</a></span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="home.php">Home</a></li>
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
       
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
<!--         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->

      
        <script type="text/javascript">
            $(document).ready(function(){
                    $(".formdata").hide();
                    $(".step1").show();
                $("#s1").click(function(){
                    $(".formdata").hide();
                    $(".step1").show();
                })
                $("#s2").click(function(){
                    $(".formdata").hide();
                    $(".step2").show();
                })
                $("#s3").click(function(){
                    $(".formdata").hide();
                    $(".step3").show();
                })
                $("#s4").click(function(){
                    $(".formdata").hide();
                    $(".step4").show();
                })
                $(".nxt1").click(function(){
                    $(".formdata").hide();
                    $(".step2").show();
                })
                $(".nxt2").click(function(){
                    $(".formdata").hide();
                    $(".step3").show();
                })
                $(".nxt3").click(function(){
                    $(".formdata").hide();
                    $(".step4").show();
                })
                $(".myDiv").hide();
                $("#y1").click(function(){
                    $(".myDiv").slideToggle();
                })
            });
        </script>
        <!-- sixth block end -->
    </body>

<!-- Mirrored from demos.jeweltheme.com/wheel/reservation1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:13 GMT -->
