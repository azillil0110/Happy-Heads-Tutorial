<?php
include_once 'includes/dbh.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    echo "Unauthorized access!";
    exit;
}

$currentUser = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = $_FILES['userImage'];
    $filename = $_FILES['userImage']['name'];
    $fileTMPname = $_FILES['userImage']['tmp_name'];
    $fileSize = $_FILES['userImage']['size'];
    $fileError = $_FILES['userImage']['error'];
    $fileType = $_FILES['userImage']['type'];
    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = $filename;
                $filedestination = 'images/Team/' . $fileNameNew;
                move_uploaded_file($fileTMPname, $filedestination);
            } else {
                die("File size too big!");
            }
        } else {
            die("Error uploading your file");
        }
    } else {
        $filename ="new.jpg";
    }

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
                mod_pass = '$password',
                pfp_url = '$filename'
               WHERE mod_usern = '$currentUser'";

    if (mysqli_query($conn, $query)) {
        header('Location: admin-dashboard.php?page=settings');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
