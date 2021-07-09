<?php
require 'dbconnect.php';
var_dump($_POST);
//exit();
$vt=$_POST['vehicle_type'];
$sn = $_POST['slot_name'];
$slot_id = $_POST['slot_id'];
$loc=$_POST['Location'];
// echo $vt,$sn,$slot_id;
// exit();
$qry = "UPDATE slot_tbl SET vehicle_type='".$vt."',slot_name='".$sn."',Location='".$loc."' WHERE slot_id='".$slot_id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewslot.php");
	exit();
}
else
{
	echo "Update error";
}
?>