<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    try{
        require_once "dbh.inc.php";

        $query ="INSERT INTO acc(username,passw) VALUES (?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username,$password]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        
        die();

    }catch(PDOException $e){
        die("Query Failed: " . $e->getMessage());
    }

 /*   echo "Ito yung mga sinumbit";
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password; */

    
}
else{
    
}