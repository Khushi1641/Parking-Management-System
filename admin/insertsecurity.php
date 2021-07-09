<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addsecurity.php");
	exit();
}
$sq = $_POST['security_question'];
$isactive=1;
$doi = date('d-m-y');
$dou = date('d-m-y');

echo $sq.$isactive.$doi.$dou;
$qry="INSERT into security_tbl(security_question,Isactive,Doi,Dou) VALUES('".$sq
."','$isactive','$doi','$dou')";
echo $qry;
$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}	
?>