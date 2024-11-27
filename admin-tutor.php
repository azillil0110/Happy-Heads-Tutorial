<link rel="stylesheet" href="css/admin/admin-tutor.css">
<meta http-equiv="Cache-control" content="no-cache">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Tutors!</p>
</div>
<div class="rightbot">
    <?php 
            $sql = "SELECT * FROM `moderator` WHERE acc_type != 'admin'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){ 

                    ?>
                    <div class="box">
                        <div id="tutor-pic<?php echo $i; ?>" class="stpfp" 
                             style="background-image: url('./images/team/<?php echo $row['pfp_url']; ?>');">
                        </div>
                        <p class="righttitle"><?php echo $row['mod_fname']; echo" "; echo $row['mod_lname'];?></p>
                    </div>

                    <?php
                    $i++;
                }
            }
        ?> 
</div>
<script src="javascript/admin.js"></script>