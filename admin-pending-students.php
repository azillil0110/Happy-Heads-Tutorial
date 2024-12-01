<link rel="stylesheet" href="css/admin/admin-students.css">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
    <?php 
            $sql = "SELECT * FROM `students` WHERE modID = 1";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){ 

                    ?>
                    <div class="box" onclick="toggleOverlay()">
                        <div id="stud-pic<?php echo $i; ?>" class="stpfp" 
                             style="background-image: url('./images/students/<?php echo $row['pfp_url']; ?>');">
                        </div>
                        <p class="righttitle"><?php echo $row['stud_fname']; echo" "; echo $row['stud_lname'];?></p>
                        <div class="hover-text">More Info</div>
                    </div>

                    <?php
                    $i++;
                }
            }
        ?> 
        
    </div>
</div>
<div class="overlay" id="scheduleOverlay">
    <div class="overlay-content">
    <h2>Student Information</h2>
    <p>Monday: 9:00 AM - 5:00 PM</p>
    <p>Wednesday: 1:00 PM - 6:00 PM</p>
    <p>Friday: 10:00 AM - 3:00 PM</p>
    <button class="close-btn" onclick="toggleOverlay()">Close</button>
    </div>
</div>
<script src="javascript/admin.js"></script>