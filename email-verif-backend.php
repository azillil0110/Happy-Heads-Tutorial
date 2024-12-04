<?php

require_once __DIR__ . '/includes/redirectfunction.php';
require_once __DIR__ . '/includes/dbh.inc.php';

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

        $stmt = $conn->prepare("SELECT mod_id FROM moderator WHERE mod_usern = ?");
        if ($stmt) {

            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($mod_id);
            $stmt->fetch();
            $stmt->close();

            if (!empty($mod_id)) {
                $_SESSION ['mod_id'] = $mod_id;
                createAuditRecords($conn, $mod_id, $acc_type, $username);
            } else {
                header("Location: email-verif.php?error=mod_id_not_found");
                exit();
            }
        } else {
            header("Location: email-verif.php?error=db_query_failed");
            exit();
        }
    } else {
        header("Location: email-verif.php?error=invalid_code");
        exit();
    }
}
?>