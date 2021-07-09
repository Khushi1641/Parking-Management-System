<?php
require 'dbconnect.php';
var_dump($_POST);
//exit();
$vt=$_POST['vehicle_type'];
$vn=$_POST['vehicle_number'];
$vehicle_id=$_POST['id'];
//$Cityid = $_POST['Cityid'];
echo $vt,$vn;
$qry="UPDATE vehicle_tbl SET vehicle_type='".$vt."',vehicle_number='".$vn."' WHERE vehicle_id='".$vehicle_id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewvehicle.php");
	exit();
}
else
{
	echo "Update error";
}
?>