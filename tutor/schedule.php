<link rel="stylesheet" href="css/schedule.css">
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
<?php
    include_once '../includes/dbh.inc.php';
    session_start();

    // Set the current user mod_id to 8
    $currentUser = 8;

    // Fetch schedules for the current tutor (mod_ID = 8)
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

            // If no current schedule or the current schedule ends before the new one starts, add current schedule to the result
            if (!$currentSchedule || $currentSchedule['sched_endtime'] <= $schedule['sched_starttime']) {
                if ($currentSchedule) {
                    $mergedSchedules[] = $currentSchedule;
                }
                $currentSchedule = $schedule;
            } else {
                // Merge if overlapping
                if ($endTime > strtotime($currentSchedule['sched_endtime'])) {
                    $currentSchedule['sched_endtime'] = date('H:i', $endTime);
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

    // Display the schedule table

    // Table Header for Days of the Week
    echo '<div class="rowcenter">';
    foreach ($daysOfWeek as $day) {
        echo "<div class='col-16'>$day</div>";
    }
    echo '</div>';

    // Define possible time slots (modify as needed)
    $timeSlots = ['09:00 - 11:00', '11:00 - 13:00', '13:00 - 15:00', '15:00 - 17:00'];

    // Loop through the time slots to create rows
    foreach ($timeSlots as $timeSlot) {
        echo '<div class="rowcenter">';
        foreach ($groupedSchedules as $day => $schedules) {
            $mergedSchedules = mergeSchedulesForDay($schedules);

            $found = false;
            foreach ($mergedSchedules as $schedule) {
                // Check if this schedule fits within the current time slot
                $scheduleStart = strtotime($schedule['sched_starttime']);
                $scheduleEnd = strtotime($schedule['sched_endtime']);
                $slotStart = strtotime(explode(' - ', $timeSlot)[0]);
                $slotEnd = strtotime(explode(' - ', $timeSlot)[1]);

                // If the schedule's time overlaps with the current time slot, display it
                if (($scheduleStart >= $slotStart && $scheduleStart < $slotEnd) || ($scheduleEnd > $slotStart && $scheduleEnd <= $slotEnd)) {
                    // Display the merged schedule without the student ID
                    echo "<div class='col-16'>{$schedule['sched_starttime']} - {$schedule['sched_endtime']}</div>";
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                echo "<div class='col-16'></div>"; // Empty cell if no schedule matches the time slot
            }
        }
        echo '</div>';
    }

?>
</div>