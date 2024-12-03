<link rel="stylesheet" href="css/admin/-admin-tutor.css">
<div class="overlay" id="tutorinfo-overlay">
<?php
    include_once 'includes/dbh.inc.php';
   
    // Fetch schedules for the current tutor (mod_ID = 8)
    $sql = "SELECT 
            sched_id, 
            sched_day, 
            sched_starttime, 
            sched_endtime, 
            stud_ID, 
            sched.mod_ID 
        FROM schedule sched
        INNER JOIN moderator m ON sched.mod_ID = m.mod_ID
        WHERE m.mod_id = 'mod-id'
        ORDER BY sched.sched_day, sched.sched_starttime";
    
    $result = mysqli_query($conn, $sql);
    $schedules = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Function to merge overlapping schedules by day
    function mergeSchedulesForDay($schedules) {
        // Sort schedules by start time
        usort($schedules, function($a, $b) {
            return strtotime($a['sched_starttime']) - strtotime($b['sched_starttime']);
        });

        $mergedSchedules = [];
        $currentSchedule = null;

        foreach ($schedules as $schedule) {
            $startTime = strtotime($schedule['sched_starttime']);
            $endTime = strtotime($schedule['sched_endtime']);

            if (!$currentSchedule) {
                // First schedule, start a new merged block
                $currentSchedule = $schedule;
            } else {
                // Check if the current schedule overlaps or is adjacent to the new one
                $currentEndTime = strtotime($currentSchedule['sched_endtime']);
                
                if ($startTime <= $currentEndTime) {
                    // Merge if overlapping or adjacent (extend the end time if needed)
                    if ($endTime > $currentEndTime) {
                        $currentSchedule['sched_endtime'] = $schedule['sched_endtime'];
                    }
                } else {
                    // No overlap, finalize the current schedule and start a new one
                    $mergedSchedules[] = $currentSchedule;
                    $currentSchedule = $schedule;
                }
            }
        }

        if ($currentSchedule) {
            $mergedSchedules[] = $currentSchedule;
        }

        return $mergedSchedules;
    }

    // Group schedules by day of the week
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $groupedSchedules = array_fill_keys($daysOfWeek, []);

    foreach ($schedules as $schedule) {
        $groupedSchedules[$schedule['sched_day']][] = $schedule;
    }
?>
    <div class="overlay-content">
        <div class="row">
            <div class="col-80">

            </div>
            <div class="col-20">
                <button class="sched-btn" onclick="showTutorSchedule()">Schedule →</button>
            </div>
        </div>


        <form action="tutor-update.php" class="tutorform" method="POST">
            <h1>Personal Information</h1>
            <div class="top-container">
                <div id="form-1st-part">
                    <div>
                        <input id="field" type="hidden" name="form-name" value="form 1">
                        <div class="contact-form-field">
                            <input class="inputtype" type="hidden" name="modid" id="modid" readonly>
                        </div>
                        <div class="contact-form-field">
                            <input class="inputtype" type="text" name="fname" id="fname" readonly>
                        </div>
                        <div class="contact-form-field">
                            <input class="inputtype" type="text" name="lname" id="lname" readonly>
                        </div>
                    </div>
                </div>
                <div class="date-gender">
                    <div class="col-33" id="date">
                        <h5>Birth Date</h5>
                        <input class="inputtype" type="date" id="bdate" name="bdate" readonly>
                    </div>
                    <div class="col-33" id="gender">
                        <h5>Gender</h5>
                        <input class="inputtype" type="text" id="mgender" name="mgender" readonly>
                    </div>
                    <div class="col-33" id="acc_type">
                        <h5>Account Type</h5>
                        <input class="inputtype" name="acctype" type="text" id="acctype" readonly>

                    </div>
                </div>

                <div class="description">
                    <h5>Description</h5>
                    <input class="inputtype" type="text" name="message" id="message" readonly>
                </div>
                <div>
                    <h1 id="login-security">Login & Security</h1>
                </div>
                <div class="email-phone">
                    <div class="col-50" id="modemail">
                        <h5>Email</h5>
                        <input class="inputtype" id="email" type="text" name="email" readonly>
                    </div>
                    <div class="col-50" id="modphone">
                        <h5>Phone</h5>
                        <input class="inputtype" id="phone" type="tel" name="phone" readonly>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" class="remove-btn" name="action" value="remove">Remove</button>
                    <button type="button" class="edit-btn" onclick="EditTutor()">Edit</button>
                    <button type="submit" class="save-btn" name="action" value="save">Save Changes</button>
                    <button type="button" class="close-btn" onclick="closeModDetails()">Close</button>
                </div>
            </div>
        </form>
    </div>
    <div id="overlay-content2" style="display: none;">
        <?php
    echo '<div class="rowcenter">';
    foreach ($daysOfWeek as $day) {
        echo "<div class='col-16'>
        <h3>$day</h3>
        </div>";
    }
    echo '</div>';
    echo '<div class="rowcenter">';
    foreach ($groupedSchedules as $day => $schedules) {
        // Merge overlapping schedules for the current day
        $mergedSchedules = mergeSchedulesForDay($schedules);
        
    
        // Start a new row for each day
        echo '<div class="col-16">';
    
        // Loop through the merged schedules for the current day and display them
        foreach ($mergedSchedules as $schedule) {
            echo "<div class='timetext' onclick='showStudents({$schedule['mod_ID']}, \"{$schedule['sched_day']}\", \"{$schedule['sched_starttime']}\", \"{$schedule['sched_endtime']}\")'>           
                {$schedule['sched_starttime']} - {$schedule['sched_endtime']}</div>";
        }
    
        echo "</div>"; // Close the row for the current day
    }
    ?>
    <div class="btn">
        <button type="button" class="back-btn" onclick="BackButton()">Back</button>
        <button type="button" class="close-btn" onclick="closeModDetails()">Close</button>
    </div>
    </div>
</div>