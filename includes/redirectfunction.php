<?php
function redirectBasedOnAccType($acc_type, $username) {
    if ($acc_type == 'tutor') {
        header('Location: ../Happy-Heads-Tutorial/tutor-dashboard.php?username='.$username);
    } elseif ($acc_type == 'admin' || $acc_type == 'founder') {
        header('Location: ../Happy-Heads-Tutorial/admin-dashboard.php?username='.$username);
    }
    exit();
}
?>