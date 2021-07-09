<?php
session_start();
    if(!isset($_SESSION['n']))
    {
        header("location:index.php");
    }
  require 'dbconnect.php';
  $user = $_SESSION['id'];
?>
<!DOCTYPE php>
<php lang="en">
    
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
                                <div class="top-menu-item" >
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
   <div class="container">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li id="s1"><a href="#stepi-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">Choose Your Space</p>
                    </a></li>
                    <li id="s2"><a href="#stepi-2">
                        <h4 class="list-group-item-heading">Step 2</h4>
                        <p class="list-group-item-text">Select your Date & time</p>
                    </a></li>
                    <li id="s3"><a href="#stepi-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">Booking</p>
                    </a></li>
                    <li id="s4"><a href="#stepi-4">
                        <h4 class="list-group-item-heading">Step 4</h4>
                        <p class="list-group-item-text">Choose your Services</p>
                    </a></li>    
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="step1 formdata">
    <center><h2>Step 1</h2></center>
    <div class="panel-body">
            <center>
            <div class="chcat">
    <ul>
        <li>
            <a href="?chcat=1">
                <span> - Shooping Mall</span>
            </a>
        </li>
        <li>
            <a href="?chcat=2">
                <span> - Theaters</span>
            </a>
        </li>
        <li>
            <a href="?chcat=3">
                <span> - Others</span>
            </a>
        </li>
        
    </ul>
            </div>
            </center>
        <center>
            <div class="nxt1 but" style="margin-top: 190px;">
                Step2 >
            </div>
        </center>

    </div>
    </div>
    <div class="step2 formdata" style="height: 450px;">
        <center><h2>Step 2</h2></center>
        
        <div class="container col-xs-12" style="margin-top:20px;">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead><th class="text-center">
                            Entry Date & Time:
                        </th> 

                        <th class="text-center">
                            No. of hours 
                         </th>                     
                        
                    
                </thead>
                <tbody>

    <form action="dataform.php" method="POST">
                    <?php
                            $chcat="not Select";
                            $chcat=$_GET['chcat'];
                            if($chcat==1)
                            {
                                ?>
                                <input type="hidden" name="Ltype" value="Shopping Mall">
                                <?php
                            }
                            if($chcat==2)
                            {
                                ?>
                                <input type="hidden" name="Ltype" value="Theaters">
                                <?php
                            }
                            if($chcat==3)
                            {
                                ?>
                                <input type="hidden" name="Ltype" value="Others">
                                <?php
                            }
                    ?>
                    <tr id='addr0'>              
                        <td>
                        <?php $dt = date('Y-m-d');?>
                        <input type="text" class="form-control" value="<?php echo $dt;?>" disabled/>
                        <input type="hidden" name="enterdate"  class="form-control" value="<?php echo $dt;?>" />
                        <input type="time" name="entertime"  class="form-control" required />
                        </td>
                                <td>
                        <input type="number" name="hours"  class="form-control" min="1" max="4" required />
                        </td>
                        
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
                </table>

        <h3 class="text-left"> Vehicle Details</h3>
                <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            Vehicle type:
                        </th>
                        <th class="text-center">
                            Vehicle number:
                        </th>
                        <th class="text-center">
                            Location 
                        </th>                   
                        
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        <!-- <td>
                            
                        <?php
                        if(isset($_GET['chcat']))
                        {

                            $ch = $_GET['chcat'];
                            if($ch==1)
                            {
                                ?>
                                    <select name="Location">
                                        <option id="ao" value="AhmedabadOne">Ahmedabad One</option>
                                        <option id="him" value="HimalayaMall">Himalaya Mall</option>
                                    </select>
                                <?php
                            }
                            if($ch==2)
                            {
                                ?>
                                    <select name="Location">
                                        <option id="pvr" value="PVR">PVR</option>
                                        <option id="cp" value="Cinepolis">Cinepolis</option>
                                    </select>
                                <?php
                            }
                            if($ch==3)
                            {
                                ?>
                                    <select name="Location">
                                        <option id="ss">Shivalik Shilp-II</option>
                                        <option id="to">Titanium One</option>
                                    </select>
                                <?php
                            }   
                        }
                        ?>
                        </td> -->
                        <td>
                        <select name="vehicle_type" class="form-control" required="required">
                            <option value="2 wheeler">two wheeler</option>
                           <option value="4 wheeler">four wheeler</option>
                        </select>
                        </td>
                        <td>
                        <input type="text" name="vehicle_number" placeholder='For Example:GJ01AB1234' min="10" class="form-control" required="required" />
                        </td>
                        <td>
                            
                        <?php
                        if(isset($_GET['chcat']))
                        {

                            $ch = $_GET['chcat'];
                            if($ch==1)
                            {
                                ?>
                                    <select name="Location" class="form-control" required="required">
                                        <option class="sub" id="ao" value="AhmedabadOne">Ahmedabad One</option>
                                        <option class="sub" id="him" value="HimalayaMall">Himalaya Mall</option>
                                    </select>
                                <?php
                            }
                            if($ch==2)
                            {
                                ?>
                                    <select name="Location" class="form-control" required="required">
                                        <option class="sub" id="pvr" value="PVR">PVR</option>
                                        <option class="sub" id="cp" value="Cinepolis">Cinepolis</option>
                                    </select>
                                <?php
                            }
                            if($ch==3)
                            {
                                ?>
                                    <select name="Location" class="form-control" required="required">
                                        <option class="sub" id="ss" value="ShivalikShilpII">Shivalik Shilp-II</option>
                                        <option class="sub" id="to" value="TitaniumOne">Titanium One</option>
                                    </select>
                                <?php
                            }   
                        }
                        ?>
                        </td>

                        
                    </tr>
                    <tr id='addr1'></tr>
                    <input type="hidden" name="uid" value="<?php echo $user; ?>">
                </tbody>

                </table>
            </div>
        </div>
            </div>
        </div>

            <center>
        <div class="nxt2">               
                     <center><input type="submit" class="button sub1" value="SUBMIT"></center>
                 </form>
        </div>
            </center>
    </div>
    </div>
    <div class="him1 step3 formdata slot_hide" style="height: 550px;">

      <center><h2>Step 3</h2></center>

      <tbody>
                    
        <div class="container col-xs-12">
          <!--         <form action="dataform.php" method="POST"> -->
          <center>
            <div class="park">
              <div class="row">
              
                <?php
                  if(isset($_GET['L'])){
                    $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='".$_GET['L']."'";
                    $rs_slt = mysqli_query($conn,$select_slt);
                    if(mysqli_num_rows($rs_slt)>0)
                    {
                      while($row_slt=mysqli_fetch_assoc($rs_slt))
                      {
                          ?>
                          <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                              <div class="col-md-1" id="pushbtn">
                                  <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                      <div>
                                          <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <?php
                      }
                    }
                  }
                ?>
                <?php

                  require 'dbconnect.php';
                  if(isset($_GET['L'])){
                    $select_slt4 = "SELECT * FROM slot_tbl WHERE `vehicle_type`='4 wheeler' AND `Location`='".$_GET['L']."'";
                    $rs_slt4 = mysqli_query($conn,$select_slt4);
                    if(mysqli_num_rows($rs_slt4)>0)
                    {
                      while($row_slt4=mysqli_fetch_assoc($rs_slt4))
                      {
                          ?>
                          <a href="?slt=<?php echo $row_slt4['slot_name'];?>">
                              <div class="col-md-2" id="pushbtn">
                                  <div class="fw slot" style="<?php if($row_slt4['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                      <div>
                                          <h3 style="line-height:100px;"><?php echo $row_slt4['slot_name'];?></h3>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <?php
                      }
                    }
                  }
                ?>    
              </div>

             
            </div>
          </center>

          <center>
            <div class="nxt3 but">
                    Step4 >>
            </div>
          </center>
        </div>

      </div>
    </div>
    </form>
  </div>

    </div>

        
    <div class="step4 formdata" style="height: 550px;">
        
            <div class="container col-xs-12">
        <div class="row clearfix final">
               <center><h2>Step 4</h2>    
               <form action="dataform2.php" method="POST">
               <table style="margin-top: 30px;">

                    <?php
                        if (isset($_GET['slt'])) {
                            $slotin4 = $_GET['slt'];
                        $select_sltin4 = "SELECT * FROM slot_tbl WHERE `slot_name`='".$slotin4."'";
                        $rs_sltin4 = mysqli_query($conn,$select_sltin4);
                        if(mysqli_num_rows($rs_sltin4)>0)
                        {
                            while($row_sltin4=mysqli_fetch_assoc($rs_sltin4))
                            {
                                if($row_sltin4['Isactive']==2)
                                {
                                    echo "slot already allocate";
                                    
                                }
                                elseif ($row_sltin4['Isactive']==1) {
                                    echo "slot Available";
                                    ?><input type="text" name="slot" value="<?php echo $row_sltin4['slot_name'];?>"><?php
                                }
                            }
                        }
                        }
                    ?>
                    <input type="submit" name="sub_slot" id="sub_slot" value="sub_slot">
                    </form>
                    <div class="serv">
                      <form action="dataform3.php" method="POST">
                   <tr>
                        <td class="col-md-5">
                           Service 1
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="1">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                          <label class="rs">
                            5 Rs
                          </label>
                        </td>
                        </div>
                        
                   </tr>
                   <tr>
                        <td class="col-md-5">
                           Service 2
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="2">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                          <label class="rs">
                            5 Rs
                          </label>
                        </td>
                   </tr>
                   <tr>
                        <td class="col-md-5">
                           Service 3
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="3">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                          <label class="rs">
                            5 Rs
                          </label>
                        </td>
                   </tr>
                   <tr>
                        
                        <td class="col-md-5">
                           Service 4
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="4">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                          <label class="rs">
                            5 Rs
                          </label>
                        </td>
                   </tr>
                   <tr>
                        
                        <td class="col-md-5">
                           Service 5
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="5">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                          <label class="rs">
                            10 Rs
                          </label>
                        </td>
                   </tr>
                   <tr>
                        
                        <td class="col-md-5">
                            Service 6
                        </td>
                        <td>
                        <div class="fff">
                            <label class="switch">
                                <input type="checkbox" name="6">
                                <span class="slider round"></span>
                            </label>
                        </td> 
                        <td>
                          <label class="rs">
                            5 Rs
                          </label>
                        </td>                 
                     </tr>
                     </div>
                     <tr>
                       <td colspan="3">
                   <!--  <input type="submit" value="submit" name="submit" class="btn btn-success" style="width:100%;"> -->
                   <center><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">SUBMIT</button><div class="modal fade" id="myModal" role="dialog">
    
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #202ba0;color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms & Conditions</h4>
        </div>
        <div class="modal-body">
            <div>
            <p>When you enter into, and choose to park in one of our facilities, you are agreeing to the following contractual terms and conditions which are clearly displayed on signs that are posted at the entrance to, and throughout our car parks.</p>
