<?php

$dsn = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "happy_heads";

$conn = new mysqli($dsn, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
