<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$parking_id = $_GET['parking_id'];
echo $parking_id;
$qry = "SELECT * FROM parking_tbl WHERE parking_id = '$parking_id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];

if($status ==1)
{
	$qry1 = "UPDATE parking_tbl SET Isactive=0 WHERE parking_id ='$parking_id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE parking_tbl SET Isactive=1 WHERE parking_id ='$parking_id'";
	echo $qry;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewparking.php");
	exit();
}
else
{
	echo "Error";
}
?>