<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addguard.php");
	exit();
}
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$loc = $_POST['Location'];
$email = $_POST['email'];
$mn = $_POST['mobilenum'];
$pswd = $_POST['password'];
$ut = $_POST['usertype'];
$isactive=1;
$doi  = date('d-m-y');
$dou  = date('d-m-y');
//echo $sname.$vid.$isactive.$doi.$dou;

$qry = "INSERT into guard_tbl(firstname,lastname,username,Location,email,mobilenum,password,usertype,Isactive,Doi,Dou) VALUES ('".$fname."','".$lname."','".$uname."','".$loc."','".$email."','".$mn."','".$pswd."','".$ut."','".$isactive."','$doi','$dou')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	//echo "Insert success";
	header("location:addguard.php");
}
?>