<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$vehicle_id = $_GET['vehicle_id'];
echo $vehicle_id;
$qry = "SELECT * FROM vehicle_tbl WHERE vehicle_id = '$vehicle_id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];

if($status ==1)
{
	$qry1 = "UPDATE vehicle_tbl SET Isactive=0 WHERE vehicle_id ='$vehicle_id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE vehicle_tbl SET Isactive=1 WHERE vehicle_id ='$vehicle_id'";
	echo $qry;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewvehicle.php");
	exit();
}
else
{
	echo "Error";
}
?>