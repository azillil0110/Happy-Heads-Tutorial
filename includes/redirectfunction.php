<?php

function createAuditRecords($conn, $mod_id, $acc_type, $username) {
    require_once 'dbh.inc.php';
    $stmt = $conn->prepare("INSERT INTO audit_log (log_in_time, mod_id) VALUES (NOW(), ?)");
    
    if ($stmt) {
        $stmt->bind_param("i", $mod_id);

        if ($stmt->execute()) {
            redirectBasedOnAccType($acc_type, $username);
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    exit();
}

function redirectBasedOnAccType($acc_type, $username) {
    if ($acc_type == 'tutor') {
        header('Location: ../Happy-Heads-Tutorial/tutor-dashboard.php?username='.$username);
    } elseif ($acc_type == 'admin' || $acc_type == 'founder') {
        header('Location: ../Happy-Heads-Tutorial/admin-dashboard.php?username='.$username);
    }
    exit();
}
?>