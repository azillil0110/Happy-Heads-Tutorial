<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/dbh.inc.php';

$report = $_GET['report'];
$filter = $_GET['filter'];

switch ($report) {
    case 'students':
        $query = "SELECT * FROM students JOIN moderator ON students.modID = moderator.mod_id";
        if ($filter == 'asc_name') {
            $query .= " ORDER BY students.stud_fname ASC";
        } elseif ($filter == 'desc_name') {
            $query .= " ORDER BY students.stud_fname DESC";
        } elseif ($filter == 'asc_age') {
            $query .= " ORDER BY students.stud_age ASC";
        } elseif ($filter == 'desc_age') {
            $query .= " ORDER BY students.stud_age DESC";
        } elseif ($filter != 'none') {
            $query .= " WHERE students.stud_grade_level = '$filter'";
        }
        break;

    case 'tutors':
        $query = "SELECT * FROM moderator JOIN students ON students.modID = moderator.mod_id";
        if ($filter == 'asc_name') {
            $query .= " ORDER BY moderator.mod_fname ASC";
        } elseif ($filter == 'desc_name') {
            $query .= " ORDER BY moderator.mod_fname DESC";
        } elseif ($filter == 'male') {
            $query .= " WHERE moderator.mod_gender = 'male'";
        } elseif ($filter == 'female') {
            $query .= " WHERE moderator.mod_gender = 'female'";
        }
        break;

    case 'audit_logs':
        $query = "SELECT * FROM audit_log JOIN moderator ON audit_log.mod_id = moderator.mod_id";
        if ($filter == 'today') {
            $query .= " WHERE DATE(audit_log.log_in_time) = CURDATE()";
        } elseif ($filter == 'week') {
            $query .= " WHERE WEEK(audit_log.log_in_time) = WEEK(CURDATE())";
        } elseif ($filter == 'month') {
            $query .= " WHERE MONTH(audit_log.log_in_time) = MONTH(CURDATE())";
        }
        break;
}

$result = $conn->query($query);

if (!$result) {
    die('Error executing query: ' . $conn->error);
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
