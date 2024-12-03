<link rel="stylesheet" href="css/schedule.css">
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
<?php
    include_once '../includes/dbh.inc.php';
    session_start();

    $currentUser = $_SESSION['username'];
    echo "<div>
        <h3>$currentUser 's sched</h3>
        </div>";  

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
        WHERE m.mod_usern = '$currentUser'
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

    // Table Header for Days of the Week
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
            // Display the merged time slot as a single entry
            echo "<div class='timetext' onclick='showStudents({$schedule['sched_id']}, \"{$schedule['sched_starttime']}\", \"{$schedule['sched_endtime']}\")'>           
            {$schedule['sched_starttime']} - {$schedule['sched_endtime']}</div>";
        }
    
        echo "</div>"; // Close the row for the current day
    }
    include_once 'overlay-schedule-studentlist.php'
?>
</div>
