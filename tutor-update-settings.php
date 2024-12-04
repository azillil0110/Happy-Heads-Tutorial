<?php
include_once 'includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    echo "Unauthorized access!";
    exit;
}

$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $description = htmlspecialchars($_POST['description']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['phone'];
    $username = htmlspecialchars($_POST['usern']);
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $query = "UPDATE moderator 
               SET 
                mod_fname = '$fname', 
                mod_lname = '$lname', 
                mod_bdate = '$bdate', 
                mod_gender = '$gender', 
                mod_description = '$description', 
                mod_email = '$email', 
                mod_phone = '$phone', 
                mod_usern = '$username', 
                mod_pass = '$password'
               WHERE mod_usern = '$username'";

    if (mysqli_query($conn, $query)) {
        header('Location: tutor-dashboard.php?page=settings');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
