<?php
require 'dbconnect.php';
var_dump($_POST);
$id = $_POST['id'];
// $vid = $_POST['vehicle_id'];
// $vtype = $_POST['vehicle_type'];
$vno = $_POST['vehicle_number'];
$vn = $_POST['slot_name'];
$sername = $_POST['service_name'];
$isactive=1;
$doi  = date('Y-m-d');
$dou  = date('Y-m-d');


$qry = "UPDATE parking_tbl SET vehicle_type='".$vtype."', vehicle_number ='".$vno."', slot_name='".$vn."', service_name='".$sername."' WHERE parking_id = '".$id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewparking.php");
	exit();
}
else
{
	echo "Update error";
}
?>