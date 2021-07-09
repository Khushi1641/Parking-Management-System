<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:contact.php");
	exit();
}
$name = $_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$isactive=1;
$doi = date('y-m-d');
//$dou = date('d-m-y');

echo $name.$email.$subject.$message.$isactive.$doi;
$qry="INSERT into contact_tbl(name,email,subject,message,isactivve,doi) VALUES('".$name
."','".$email."','".$subject."','".$message."','$isactive','$doi')";
echo $qry;
$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}	
?>