<b>Parking Contraventions</b><br>
•   In case of advance booking if the user doesn’t arrive to the location within 15 min of time your booking will be cancelled n the allocated slot is deselected.<br>
•   You acknowledge that if the you’re late than the time limit given during booking, you are fined with certain minimum amount.<br>
•   We have a limit of minn 4 hrs. Of parking time.<br>
•   If the user tends to park more than 4 hrs. One needs to manually renew their booking after 4 hrs.to extend their time.<br>
    
    <b>Services Contraventions</b><br>
•   You acknowledge that Service payment is non-refundable.<br>

<b>Security of your vehicle</b><br>
•     Unless asked by a member of our staff not to do so in the case of emergency, please ensure that your vehicle is left securely locked with all windows securely closed and any vehicle alarm, steering lock or similar device fitted is engaged. We are not responsible for any consequence or loss arising from a failure by you to properly secure your vehicle.<br>
•    We may install CCTV cameras in the Car Park at our discretion to assist in its proper running. We acknowledge that the cameras may act as a deterrent to criminal activity, but do not make any representation as to the coverage provided or guarantee of the security of your vehicle if CCTV is installed in the Car Park.<br>
<b>Possessions</b><br>
•   Any possessions left in a vehicle are left entirely at the owner’s risk. We suggest that no items are left so that they are visible from the outside of the vehicle. We are not liable for any theft by third parties from your vehicle<br>

 <b>Safety in the Car Park</b><br>
