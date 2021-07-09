<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$service_id = $_GET['service_id'];
echo $service_id;
$qry = "SELECT * FROM service_tbl WHERE service_id = '$service_id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];

if($status ==1)
{
	$qry1 = "UPDATE service_tbl SET Isactive=0 WHERE service_id ='$service_id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE service_tbl SET Isactive=1 WHERE service_id ='$service_id'";
	echo $qry;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewservice.php");
	exit();
}
else
{
	echo "Error";
}
?>