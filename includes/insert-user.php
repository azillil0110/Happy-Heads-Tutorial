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

    echo "$userfname<br>";
    echo "$userlname<br>";
    echo "$userbdate<br>";
    echo "$usergender<br>";
    echo "$useracctype<br>";
    echo "$userdesc<br>";
    echo "$useremail<br>";
    echo "$userphone<br>";

}