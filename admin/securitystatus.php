<?php
require 'dbconnect.php';
var_dump($_GET);
//exit();
$pid = $_GET['security_id'];
echo $pid;
$qry = "SELECT * FROM security_tbl WHERE security_id = '$pid'";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$status = $row['Isactive'];
if($status ==1)
{
	$qry1 = "UPDATE security_tbl SET Isactive=0 WHERE security_id ='$pid'";
	echo $qry;
}
else
{
	$qry1 = "UPDATE security_tbl SET Isactive=1 WHERE security_id ='$pid'";
	echo $qry;
}
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewsecurity.php");
	exit();
}
else
{
	echo "Error";
}
?>