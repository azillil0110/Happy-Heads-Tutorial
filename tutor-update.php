<?php
include_once 'includes/dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $modid = $_POST['modid'];
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $bdate = $_POST['bdate'];
    $gender = $_POST['mgender'];
    $description = htmlspecialchars($_POST['message']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['phone'];
    $action = $_POST['action']; // Check which button was clicked

    echo $modid."<br>";
    echo $fname."<br>";
    echo $lname."<br>";
    echo $bdate."<br>";
    echo $gender."<br>";
    echo $description."<br>";
    echo $email."<br>";
    echo $phone."<br>";


    if ($action === 'save') {
        // Update logic
        $query = "UPDATE moderator 
                   SET 
                    mod_fname = '$fname', 
                    mod_lname = '$lname', 
                    mod_bdate = '$bdate', 
                    mod_gender = '$gender', 
                    mod_description = '$description', 
                    mod_email = '$email', 
                    mod_phone = '$phone' 
                   WHERE mod_id = $modid";

        if (mysqli_query($conn, $query)) {
            header('Location: admin-dashboard.php?page=tutors');
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } elseif ($action === 'remove') {
        // Remove logic
        $query = "UPDATE moderator 
                   SET 
                    acc_status = 'archived' 
                   WHERE mod_id = $modid";

        if (mysqli_query($conn, $query)) {
            header('Location: admin-dashboard.php?page=tutors');
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Unknown action: " . $action;
    }
}