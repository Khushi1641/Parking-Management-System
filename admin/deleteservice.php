<?php
require 'dbconnect.php';
var_dump($_GET);
$service_id = $_GET['service_id'];
echo $service_id;
$qry1="UPDATE service_tbl SET Isactive=2 WHERE service_id = '$service_id'";
echo $qry1;
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewservice.php");
	exit();
}
else
{
	echo "Error";
}
?>