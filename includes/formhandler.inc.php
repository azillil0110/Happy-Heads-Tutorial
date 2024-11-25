<?php

require_once 'dbh.inc.php';

$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query  = "SELECT * from moderator WHERE mod_usern = '$username';";
    $result = mysqli_query($conn, $query);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row = mysqli_fetch_assoc($result)){
            if($password === $row['mod_pass']){
                header('location: ../tutor-dashboard.php');
            }
            else{
                header('location: ../login.php?error=invalid_password&username='.$username);
                exit();
            }
        }
    }
    else{
        header('location: ../login.php?error=no_account');
        exit();
        
    }
    
}
else{
    
}