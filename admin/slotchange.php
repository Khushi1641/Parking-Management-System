<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$slot_id=$_GET['slot_id'];
echo $slot_id;
$qry = "SELECT * FROM slot_tbl WHERE slot_id = '$slot_id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];

if($status ==1)
{
	$qry1 = "UPDATE slot_tbl SET Isactive=0 WHERE slot_id ='$slot_id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE slot__tbl SET Isactive=1 WHERE slot_id ='$slot_id'";
	echo $qry;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewslot.php");
	exit();
}
else
{
	echo "Error";
}
?>