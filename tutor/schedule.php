<link rel="stylesheet" href="css/schedule.css">
<div class="righttop">
    <p class="righttoptext">My Schedule</p>
</div>
<div class="rightbot">
<?php
    $sql = "SELECT 
            sc.sched_id,
            sc.stud_id,
            sc.mod_id,
            sc.sched_day,
            sc.sched_starttime,
            sc.sched_endtime
            FROM
                schedule sc
                ";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        $sc = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $schedID = $row["sched_id"];
            ?>
            <div class="box"
                sched-id =  "<?php echo $row['sched_id']; ?>"
                stud-id = "<?php echo $row['stud_id']; ?>"
                mod-id = "<?php echo $row['mod_id']; ?>"
                sched-day = "<?php echo $row['sched_day']; ?>"
                starttime = "<?php echo $row['sched_starttime']; ?>"
                endtime = "<?php echo $row['sched_endtime']; ?>">
                <a href="admin-studentinfo.php?id=<?php echo $studentID; ?>" class="righttitle">
                    <?php echo $row['stud_fname'] . " " . $row['stud_lname']; ?>
                </a>
                <div class="hover-text">More Info</div>
            </div>
            </div>
            }
        }
?>
        <div class="rowcenter">    
        <div class="col-16">
            <p class="textlabel">MONDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">TUESDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">WEDNESDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">THURSDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">FRIDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">SATURDAY</p>
        </div>
    </div>
</div>

