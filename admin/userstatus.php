<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$id=$_GET['id'];
echo $id;
$qry = "SELECT * FROM user_tbl WHERE id = '$id'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['isactive'];

if($status ==1)
{
	$qry1 = "UPDATE user_tbl SET isactive=0 WHERE id ='$id'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE user_tbl SET isactive=1 WHERE id='$id'";
	echo $qry1;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewuser.php");
	exit();
}
else
{
	echo "Error";
}
?>