•   For safety reasons you are not entitled to remain in your vehicle in the Car Park or elsewhere in the Car Park except for the purposes of parking or removing your vehicle. After you have parked your vehicle, you must proceed immediately to the nearest passenger lift, staircase or exit, following the recommended route (if any). You must not, in any circumstances, exit the Car Park by walking under a vehicle exit barrier.
You acknowledge and agree that this Agreement represents the entire Agreement between you and PARKON and that there have been no promises, representations, conditions, or understandings, written or verbal, express or implicit of any nature whatsoever, other than what is stipulated herein.<br>

<p><b>If you have any queries relating to these Terms, please contact our Customer Services Department on 0345 050 7080.</b></p>


        </div>
      
        </div>
        <div class="modal-footer"  style="background: #202ba0;color: white;">
        <div  > </div>
        <input type="submit" name="submit" style="height: 40px;width: 130px;background: #2eb242;border-radius: 10px;line-height: 40px;text-align: center;" value="Get Receipt">
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->

  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>

      <h2>Terms & Conditions</h2>
    </div>
    <div class="modal-body">
        
        </div>
    <div class="modal-footer">
      <h3>*T&C*</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</center></center>
      
                       </td>
                     </tr>
                      </form>
               </table>
               </center>
            </div>
    </div>

    </div>
    </div>
