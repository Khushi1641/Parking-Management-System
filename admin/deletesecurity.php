<?php
require 'dbconnect.php';
var_dump($_GET);
$security_id = $_GET['security_id'];
echo $security_id;
$qry1="UPDATE security_tbl SET Isactive=2 WHERE security_id = '$security_id'";
echo $qry1;

$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewsecurity.php");
	exit();
}
else
{
	echo "Error";
}
?>