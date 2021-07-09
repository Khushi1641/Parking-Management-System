<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addslot.php");
	exit();
}
$vt = $_POST['vehicle_type'];
$sn=$_POST['slot_name'];
$loc=$_POST['Location'];
$isactive=1;
$doi = date('d-m-y');
$dou = date('d-m-y');

echo $vt.$sn.$loc.$isactive.$doi.$dou;
$qry = "INSERT into slot_tbl(vehicle_type,slot_name,Location,Isactive,Doi,Dou) VALUES('".$vt."','".$sn."','".$loc."','$isactive','$doi','$dou')";
echo $qry;
$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>