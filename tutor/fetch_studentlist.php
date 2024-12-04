<?php
include_once '../includes/dbh.inc.php';

if (isset($_GET['mod_id']) && isset($_GET['sched_day']) && isset($_GET['start_time']) && isset($_GET['end_time'])) {
    $mod_id = mysqli_real_escape_string($conn, $_GET['mod_id']);
    $sched_day = mysqli_real_escape_string($conn, $_GET['sched_day']);
    $start_time = mysqli_real_escape_string($conn, $_GET['start_time']);
    $end_time = mysqli_real_escape_string($conn, $_GET['end_time']);

    // Fetch the students along with their specific time slots
    $sql = "SELECT s.stud_fname, s.stud_lname, sched.sched_starttime, sched.sched_endtime
            FROM students s
            INNER JOIN schedule sched ON s.stud_id = sched.stud_id 
            WHERE sched.sched_day = '$sched_day' 
            AND sched.sched_starttime >= '$start_time'
            AND sched.sched_endtime <= '$end_time'
            AND sched.mod_ID = '$mod_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($students);
    } else {
        echo json_encode(['error' => 'Error fetching students']);
    }   
}
?>