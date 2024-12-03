<?php

require_once 'includes\redirectfunction.php';

session_start();

if (isset($_SESSION['verification_code'])) {
    echo "Verification code is set: " . $_SESSION['verification_code'];
} else {
    echo "Verification code is NOT set after redirect!";
}

if (isset($_POST['verifcode'])) {
    $userInputCode = trim($_POST['verifcode']);
    echo "User Input: " . htmlspecialchars($userInputCode);
} else {
    echo "Verification code is not set!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInputCode = trim($_POST["verifcode"]);
    if (isset($_SESSION['verification_code']) && (int)$userInputCode === (int)$_SESSION['verification_code']) {
        $username = $_SESSION['username'];
        $acc_type = $_SESSION['acc_type'];
        redirectBasedOnAccType($acc_type, $username);
    } else {
        header("Location: email-verif.php?error=invalid_code");
        exit();
    }
}
?>