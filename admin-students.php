<link rel="stylesheet" href="css/admin/admin-students.css">
<?php include_once 'includes/dbh.inc.php'?>


<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
    <?php 
            $sql = "SELECT
                s.stud_id, 
                s.stud_fname,
                s.stud_lname,
                s.stud_nname,
                s.stud_bdate,
                s.stud_age,
                s.stud_gender,
                s.school_name,
                s.stud_address,
                s.stud_grade_level,
                s.pfp_url,
                g.grdn_name,
                g.relationship,
                g.grdn_email,
                g.grdn_phone,
                sch.sched_day,
                sch.sched_starttime,
                sch.sched_endtime
            FROM 
                students s
            LEFT JOIN 
                guardian g ON s.stud_id = g.studID
            LEFT JOIN 
                schedule sch ON s.stud_id = sch.stud_ID;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){ 
                    $studentID = $row['stud_id']; // ID DITO RAGHHHdddfdf
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
                        grade-level="<?php echo $row['stud_grade_level']; ?>"
                        grdn-name="<?php echo $row['grdn_name']; ?>"
                        relationship="<?php echo $row['relationship']; ?>"
                        grdn-email="<?php echo $row['grdn_email']; ?>"
                        grdn-phone="<?php echo $row['grdn_phone']; ?>">
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
