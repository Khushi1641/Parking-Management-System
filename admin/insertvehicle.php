<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:vehicleform.php");
	exit();
}
//$id = $_POST['id'];

$vtype = $_POST['vehicle_type'];
$vno = $_POST['vehicle_number'];
$isactive=1;
$doi  = date('d-m-y');
$dou  = date('d-m-y');
echo $vtype.$vno.$isactive.$doi.$dou;

$qry = "INSERT into vehicle_tbl(vehicle_type,vehicle_number,Isactive,Doi,Dou) VALUES ('".$vtype."',$vno,'".$isactive."','$doi','$dou')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>