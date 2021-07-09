<?php
require 'dbconnect.php';
session_start();
var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:index.php");
		exit();
	}
		$un=$_POST['username'];
		$ps=$_POST['password'];
	$qry="SELECT *FROM user_tbl WHERE username='".$un."' AND password='".$ps."'";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$rows=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$rows['id'];
		$_SESSION['n']=$rows['username'];
		if(isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400 * 30),"/");
			setcookie("pass",$ps,time()+(86400 * 30),"/");

		}
		header("location:dashboard.php");
		exit();
	}
	else
	{
		echo "invalid login";
		header("location:index.php");
		exit();
	}
?>