<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    <main>
        <div class="login-box">
            <form id="login-form" action="includes/formhandler.inc.php" method="POST">
                <a href="index.php" id="logo"><img  src="images/hpt_logo.png" alt="HPT Logo"></a>
                <div>
                    <label style="font-weight: bold;" for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div>
                    <label style="font-weight: bold;" for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit">Login</button>
                <a href="forgot-password.php">Forgot Password?</a>
            </form>
        </div>
    </main>
    <script src="javascript/login.js"></script>
</body>

</html>
