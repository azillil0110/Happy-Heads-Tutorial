<link rel="stylesheet" href="css/admin/admin-students.css">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
    <?php 
            $sql = "SELECT * FROM `students`";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){ 
                    $studentID = $row['stud_id']; // ID DITO RAGHHH
                    ?>
                    <div class="box" onclick="showStudentDetails(this)" 
                        stud-fname="<?php echo $row['stud_fname']; ?>"
                        stud-lname="<?php echo $row['stud_lname']; ?>"
                        stud-nname="<?php echo $row['stud_nname']; ?>"
                        stud-bdate="<?php echo $row['stud_bdate']; ?>"
                        stud-age="<?php echo $row['stud_age']; ?>"
                        stud-gender="<?php echo $row['stud_gender']; ?>"
                        school-name="<?php echo $row['school_name']; ?>"
                        stud-address="<?php echo $row['stud_address']; ?>"
                        grade-level="<?php echo $row['stud_grade_level']; ?>">
                        <div id="stud-pic<?php echo $i; ?>" class="stpfp" 
                             style="background-image: url('./images/students/<?php echo $row['pfp_url']; ?>');">
                        </div>
                        <a href="admin-studentinfo.php?id=<?php echo $studentID; ?>" class="righttitle">
                            <?php echo $row['stud_fname'] . " " . $row['stud_lname']; ?>
                        </a>
                        <div class="hover-text">More Info</div>
                </div>
                    <?php
                    $i++;
                }
            }
        ?>
    </div>
    <?php include_once 'trylang.php'?>
</div>