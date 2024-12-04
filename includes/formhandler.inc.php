<?php
session_start();

require_once 'dbh.inc.php';
    require_once 'C:\xampp\htdocs\sendemail\phpmailer\src\PHPMailer.php';
    require_once 'C:\xampp\htdocs\sendemail\phpmailer\src\Exception.php';
    require_once 'C:\xampp\htdocs\sendemail\phpmailer\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $query = "SELECT * FROM moderator WHERE mod_usern = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $acc = $row['acc_type'];
        $userid = (int)$row['mod_id'];

        if ($userid <= 8) {
            if ($password === $row['mod_pass']) {
                $_SESSION['username'] = $username;
                $_SESSION['acc_type'] = $row['acc_type'];
                $_SESSION['email'] = $row['mod_email'];

                $verificationCode = random_int(100000, 999999);
                $_SESSION['verification_code'] = $verificationCode;

                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'johnlutherdelacruz01@gmail.com';
                    $mail->Password   = 'ewhs vkjs uqcj hmjb';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    $mail->setFrom('johnlutherdelacruz01@gmail.com', 'Happy Heads Tutorial Center');
                    $mail->addAddress($_SESSION['email']);
                    $mail->isHTML(true);
                    $mail->Subject = 'Your Two-Factor Authentication Code';
                    $mail->Body    = 'Dear User, <br><br>Please enter the following code to finish the authentication process as part of our enhanced security measures: ' . $verificationCode . '<br><br>From,<br>Your Happy Heads Tutorial Center Family!';
                    $mail->send();
                    header('Location: ../email-verif.php');
                    exit();
                } catch (Exception $e) {
                }
            } else {
                header('Location: ../login.php?error=invalid_password&username=' . urlencode($username));
                exit();
            }
        } else {
            $passwordhash = $row['mod_pass'];
            if (password_verify($password, $passwordhash)) {
                $_SESSION['username'] = $username;
                $_SESSION['acc_type'] = $row['acc_type'];
                $_SESSION['email'] = $row['mod_email'];

                $verificationCode = random_int(100000, 999999);
                $_SESSION['verification_code'] = $verificationCode;

                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'johnlutherdelacruz01@gmail.com';
                    $mail->Password   = 'ewhs vkjs uqcj hmjb';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    $mail->setFrom('johnlutherdelacruz01@gmail.com', 'Happy Heads Tutorial Center');
                    $mail->addAddress($_SESSION['email']);
                    $mail->isHTML(true);
                    $mail->Subject = 'Your Two-Factor Authentication Code';
                    $mail->Body    = 'Dear User, <br><br>Please enter the following code to finish the authentication process as part of our enhanced security measures: ' . $verificationCode . '<br><br>From,<br>Your Happy Heads Tutorial Center Family!';
                    $mail->send();
                    header('Location: ../email-verif.php');
                    exit();
                } catch (Exception $e) {
                }
            } else {
                header('Location: ../login.php?error=invalid_password&username=' . urlencode($username));
                exit();
            }
        }
    }

}
?>