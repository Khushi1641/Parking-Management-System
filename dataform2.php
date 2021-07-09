<?php
	require 'dbconnect.php';
	var_dump($_POST);

	$slot=$_POST['slot'];
	$select_park = "SELECT * FROM parking_tbl";
	$rs_park = mysqli_query($conn,$select_park);
	if(mysqli_num_rows($rs_park)>0)
	{
		$row_park = mysqli_num_rows($rs_park); 
	}
	$update_slot = "UPDATE `slot_tbl` SET `Isactive` = '2' WHERE `slot_tbl`.`slot_name` = '".$slot."'";
	$rs_slot = mysqli_query($conn,$update_slot);
	if($rs_slot)
	{
		echo "success";
	}
	$qry="UPDATE `parking_tbl` SET `slot_name` = '".$slot."' WHERE `parking_tbl`.`parking_id` = '".$row_park."';";
	echo $qry;
	$rs= mysqli_query($conn,$qry);
	if($rs)
	{
		echo "Insert success";
		header("location:reservation1.php?set=4");

	}

?>