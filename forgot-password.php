<?php
require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\PHPMailer.php';
require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\Exception.php';
require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$host = 'localhost';
$dbname = 'happy_heads';
$username = 'root';
$password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['username'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT * FROM moderator WHERE mod_email = :email");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $otp = rand(100000, 999999); 

                session_start();
                $_SESSION['otp'] = $otp;
                $_SESSION['otp_email'] = $email;

                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; 
                    $mail->SMTPAuth = true;
                    $mail->Username = 'migueleugenio102@gmail.com'; 
                    $mail->Password = 'mruu wsty kmeg qvxq';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;

                    $mail->setFrom('migueleugenio102@gmail.com', 'Happy Heads Tutorial Center');
                    $mail->addAddress($email);
                    $mail->Subject = 'Forgot Password';
                    $mail->Body = "Your OTP code is $otp";

                    $mail->send();
                    $success = "OTP sent to your email. Please check your inbox.";

                    header("Location: verify-otp.php"); 
                    exit(); 

                } catch (Exception $e) {
                    $error = "Error sending email: " . $mail->ErrorInfo;
                }
            } else {
                $error = "Email not found in our records.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgot-password-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <main>
        <div class="login-box">
            <form method="POST" action="forgot-password.php">
                <p style="font-weight: bold;">Forgot Password</p>
                <?php if (isset($success)) { echo "<p style='color:green;'>$success</p>"; } ?>
                <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                <div>
                    <label style="font-weight: bold;" for="username">Email</label>
                    <input type="text" id="username" name="username" placeholder="Enter your email" required>
                </div>
                <button type="submit">Send Code</button>
            </form>
        </div>
    </main>

</body>
</html>
