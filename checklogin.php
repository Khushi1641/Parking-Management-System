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
	$ut=$_POST['usertype'];
	//$email=$_POST['email'];
	if($ut==1)
	{
	$qry="SELECT *FROM user_tbl WHERE username='".$un."' AND password='".$ps."'";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$rows=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$rows['id'];
		$_SESSION['n']=$rows['username'];
		//$_SESSION['email']=$rows['email'];
		if(isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400 * 30),"/");
			setcookie("pass",$ps,time()+(86400 * 30),"/");
		}
		header("location:reservation1.php");
		exit();
	}
	else
	{
		header("Location: index.php?error=Incorrect Email or Password! Try Again!");
	    exit();
	}
}
else if($ut==2)
{
	$qry="SELECT *FROM guard_tbl WHERE username='".$un."' AND password='".$ps."'";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		while($rows=mysqli_fetch_assoc($rs))
		{

			$_SESSION['id']=$rows['id'];
			$_SESSION['n']=$rows['username'];
			//$_SESSION['email']=$rows['email'];
			header("location:offlineform.php");
			exit();	
		}
	}
}
	else
	{
		// echo "invalid login";
		// header("location:index.php");
		// exit();
		header("Location: index.php?error=Incorrect Email or Password! Try Again!");
	        exit();
	}
?>