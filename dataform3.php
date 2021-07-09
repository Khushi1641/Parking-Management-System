<?php
    require 'dbconnect.php';
    var_dump($_POST);
    $total = 0;
    if(isset($_POST['1']))
    {
        $serv1 = "on";
        $total = $total+5;
    }
    else
    {
        $serv1 = "off";
    }
    if(isset($_POST['2']))
    {
        $serv2 = "on";
        $total = $total+5;
    }
    else
    {
        $serv2 = "off";
    }
    if(isset($_POST['3']))
    {
        $serv3 = "on";
        $total = $total+5;
    }
    else
    {
        $serv3 = "off";
    }
    if(isset($_POST['4']))
    {
        $serv4 = "on";
        $total = $total+5;
    }
    else
    {
        $serv4 = "off";
    }
    if(isset($_POST['5']))
    {
        $serv5 = "on";
        $total = $total+10;
    }
    else
    {
        $serv5 = "off";
    }
    if(isset($_POST['6']))
    {
        $serv6 = "on";
        $total = $total+5;
    }
    else
    {
        $serv6 = "off";
    }
    $select_park = "SELECT * FROM parking_tbl";
    $rs_park = mysqli_query($conn,$select_park);
    if(mysqli_num_rows($rs_park)>0)
    {
        $row_park = mysqli_num_rows($rs_park); 
    }
    $is_active = 0;
    $usertype=0;
    $dt = date('Y-m-d');
    $insert_serv = "INSERT INTO `service_tbl`(`park_id`,`usertype`, `serv1`, `serv2`, `serv3`, `serv4`, `serv5`, `serv6`,`total`, `is_active`, `doi`, `dou`) VALUES('".$row_park."','".$usertype."','".$serv1."','".$serv2."','".$serv3."','".$serv4."','".$serv5."','".$serv6."','".$total."','".$is_active."','".$dt."','".$dt."')";
    $rs= mysqli_query($conn,$insert_serv);
    if($rs)
    {
        echo "Insert success";
        //header("location:reservation1.php?set=4");
    }
    $qry1="UPDATE `parking_tbl` SET `service_amount` = '".$total."' WHERE `parking_tbl`.`parking_id` = '".$row_park."';";
    echo $qry1;
    $rs1= mysqli_query($conn,$qry1);
    if($rs1)
    {
        echo "Insert success";
        header("location:receipt1.php");
}

?>