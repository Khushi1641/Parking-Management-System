<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:adduser.php");
	exit();
}
//$id = $_POST['id'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$un = $_POST['username'];
$email = $_POST['email'];
$mno = $_POST['mobilenum'];
$gen = $_POST['gender'];
$isactive=1;
$paswd = $_POST['password'];

echo $fn.$ln.$un.$email.$mno.$gen.$paswd;

$qry="INSERT into user_tbl(firstname,lastname,username,email,mobilenum,gender,password,isactive) VALUES ('".$fn."','".$ln."','".$un."','".$email."',$mno,'".$gen."','".$paswd."','".$isactive."')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>