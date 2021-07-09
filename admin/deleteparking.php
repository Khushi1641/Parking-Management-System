<?php
require 'dbconnect.php';
var_dump($_GET);
$parking_id = $_GET['parking_id'];
echo $parking_id;
$qry1="UPDATE parking_tbl SET Isactive = 2 WHERE parking_id = '$parking_id'";
echo $qry1;

$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewparking.php");
	exit();
}
else
{
	echo "Error";
}
?>