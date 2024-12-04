<?php
session_start();

if (!isset($_SESSION['otp'])) {
    header("Location: forgot-password.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        $plainPassword = $newPassword;

        $host = 'localhost';
        $dbname = 'happy_heads';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("UPDATE moderator SET mod_pass = :password WHERE mod_email = :email");
            $stmt->execute([
                ':password' => $plainPassword, 
                ':email' => $_SESSION['otp_email'] 
            ]);

            $success = "Password reset successfully. You can now login with your new password.";

            session_unset();
            session_destroy();

            header("Location: login.php"); 
            exit();

        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/forgot-password-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

    <main>
        <div class="login-box">
            <form method="POST" action="reset-password.php">
                <p style="font-weight: bold;">Reset Password</p>
                <?php if (isset($success)) { echo "<p style='color:green;'>$success</p>"; } ?>
                <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                <div>
                    <label style="font-weight: bold;" for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                </div>
                <div>
                    <label style="font-weight: bold;" for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>
                </div>
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </main>

</body>
</html>
