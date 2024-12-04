<link rel="stylesheet" href="css/tutor/student.css">
<?php include_once '../includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['mod_id'])) {
    echo "Unauthorized access!";
    exit;
}
$modid = $_SESSION["mod_id"];
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
            guardian.grdn_name AS guardian_name,
            guardian.relationship AS guardian_relationship,
            guardian.grdn_email AS guardian_email,
            guardian.grdn_phone AS guardian_phone,
            authorized_fetcher.fetcher_name AS fetcher_name,
            authorized_fetcher.relationship AS fetcher_relationship,
            authorized_fetcher.fetcher_phone AS fetcher_phone,
            schedule.sched_day,
            schedule.sched_starttime,
            schedule.sched_endtime
        FROM 
            students
        LEFT JOIN 
            guardian ON students.stud_id = guardian.studID
        LEFT JOIN 
            authorized_fetcher ON students.stud_id = authorized_fetcher.studID
        LEFT JOIN 
            schedule ON students.stud_id = schedule.stud_ID
        WHERE
            students.modID != 1
        GROUP BY 
            students.stud_id";
            
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){ 
                    $studentID = $row['stud_id']; // ID DITO RAGHHH
                    ?>
                    <div  class="box" onclick="tutor(this)"
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
                        full-name="<?php echo $row['guardian_name']; ?>"
                        relationship="<?php echo $row['guardian_relationship']; ?>"
                        email="<?php echo $row['guardian_email']; ?>"
                        phone="<?php echo $row['guardian_phone']; ?>"
                        fetcher-name="<?php echo $row['fetcher_name']; ?>"
                        fetcher-relationship="<?php echo $row['fetcher_relationship']; ?>"
                        fetcher-phone="<?php echo $row['fetcher_phone']; ?>"
                        pic-perm="<?php echo $row['pic_perm']; ?>"
                        on-meds="<?php echo $row['on_meds']; ?> "
                        stud-comment="<?php echo $row['stud_comment']; ?>"
                        day="<?php echo $row['sched_day']; ?>"
                        starttime="<?php echo $row['sched_starttime']; ?>"
                        endtime="<?php echo $row['sched_endtime']; ?>">
                        <div id="stud-pic<?php echo $i; ?>" class="stpfp" 
                             style="background-image: url('./images/students/<?php echo $row['pfp_url']; ?>');">
                        </div>
                        <a href="tutor-students.php?id=<?php echo $studentID; ?>" class="righttitle">
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
    <div id="successModal" class="modal">
        <div class="modal-content">
            <p class="modal-text">Edit Student Details Successful</p>
            <p class="modal-text2">Happy Heads Tutorial Center</p>
        </div>
    </div>
    <script src="javascript/overlay.js"></script>
    <?php include_once 'tutor-students.php'; ?>
</div>
