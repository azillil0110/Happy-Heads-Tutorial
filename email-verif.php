<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/verif-styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="verif-box">
        <form id="verif-form" action="email-verif-backend.php" method="POST">
            <a href="index.php" id="logo"><img src="images/hpt_logo.png" alt="HPT Logo"></a>
            <div>
                <p id="labelel">Verification Code</p>
                <input type="text" id="verifcode" name="verifcode" placeholder="Enter the verification code" 
                    value="<?php if (isset($_POST['verifcode'])) echo htmlspecialchars($_POST['verifcode']); ?>" required>
                <label class="disclaimer">A code has been sent to your e-mail.</label>
            </div>
            <div class="error-message">
                <?php
                if (isset($_GET['error']) && $_GET['error'] === 'invalid_code') {
                    echo '<p class="errormess">Invalid verification code. Please try again.</p>';
                }
                ?>
            </div>
            <button type="submit">Submit</button>
            <div class="bottom">
                <p class="disclaimer1">If you didn’t receive the code,&nbsp;<a href="verif-resend.php" class="resend">click here to resend it</a>&nbsp;.</p>
            </div>
            <div class="error-message">
                <?php
                if (isset($_GET['email-resent']) && $_GET['email-resent'] === 'true') {
                    echo '<p class="disclaimer2">E-mail sent!</p>';
                }
                ?>
            </div>
        </form>
        </div>
    </main>
</body>
</html>
