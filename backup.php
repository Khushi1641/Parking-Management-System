<div class="ao1 step3 formdata slot_hide" style="height: 550px;">
        <center><h2>Step 3</h2></center>

                <!-- <tbody> -->
                    
        <div class="container col-xs-12">
        

            <center>
                <div class="park">
                    <div class="row">
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='AhmedabadOne'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='AhmedabadOne'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    </div>

                    <div class="row">
                        <a href="?slt=HIC1"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C1</h3></div></div></a>
                        <a href="?slt=HIC2"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C2</h3></div></div></a>
                        <a href="?slt=HIC3"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C3</h3></div></div></a>
                        <a href="?slt=HIC4"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C4</h3></div></div></a>
                        <a href="?slt=HIC5"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C5</h3></div></div></a>
                        <a href="?slt=HIC6"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">AO&nbsp;&nbsp;&nbsp;C6</h3></div></div></a>
                    </div>
                </div>
            </center>

            <center>
        <div class="nxt3 but">
                Step4 >>
        </div>
            </center>
    </div>

            </div>
        </div>
    </div>

    </div>

        <div class="pvr1 step3 formdata slot_hide" style="height: 550px;">
        <center><h2>Step 3</h2></center>

                <!-- <tbody> -->
                    
        <div class="container col-xs-12">
        

            <center>
                <div class="park">
                    <div class="row">
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='PVR'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    </div>

                    <div class="row">
                        <a href="?slt=PVRC1"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C1</h3></div></div></a>
                        <a href="?slt=PVRC2"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C2</h3></div></div></a>
                        <a href="?slt=PVRC3"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C3</h3></div></div></a>
                        <a href="?slt=PVRC4"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C4</h3></div></div></a>
                        <a href="?slt=PVRC5"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C5</h3></div></div></a>
                        <a href="?slt=PVRC6"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">PVR&nbsp;C6</h3></div></div></a>
                    </div>
                </div>
            </center>

            <center>
        <div class="nxt3 but">
                Step4 >>
        </div>
            </center>
    </div>

            </div>
        </div>
    </div>

    </div>
        <div class="cp1 step3 formdata slot_hide" style="height: 550px;">
        <center><h2>Step 3</h2></center>

                <!-- <tbody> -->
                    
        <div class="container col-xs-12">
        

            <center>
                <div class="park">
                    <div class="row">
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='Cinepolis'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    </div>

                    <div class="row">
                        <a href="?slt=CPC1"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C1</h3></div></div></a>
                        <a href="?slt=CPC2"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C2</h3></div></div></a>
                        <a href="?slt=CPC3"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C3</h3></div></div></a>
                        <a href="?slt=CPC4"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C4</h3></div></div></a>
                        <a href="?slt=CPC5"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C5</h3></div></div></a>
                        <a href="?slt=CPC6"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">CP&nbsp;&nbsp;C6</h3></div></div></a>
                    </div>
                </div>
            </center>

            <center>
        <div class="nxt3 but">
                Step4 >>
        </div>
            </center>
    </div>

            </div>
        </div>
    </div>

    </div>
    <div class="ss1 step3 formdata slot_hide" style="height: 550px;">

        <center><h2>Step 3</h2></center>

                <tbody>
                    
        <div class="container col-xs-12">
        

            <center>
                <div class="park">
                    <div class="row">
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='ShivalikShilpII'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    </div>

                    <div class="row">
                        <a href="?slt=SSC1"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C1</h3></div></div></a>
                        <a href="?slt=SSC2"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C2</h3></div></div></a>
                        <a href="?slt=SSC3"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C3</h3></div></div></a>
                        <a href="?slt=SSC4"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C4</h3></div></div></a>
                        <a href="?slt=SSC5"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C5</h3></div></div></a>
                        <a href="?slt=SSC6"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">SS&nbsp;&nbsp;C6</h3></div></div></a>
                    </div>
                </div>
            </center>

            <center>
        <div class="nxt3 but">
                Step4 >>
        </div>
            </center>
    </div>

            </div>
        </div>
    </div>

    </div>
    <div class="to1 step3 formdata slot_hide" style="height: 550px;">

        <center><h2>Step 3</h2></center>

                <tbody>
                    
        <div class="container col-xs-12">
        

            <center>
                <div class="park">
                    <div class="row">
                    <?php
                        require 'dbconnect.php';
                        $select_slt = "SELECT * FROM slot_tbl WHERE `vehicle_type`='2 wheeler' AND `Location`='TitaniumOne'";
                        $rs_slt = mysqli_query($conn,$select_slt);
                        if(mysqli_num_rows($rs_slt)>0)
                        {
                            while($row_slt=mysqli_fetch_assoc($rs_slt))
                            {
                                ?>
                                <a href="?slt=<?php echo $row_slt['slot_name'];?>">
                                    <div class="col-md-1">
                                        <div class="tw slot" style="<?php if($row_slt['Isactive']==2){echo "background: #c44848;color:black";}?>">
                                            <div>
                                                <h3 style="line-height:130px;transform: rotate(270deg);"><?php echo $row_slt['slot_name'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                    ?>    
                    </div>

                    <div class="row">
                        <a href="?slt=TOC1"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C1</h3></div></div></a>
                        <a href="?slt=TOC2"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C2</h3></div></div></a>
                        <a href="?slt=TOC3"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C3</h3></div></div></a>
                        <a href="?slt=TOC4"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C4</h3></div></div></a>
                        <a href="?slt=TOC5"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C5</h3></div></div></a>
                        <a href="?slt=TOC6"><div class="col-md-2"><div class="fw slot"><h3 style="line-height:100px;">TO&nbsp;&nbsp;C6</h3></div></div></a>
                    </div>
                </div>
            </center>

            <center>
        <div class="nxt3 but">
                Step4 >>
        </div>
            </center>
    </div>

            </div>
        </div>
    </div>

    </div>
