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
            <form>
                <p style="font-weight: bold;">Forgot Password</p>
                <div>
                    <label style="font-weight: bold;" for="username">Email</label>
                    <input type="text" id="username" name="username" placeholder="Enter your email" required>
                </div>
                <div>
                    <label style="font-weight: bold;" for="password">Code</label>
                    <input type="password" id="password" name="password" placeholder="Enter one time code" required>
                </div>
                <a href="#">Resend Code</a>
                <a href="new-pass.php"> <button type="submit">Submit</button> </a>
            </form>
        </div>
    </main>

</body>
</html>