<!--///////////////////////////////////////////////////////////////////////-->
        

    
     
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                   <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; ParkOn 2021 | Designed & Developed By Khushi </span></div>
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
                    $("#sub_slot").hide();
                    $(".formdata").hide();
                    $(".step1").show();
                    // $("#al").click(function(){
                    //     alert("fghj");
                    //     $(".step3").hide();
                    // });
                $("#him").click(function(){
                    $(".formdata").hide();
                    $(".him1").show();
                });
    

                $("#ao").click(function(){
                    $(".formdata").hide();
                    $(".ao1").show();
                });

                $("#pvr").click(function(){
                    $(".formdata").hide();
                    $(".pvr1").show();
                });
                
                $("#cp").click(function(){
                    $(".formdata").hide();
                    $(".cp1").show();
                });

                $("#ss").click(function(){
                    $(".formdata").hide();
                    $(".ss1").show();
                });

                $("#to").click(function(){
                    $(".formdata").hide();
                    $(".to1").show();
                });

                 
                   
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
                $("#pushbtn").click(function(){
                    $("#sub_slot").click();
                })
                $(".sub").click(function(){
                    $(".sub1").click();
                })
            });
        </script>
        <?php

            if(isset($_GET['slt']))
            {
                ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(".nxt3").click();
                            $("#sub_slot").click();
                        })
                    </script>
                <?php
            }
            if(isset($_GET['chcat']))
            {
                ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(".nxt1").click();
                        })
                    </script>
                <?php
            }

            if(isset($_GET['set']))
            { 
                ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(".nxt2").click();
                        })
                    </script>
                <?php
                if($_GET['set']==4)
                {
                  ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(".nxt3").click();
                        })
                    </script>
                  <?php
                }
            }
        ?>
        <!-- sixth block end -->
    </body>

<!-- Mirrored from demos.jeweltheme.com/wheel/reservation1.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:13 GMT -->