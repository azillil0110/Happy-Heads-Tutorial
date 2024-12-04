<link rel="stylesheet" href="css/admin/--admin-tutor.css">
<meta http-equiv="Cache-control" content="no-cache">
<?php include_once 'includes/dbh.inc.php'?>

<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Tutors!</p>
</div>
<div class="rightbot">
    <?php 
        $sql = "SELECT * FROM `moderator` WHERE acc_type != 'admin'AND acc_status = 'active'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            $q = 1;
            while($row = mysqli_fetch_assoc($result)){ 
                ?>
                <div class="box " onclick="showModDetails(this)"
                    mod-id="<?php echo $row['mod_id']; ?>"
                    mod-fname="<?php echo $row['mod_fname']; ?>"
                    mod-lname="<?php echo $row['mod_lname']; ?>"
                    mod-bdate="<?php echo $row['mod_bdate']; ?>"
                    mod-gender="<?php echo $row['mod_gender']; ?>"
                    acc-type="<?php echo $row['acc_type']; ?>"
                    mod-description="<?php echo $row['mod_description']; ?>"
                    mod-email="<?php echo $row['mod_email']; ?>"
                    mod-phone="<?php echo $row['mod_phone']; ?>"
                >
                    <div id="tutor-pic<?php echo $i; ?>" class="stpfp" 
                            style="background-image: url('./images/team/<?php echo $row['pfp_url']; ?>');">
                    </div>
                    <a href="admin-tutorinfo.php?id=<?php echo $mod_id; ?>" class="righttitle">
                        <?php echo $row['mod_fname']. " ".$row['mod_lname'];?>
                    </a>
                    <div class="hover-text">View Tutor Info</div>
                </div>
                <?php
                $q++;
            }
        }
    ?> 
    <?php include_once 'tutor-div.php'?>
    <?php include_once 'admin-tutor-schedule.php'?>
</div>