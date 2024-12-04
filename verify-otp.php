<?php
session_start();

if (!isset($_SESSION['otp'])) {
    header("Location: forgot-password.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredOtp = $_POST['otp'];

    if ($enteredOtp == $_SESSION['otp']) {
        header("Location: reset-password.php");
        exit();
    } else {
        $error = "Invalid OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify OTP</title>
    <link rel="stylesheet" href="css/forgot-password-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

    <main>
        <div class="login-box">
            <form method="POST" action="verify-otp.php">
                <p style="font-weight: bold;">Verify OTP</p>
                <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                <div>
                    <label style="font-weight: bold;" for="otp">Enter OTP</label>
                    <input type="text" id="otp" name="otp" placeholder="Enter the OTP sent to your email" required>
                </div>
                <button type="submit">Verify OTP</button>
            </form>
        </div>
    </main>

</body>
</html>
