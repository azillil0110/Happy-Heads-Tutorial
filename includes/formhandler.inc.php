<?php
session_start();

require_once 'dbh.inc.php';
require_once 'D:\XAMPP\htdocs\sendemail\phpmailer\src\PHPMailer.php';
require_once 'D:\XAMPP\htdocs\sendemail\phpmailer\src\Exception.php';
require_once 'D:\XAMPP\htdocs\sendemail\phpmailer\src\SMTP.php';

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

<<<<<<< HEAD
        if($password === $row['mod_pass']) {
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
                $mail->Username   = 'your email';
                $mail->Password   = 'your password';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->setFrom('your email', 'Happy Heads Tutorial Center');
                $mail->addAddress($_SESSION['email']);

                $mail->isHTML(true);
                $mail->Subject = 'Your Two-Factor Authentication Code';
                $mail->Body    = 'Dear User, 
                    <br><br>Please enter the following code to finish the authentication process as part of our enhanced security measures: ' . $verificationCode . '
                    <br><br>From,
                    <br>Your Happy Heads Tutorial Center Family!';

                $mail->send();
                header('Location: ../email-verif.php');
            } catch (Exception $e) {
                
            }

            exit();
        } else {
            header('Location: ../login.php?error=invalid_password&username=' . urlencode($username));
            exit();
=======
    if($resultcheck>0){
        while($row = mysqli_fetch_assoc($result)){
            $acc = $row['acc_type'];
            $userid = (int)$row['mod_id'];
            echo$userid;
            if($userid > 7){
                $passwordhash = $row['mod_pass'];
                if(password_verify($password, $passwordhash)){
                    $_SESSION['username'] = $username;
                    if($acc == 'tutor'){
                        header('location: ../tutor-dashboard.php?username='.$username);
                    }
                    else if ($acc === 'admin' || $acc === 'founder'){
                        header('location: ../admin-dashboard.php?username='.$username);
                    }
                    
                }
            }
            else{
                if($password === $row['mod_pass']){
                    $_SESSION['username'] = $username;
                    if($acc == 'tutor'){
                        header('location: ../tutor-dashboard.php?username='.$username);
                    }
                    else if ($acc === 'admin' || $acc === 'founder'){
                        header('location: ../admin-dashboard.php?username='.$username);
                    }
                    
                }
                else{
                    header('location: ../login.php?error=invalid_password&username='.$username);
                    exit();
                }
            }
                
>>>>>>> 58a4e3b2de21b2cf50c90c71b867a97afb5d53c8
        }
    } else {
        header('Location: ../login.php?error=no_account');
        exit();
    }
}
?>
