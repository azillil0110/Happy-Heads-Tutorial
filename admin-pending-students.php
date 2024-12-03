<?php
include_once 'includes/dbh.inc.php';
?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
    <?php 
        $sql = "SELECT 
            students.stud_id,
            students.stud_fname,
            students.stud_lname,
            students.stud_nname,
            students.stud_bdate,
            students.stud_age,
            students.stud_gender,
            students.stud_grade_level,
            students.school_name,
            students.stud_address,
            students.pic_perm,
            students.on_meds,
            students.stud_comment,
            students.pfp_url,
            GROUP_CONCAT(DISTINCT guardian.grdn_name) AS guardian_names,
            GROUP_CONCAT(DISTINCT guardian.relationship) AS guardian_relationships,
            GROUP_CONCAT(DISTINCT guardian.grdn_email) AS guardian_emails,
            GROUP_CONCAT(DISTINCT guardian.grdn_phone) AS guardian_phones,
            GROUP_CONCAT(DISTINCT authorized_fetcher.fetcher_name) AS fetcher_names,
            GROUP_CONCAT(DISTINCT authorized_fetcher.relationship) AS fetcher_relationships,
            GROUP_CONCAT(DISTINCT authorized_fetcher.fetcher_phone) AS fetcher_phones,
            GROUP_CONCAT(DISTINCT schedule.sched_day) AS sched_days,
            GROUP_CONCAT(DISTINCT schedule.sched_starttime) AS sched_starttimes,
            GROUP_CONCAT(DISTINCT schedule.sched_endtime) AS sched_endtimes
        FROM 
            students
        LEFT JOIN 
            guardian ON students.stud_id = guardian.studID
        LEFT JOIN 
            authorized_fetcher ON students.stud_id = authorized_fetcher.studID
        LEFT JOIN 
            schedule ON students.stud_id = schedule.stud_ID
        WHERE 
            students.modID = 1
        GROUP BY 
            students.stud_id";

        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){ 
                ?>
                <div class="box" onclick="showStudentDetails(this)"
                    stud-id="<?php echo $row['stud_id']; ?>"
                    stud-fname="<?php echo $row['stud_fname']; ?>"
                    stud-lname="<?php echo $row['stud_lname']; ?>"
                    stud-nname="<?php echo $row['stud_nname']; ?>"
                    stud-bdate="<?php echo $row['stud_bdate']; ?>"
                    stud-age="<?php echo $row['stud_age']; ?>"
                    stud-gender="<?php echo $row['stud_gender']; ?>"
                    stud-school="<?php echo $row['school_name']; ?>"
                    stud-grade-level="<?php echo $row['stud_grade_level']; ?>"
                    stud-address="<?php echo $row['stud_address']; ?>"
                    full-name="<?php echo $row['guardian_names']; ?>"
                    relationship="<?php echo $row['guardian_relationships']; ?>"
                    email="<?php echo $row['guardian_emails']; ?>"
                    phone="<?php echo $row['guardian_phones']; ?>"
                    fetcher-name="<?php echo $row['fetcher_names']; ?>"
                    fetcher-relationship="<?php echo $row['fetcher_relationships']; ?>"
                    fetcher-phone="<?php echo $row['fetcher_phones']; ?>"
                    pic-perm="<?php echo $row['pic_perm']; ?>"
                    on-meds="<?php echo $row['on_meds']; ?> "
                    stud-comment="<?php echo $row['stud_comment']; ?>"
                    day="<?php echo $row['sched_days']; ?>"
                    starttime="<?php echo $row['sched_starttimes']; ?>"
                    endtime="<?php echo $row['sched_endtimes']; ?>">
                    <div id="stud-pic<?php echo $i; ?>" class="stpfp" 
                         style="background-image: url('./images/students/<?php echo $row['pfp_url']; ?>');">
                    </div>
                    <p class="righttitle"><?php echo $row['stud_fname'] . " " . $row['stud_lname'];?></p>
                    <div class="hover-text">More Info</div>
                </div>
                <?php
                $i++;
            }
        }
    ?> 
    </div>
</div>
<?php include_once 'overlay-pending-student.php'; ?>
<script src="javascript/admin.js"></script>
