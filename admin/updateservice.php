<?php
require 'dbconnect.php';
var_dump($_POST);
//exit();
$sn = $_POST['service_name'];
$vi = $_POST['vehicle_id'];
$service_id = $_POST['service_id'];
echo $sn,$vi,$service_id;
//exit();

$qry = "UPDATE service_tbl SET service_name='".$sn."',vehicle_id='".$vi."' WHERE service_id='".$service_id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewservice.php");
	exit();
}
else
{
	echo "Update error";
}
?>