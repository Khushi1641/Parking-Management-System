<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addparking.php");
	exit();
}
//$id = $_POST['id'];
// $sid = $_POST['slot_id'];
// $vid = $_POST['vehicle_id'];
$vtype = $_POST['vehicle_type'];
$vno = $_POST['vehicle_number'];
$vn = $_POST['slot_name'];
$sername = $_POST['service_name'];
$isactive=1;
$doi  = date('d-m-y');
$dou  = date('d-m-y');
echo $vtype.$vno.$vn.$serxname.$isactive.$doi.$dou;

$qry = "INSERT into parking_tbl(vehicle_type,vehicle_number,slot_name,service_name,Isactive,Doi,Dou) VALUES ('".$vtype."',$vno,'".$vn."','".$sername."','".$isactive."','$doi','$dou')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>