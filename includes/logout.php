<?php
session_start();

$mod_id = $_SESSION['mod_id'];

require_once 'dbh.inc.php';

$stmt = $conn->prepare("
    SELECT log_id FROM audit_log
    WHERE log_in_time = (SELECT MAX(log_in_time) FROM audit_log WHERE mod_id = ? AND log_out_time IS NULL)
    LIMIT 1
");

if ($stmt) {
    $stmt->bind_param("i", $mod_id);

    if ($stmt->execute()) {
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($audit_log_id);
            $stmt->fetch();

            $update_stmt = $conn->prepare("UPDATE audit_log SET log_out_time = NOW() WHERE log_id = ?");
            
            if ($update_stmt) {
                $update_stmt->bind_param("i", $audit_log_id);
                
                if ($update_stmt->execute()) {
                    session_unset();
                    session_destroy();

                    header("Location: ../login.php?logout=success");
                    exit();
                } else {
                    echo "Error updating logout time: " . $update_stmt->error;
                }
                $update_stmt->close();
            } else {
                echo "Error preparing the update query: " . $conn->error;
            }
        } else {
            echo "No active session found for this user.";
        }
    } else {
        echo "Error executing the query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing the query: " . $conn->error;
}

?>
