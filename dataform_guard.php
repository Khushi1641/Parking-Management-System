<?php
	require 'dbconnect.php';
	var_dump($_POST);
	$kaka = $_POST['id'];
	$ed = date('Y-m-d');
	foreach($conn->query('SELECT CURTIME()') as $row) {
	$cur_time= $row['CURTIME()'];	
	}
	$hrs = $_POST['hrs'];
	$location = $_POST['location'];
	$vnum = $_POST['Loc0'];
	$slot = $_POST['slot'];
	$vt = $_POST['vt'];
	$isactive =1;
	$utype = 2;
	$update_slot = "UPDATE `slot_tbl` SET `Isactive` = '2' WHERE `slot_tbl`.`slot_name` = '".$slot."'";
	$rs_slot = mysqli_query($conn,$update_slot);
	if($rs_slot)
	{
		echo "success";
	}

	$insert_park = "INSERT INTO `parking_tbl`(`u_id`, `enterdate`, `entertime`, `hours`, `Location`, `vehicle_type`, `vehicle_number`, `slot_name`, `usertype`, `Isactive`, `Doi`, `Dou`) VALUES ('".$kaka."','".$ed."','".$cur_time."','".$hrs."','".$location."','".$vt."','".$vnum."','".$slot."','".$utype."','".$isactive."','".$ed."','".$ed."')";
	echo $insert_park;
	$rs_park= mysqli_query($conn,$insert_park);
	if($rs_park)
	{
		echo "insert success";
		header("location:offlineform.php");
	}
?>