<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $userfname = $_POST['fname'];
    $userlname = $_POST['lname'];
    $userbdate = $_POST['bdate'];
    $usergender = $_POST['gender'];
    if($usergender === "Please select one..."){
        $usergender = "none";
    }
    $useracctype = $_POST['acctype'];
    $userdesc = $_POST['message'];
    $useremail = $_POST['email'];
    $userphone = $_POST['phone'];
    $userdefaultpfp = 'default.jpg';
    $useruid = $userfname;
    $useruid = strtolower($userfname);
    $userpassw = strtolower($userlname);
    $userpassh = password_hash($userpassw , PASSWORD_DEFAULT);

    $cipher = "AES-128-CTR"; // Encryption method
    $key = "your_encryption_key"; // Must be 16 bytes for AES-128
    $options = 0;
    $iv = random_bytes(openssl_cipher_iv_length($cipher)); // Initialization vector

    $encrypted = openssl_encrypt($plaintext, $cipher, $key, $options, $iv);
    echo "Encrypted: " . $encrypted;

    // Decryption
    $decrypted = openssl_decrypt($encrypted, $cipher, $key, $options, $iv);

    try {
        require_once 'inputdb-dbh.inc.php';

        $query = "INSERT INTO moderator (mod_fname, mod_lname, mod_email, mod_phone, mod_bdate, mod_gender, mod_usern, mod_pass, acc_type, acc_status, mod_description, pfp_url) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $modID = 1;

        $stmt = $pdo->prepare($query);

        $stmt->execute([$userfname, $userlname, $useremail, $userphone, $userbdate, $usergender, $userfname, $userpassh,$useracctype,'active',$userdesc, $userdefaultpfp]);

        $pdo = null;
        $stmt = null;

        // Ensure no output before this
        header('Location: ../admin-dashboard.php?page=adduser');
        die();
    } catch (PDOException $e) {
        die("Query Failed:" . $e->getMessage());
    }

    

}