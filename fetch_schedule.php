<?php
include_once 'includes/dbh.inc.php'; // Include the database connection

if (isset($_GET['id'])) {
    $mod_id = $_GET['id']; // Get the tutor ID

    // Query to fetch the tutor's schedule
    $sql = "SELECT 
                sched_id, 
                sched_day, 
                sched_starttime, 
                sched_endtime, 
                sched.mod_ID 
            FROM schedule sched
            INNER JOIN moderator m ON sched.mod_ID = m.mod_ID
            WHERE m.mod_id = '$mod_id'
            ORDER BY sched.sched_day, sched.sched_starttime";

    $result = mysqli_query($conn, $sql);
    $schedules = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo '<div class="rowcenter">
            <h2>SCHEDULE</h2>
        </div>';

    if ($schedules) {
        // Group schedules by day of the week
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $groupedSchedules = array_fill_keys($daysOfWeek, []);

        foreach ($schedules as $schedule) {
            $groupedSchedules[$schedule['sched_day']][] = $schedule;
        }

        // Output the grouped schedules as HTML
        echo '<div class="rowcenter">';
        foreach ($daysOfWeek as $day) {
            echo "<div class='col-16'>
                    <h3>$day</h3>
                  </div>";
        }
        echo '</div>';

        echo '<div class="schedule-details">';
        echo '<div class="rowcenter">';

        // Loop through each day and merge schedules for that day
        foreach ($groupedSchedules as $day => $schedules) {
            echo '<div class="col-16">';
            
            if (count($schedules) > 0) {
                // Sort the schedules by start time
                usort($schedules, function($a, $b) {
                    return strtotime($a['sched_starttime']) - strtotime($b['sched_starttime']);
                });

                // Merge overlapping schedules
                $mergedSchedules = [];
                $currentSchedule = $schedules[0]; // Start with the first schedule

                foreach ($schedules as $schedule) {
                    // If the current schedule overlaps with the new schedule
                    if (strtotime($schedule['sched_starttime']) <= strtotime($currentSchedule['sched_endtime'])) {
                        // Merge the schedules: update the end time of the current schedule if needed
                        if (strtotime($schedule['sched_endtime']) > strtotime($currentSchedule['sched_endtime'])) {
                            $currentSchedule['sched_endtime'] = $schedule['sched_endtime'];
                        }
                    } else {
                        // No overlap, push the current merged schedule and start a new one
                        $mergedSchedules[] = $currentSchedule;
                        $currentSchedule = $schedule;
                    }
                }

                // Add the last merged schedule
                $mergedSchedules[] = $currentSchedule;

                // Now display the merged schedules
                foreach ($mergedSchedules as $schedule) {
                    $startTime = date("g:i A", strtotime($schedule['sched_starttime'])); // Convert to 12-hour format with AM/PM
                    $endTime = date("g:i A", strtotime($schedule['sched_endtime'])); // Convert to 12-hour format with AM/PM

                    echo "<div class='timetext'>
                            $startTime - $endTime
                          </div>";
                }
            } else {
            }

            echo "</div>"; // Close the column for the current day
        }
        
        echo '</div>';
        echo '</div>';
    } else {
        echo 'No schedules available!';
    }

} else {
    echo 'No tutor ID provided!';
}

echo '<div class="btn">
            <button type="button" class="back-btn" onclick="BackButton()">Back</button>
            <button type="button" class="close-btn" onclick="closeSched()">Close</button>
        </div>';
?>