<?php
require 'dbconnect.php';
var_dump($_POST);
//exit();
$sq = $_POST['security_question'];
$security_id = $_POST['security_id'];
echo $sq,$security_id;
//exit();

$qry="UPDATE security_tbl SET security_question='".$sq."' WHERE security_id='".$security_id."'";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Updated";
	header("location:viewsecurity.php");
	exit();
}
else
{
	echo "Update error";
}
?>