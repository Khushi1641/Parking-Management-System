<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addservice.php");
	exit();
}
$sname = $_POST['service_name'];
$vid = $_POST['vehicle_id'];
$isactive=1;
$doi  = date('d-m-y');
$dou  = date('d-m-y');
echo $sname.$vid.$isactive.$doi.$dou;

$qry = "INSERT into service_tbl(service_name,vehicle_id,Isactive,Doi,Dou) VALUES ('".$sname."','".$vid."','".$isactive."','$doi','$dou')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>