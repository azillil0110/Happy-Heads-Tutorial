<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $userfname = $_POST['fname'];
    $userlname = $_POST['lname'];
    $userbdate = $_POST['bdate'];
    $usergender = $_POST['gender'];
    if($usergender === "Please select on..."){
        $usergender = "none";
    }
    $useracctype = $_POST['acctype'];
    $userdesc = $_POST['message'];
    $useremail = $_POST['email'];
    $userphone = $_POST['phone'];
    $userdefaultpfp = 'default.jpg';

    echo "$userfname<br>";
    echo "$userlname<br>";
    echo "$userbdate<br>";
    echo "$usergender<br>";
    echo "$useracctype<br>";
    echo "$userdesc<br>";
    echo "$useremail<br>";
    echo "$userphone<br>";

    try {
        require_once 'inputdb-dbh.inc.php';

        $query = "INSERT INTO moderator (mod_fname, mod_lname, mod_email, mod_phone, mod_bdate, mod_gender, mod_usern, mod_pass, acc_type, acc_status, mod_description, pfp_url) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $modID = 1;

        $stmt = $pdo->prepare($query);

        $stmt->execute([$userfname, $userlname, $useremail, $userphone, $userbdate, $usergender, $userfname, $userlname,$useracctype,'active',$userdesc, $userdefaultpfp]);

        $pdo = null;
        $stmt = null;

        // Ensure no output before this
        header('Location: ../admin-dashboard.php?username=' . urlencode($username));
        die();
    } catch (PDOException $e) {
        die("Query Failed:" . $e->getMessage());
    }

    

}