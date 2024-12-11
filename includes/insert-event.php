<?php
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file = $_FILES['eventImage'];
    $filename = $_FILES['eventImage']['name'];
    $fileTMPname = $_FILES['eventImage']['tmp_name'];
    $fileSize = $_FILES['eventImage']['size'];
    $fileError = $_FILES['eventImage']['error'];
    $fileType = $_FILES['eventImage']['type'];
    $eventname = $_POST['eventName'];
    $eventdate = $_POST['eventDate'];
    $eventdesc = $_POST['eventDescription'];
    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = $filename;
                $filedestination = '../images/events/' . $fileNameNew;
                move_uploaded_file($fileTMPname, $filedestination);
            } else {
                die("File size too big!");
            }
        } else {
            die("Error uploading your file");
        }
    } else {
        $filename ="default.jpg";
    }

    try {
        require_once 'inputdb-dbh.inc.php';

        $query = "INSERT INTO events_ (event_name, event_date, event_description, image_url, modID) 
                  VALUES (?, ?, ?, ?, ?);";

        $modID = 1;

        $stmt = $pdo->prepare($query);

        $stmt->execute([$eventname, $eventdate, $eventdesc, $filename, $modID]);

        $pdo = null;
        $stmt = null;

        // Ensure no output before this
        header('Location: ../admin-dashboard.php');
        die();
    } catch (PDOException $e) {
        die("Query Failed:" . $e->getMessage());
    }
} else {
    // Redirect for non-POST requests
    header('Location: ../admin-dashboard.php');
    exit;
}
