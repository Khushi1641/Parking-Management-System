<?php
	session_start();
	if(isset($_SESSION['n']))
	{
		header("location:dashboard.php");
	}
	if(isset($_COOKIE['username']))
	{
		$un=$_COOKIE['username'];
		$ps=$_COOKIE['password'];
	}
	else
	{
		$un="";
		$ps="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="checklogin.php" method="POST">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $un; ?>"><br>
		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $ps; ?>"><br>
		<input type="checkbox" name="remember" value="1">Remember Me<br>
		<input type="submit" name="submit" value="submit">
	</form>	
</body>
</html>	