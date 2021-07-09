<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$id=$_GET['id'];
echo $id;
$qry = "SELECT * FROM guard_tbl WHERE id = '$id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];

if($status ==1)
{
	$qry1 = "UPDATE guard_tbl SET Isactive=0 WHERE id ='$id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE guard_tbl SET Isactive=1 WHERE id='$id'";
	echo $qry1;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewguard.php");
	exit();
}
else
{
	echo "Error";
}
?>