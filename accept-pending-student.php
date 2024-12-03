<?php
include_once 'includes/dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stud_id = $_POST['studid'];

    echo $stud_id;

    $query = "UPDATE students 
               SET 
                modId = 2
               WHERE stud_id = $stud_id;";

    if (mysqli_query($conn, $query)) {
        header('Location: admin-dashboard.php?page=pendingstudents');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}