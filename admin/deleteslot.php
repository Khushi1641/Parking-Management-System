<?php
require 'dbconnect.php';
var_dump($_GET);
$slot_id = $_GET['slot_id'];
echo $slot_id;
$qry1="UPDATE slot_tbl SET Isactive = 2 WHERE slot_id = '$slot_id'";
echo $qry1;

$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewslot.php");
	exit();
}
else
{
	echo "Error";
}
?>