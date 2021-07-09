<?php
require 'dbconnect.php';
var_dump($_GET);
$vehicle_id = $_GET['vehicle_id'];
echo $vehicle_id;
$qry1="UPDATE vehicle_tbl SET Isactive = 2 WHERE vehicle_id='$vehicle_id'";
echo $qry1;

$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewvehicle.php");
	exit();
}
else
{
	echo "Error";
}
?>