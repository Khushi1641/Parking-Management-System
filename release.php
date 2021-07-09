<?php
    session_start();
	require 'dbconnect.php';
	$id = $_GET['id'];
	$release_park = "UPDATE `parking_tbl` SET `Isactive` = '2' WHERE `parking_tbl`.`parking_id`  = '".$id."'";
	$rs_park = mysqli_query($conn,$release_park);
	if(!$rs_park)
	{
		echo "parking release unsuccessfully";
	}
	$slt = $_GET['slt'];
	$release_slot = "UPDATE `slot_tbl` SET `Isactive` = '1' WHERE `slot_tbl`.`slot_name` = '".$slt."'";
	$rs_slot = mysqli_query($conn,$release_slot);
	if(!$rs_slot)
	{
		echo "slot realese unsuccessfully.";
	}
?>
<!DOCTYPE html>
<php lang="en">
    
<!-- Mirrored from demos.jeweltheme.com/wheel/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:15 GMT -->
<head>
        <style type="text/css">
            .formdata
            {
                height: 500px;
                width: 100%;
/*                margin-bottom: 40px; 
*/            }

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Park on</title>
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
    <body>

            <center><a href="index.php"><div class="fa fa-close" style="margin-left: 400px;margin-top: 10px">close</div></a></center>

        <!-- /////////////////////////////////////////////////// -->
            <div class="step3 formdata" >
                <div class="container" style="height:300px; width:500px;">
                <div class="row form-group">
                <div class="col-xs-12">
<!--                 <ul class="nav nav-pills nav-justified thumbnail setup-panel">
 -->                    
                       <!--<center<h4 class="form-control">Confirmation receipt</h4></center>
                        </ul>-->
                    

    
        <div class="container col-xs-12">
            <table class="table table-striped" style="margin-top: 10px;">
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
                            $select_park = "SELECT * FROM parking_tbl WHERE `Isactive`=2 AND `u_id`='".$user."' ORDER BY `parking_tbl`.`parking_id` DESC";
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
                                        <td><?php echo $et = $row_park['entertime'];?></td>
                                    </tr>
                                    <tr>
                                        <td>hour:</td>
                                        <td><?php $hrs = $row_park['hours'];echo $hrs;?></td>
                                    </tr>
                                    <tr>
                                        <td>Selected Services:</td>
                                        <td>
                <?php 
                    $park = $row_park['parking_id'];
                    //echo $park;
                    $select_serv = "SELECT * FROM service_tbl WHERE `park_id`='".$park."'";
                    //echo $select_serv;
                    $rs_serv = mysqli_query($conn,$select_serv);
                    if(mysqli_num_rows($rs_serv)>0)
                    {
                        while($row_serv=mysqli_fetch_assoc($rs_serv))
                        {
                            if($row_serv['serv1']=="on")
                                {
                                    echo "External washing";
                                    echo "<br>";
                                }
                            if($row_serv['serv2']=="on")
                                {
                                    echo "Carpet Cleaning";
                                    echo "<br>";
                                }
                            if($row_serv['serv3']=="on")
                                {
                                    echo "Glass Cleaning";
                                    echo "<br>";
                                }
                            if($row_serv['serv4']=="on")
                                {
                                    echo "Car shinning with dry cloth";
                                    echo "<br>";
                                }    
                            if($row_serv['serv5']=="on")
                                {
                                    echo "Pressure water cleaning";
                                    echo "<br>";
                                }    
                            if($row_serv['serv6']=="on")
                                {
                                    echo "Dust Removing";
                                    echo "<br>";
                                }
                        }
                    }
                ?>
                
            </td>
            </tr>
            <tr>
            	<td>
            		Penalty:
            	</td>
            	<td>
            		<?php
            			foreach($conn->query('SELECT CURTIME()') as $row) {
							$cur_time= $row['CURTIME()'];	
						}
						$a = new DateTime($et);
						$b = new DateTime($cur_time);
						$interval = $a->diff($b);
						$difference = $interval->format("%H:%I:%S");
						$dif_h = substr($difference,0,2);
						$late = $dif_h-$hrs;
						if($late>0)
						{
							$penalty = $late * 30;
							echo "You are late. Your penalty is : ".$penalty;?> <i class="fa fa-inr"></i><?php
						}
						else
						{
							echo "grattings!!!! You are on time";
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
        
                <center style="font-family: times new roman; font-size: 18px;color:#042789; font-weight: bold;"> Thank you for parking with us!</center>
       
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
    <script type="text/javascript">
        $(document).ready(function(){
            print();
        })
    </script>
<!-- Mirrored from demos.jeweltheme.com/wheel/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 11:05:30 GMT -->
</php>