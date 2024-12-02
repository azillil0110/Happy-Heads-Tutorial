<?php
include_once 'includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    echo "Unauthorized access!";
    exit;
}

$currentUser = $_SESSION['username'];

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
        
    $update = "UPDATE moderator 
               SET mod_fname = ?, mod_lname = ?, mod_bdate = ?, mod_gender = ?, 
                   mod_description = ?, mod_email = ?, mod_phone = ?, mod_usern = ?, mod_pass = ?
               WHERE mod_usern = ?";

    $stmt = $conn->prepare($update);

    if ($password !== null) {
        $stmt->bind_param("sssssssssi", $fname, $lname, $bdate, $gender, $description, $email, $phone, $username, $password, $currentUser);
    }

    if ($stmt->execute()) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}
?>
