<?php
	require 'dbconnect.php';
	session_start();
	$user = $_SESSION['id'];
	echo $user;

  $check = "SELECT * FROM parking_tbl WHERE `u_id`='".$user."' OR `Isactive`=1";
  
  $check_rs = mysqli_query($conn,$check);
  if(mysqli_num_rows($check_rs)>0)
  {
    header("location:index.php?err=av");
  }
	var_dump($_POST);
$user = $_POST['uid'];
$ltype=$_POST['Ltype'];
$ed=$_POST['enterdate'];
$et=$_POST['entertime'];
$hrs=$_POST['hours'];
$loc=$_POST['Location'];
$vehicle_type=$_POST['vehicle_type'];
$vehicle_number=$_POST['vehicle_number'];
$isactive=1;
$doi = date('Y-m-d');
$dou = date('Y-m-d');
echo $ed. $et;
$insert_park="INSERT INTO `parking_tbl`( `u_id`, `Ltype`, `enterdate`, `entertime`, `hours`, `Location`, `vehicle_type`, `vehicle_number`,`Isactive`, `Doi`, `Dou`) VALUES('".$user."','".$ltype."','".$ed."','".$et."','".$hrs."','".$loc."','".$vehicle_type."','".$vehicle_number."','".$isactive."','".$doi."','".$dou."')";	
echo $insert_park;
$rs_park=mysqli_query($conn,$insert_park);
if($rs_park)
{
	echo "success";
	header("location:reservation1.php?set=3 & L=$loc");
}


?>
