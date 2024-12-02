<link rel="stylesheet" href="css/schedule.css">

<?php include_once '../includes/dbh.inc.php';
session_start();



$currentUser = $_SESSION['username'];
?>
$_SESSION['username'];
<div class="righttop">
    <p class="righttoptext">My Schedule</p>
</div>
<div class="rightbot">
    <?php
        $sql = "SELECT 
        sched_id, 
        sched_day, 
        sched_starttime, 
        sched_endtime, 
        stud_ID, 
        mod_ID 
    FROM schedule 
    WHERE mod_ID = '$currentUser'
    ORDER BY sched_day, sched_starttime";
    
    $result = mysqli_query($conn, $sql);
    $schedules = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $resultcheck = mysqli_num_rows($result);
    if($resultcheck > 0){
        $sc = 1;
        while($row = mysqli_fetch_assoc($result)){ 
            $schedID = $row['sched_id']; 
            ?>
             <div class="box"
                sched-id =  "<?php echo $row['sched_id']; ?>"
                stud-id = "<?php echo $row['stud_id']; ?>"
                mod-id = "<?php echo $row['mod_id']; ?>"
                sched-day = "<?php echo $row['sched_day']; ?>"
                starttime = "<?php echo $row['sched_starttime']; ?>"
                endtime = "<?php echo $row['sched_endtime']; ?>">

                <script> function showMySchedule(box){ 
                    const schedid = box.getAttribute('sched-id');
                    const studid = box.getAttribute('stud-id');
                    const modid = box.getAttribute('mod-id');
                    const schedday = box.getAttribute('sched-day');
                    const start_time = box.getAttribute('starttime');
                    const end_time = box.getAttribute('endtime');

                    document.getElementById('').value =start_time;
                }
                </script>
            </div>
            <?php
            $sc++;
        }
    }
?>
</div>
<?php include_once 'myschedule.php'?>