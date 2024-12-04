<?php
    require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\PHPMailer.php';
    require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\Exception.php';
    require_once 'D:\xampp\htdocs\sendemail\phpmailer\src\SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();
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
        $mail->Body    = 'Dear User, 
            <br><br>Please enter the following code to finish the authentication process as part of our enhanced security measures: ' . $_SESSION['verification_code'] . '
            <br><br>From,
            <br>Your Happy Heads Tutorial Center Family!';

        $mail->send();
        header('Location: /Happy-Heads-Tutorial/email-verif.php?email-resent=true');
        exit();
    } catch (Exception $e) {
        
    }

?>