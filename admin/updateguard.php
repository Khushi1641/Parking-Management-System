<?php
require 'dbconnect.php';
//var_dump($_POST);
//exit();
$id=$_POST['id'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$un=$_POST['username'];
$loc=$_POST['Location'];
$email=$_POST['email'];
$mn=$_POST['mobilenum'];
$pwd=$_POST['password'];
$ut=$_POST['usertype'];

// echo $vt,$sn,$slot_id;
// exit();
$qry = "UPDATE guard_tbl SET firstname='".$fn."',lastname='".$ln."',username='".$un."',Location='".$loc."',email='".$email."',mobilenum='".$mn"',password='".$pwd."',usertype='".$ut."' WHERE id='".$id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewguard.php");
	exit();
}
else
{
	echo "Update error";
}
?>