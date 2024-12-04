<div class="righttop">
    <p class="righttoptext">Settings Page</p>
</div>
<link rel="stylesheet" href="css/tutor/setting.css">

<div class="contact-form">
    <h1>Personal Information</h1>
    <div class="top-container">
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $dsn = 'localhost';
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "happy_heads";

        $conn = new mysqli($dsn, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM moderator WHERE mod_usern = 'carlin'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $mod_id = $row['mod_id'];
                $fname = $row['mod_fname'];
                $lname = $row['mod_lname'];
                $email = $row['mod_email'];
                $phone = $row['mod_phone'];
                $gender = $row['mod_gender'];
                $curuser = $row['mod_usern'];
                $curpass = $row['mod_pass'];
                $descrip = $row['mod_description'];
                $pfpurl = $row['pfp_url'];
                $bdate = date("Y-m-d", strtotime($row['mod_bdate']));
            }
        }
        ?>
        <form action="tutor-update-settings.php" method="POST">
            <div id="pfp-name">
                <img id="img-1" src="<?php echo "images/Team/$pfpurl" ?>" alt="2x2 Image">

                <div id="fullname">
                    <input id="field" type="hidden" name="form-name" value="form 1">
                    <input id="fname" required placeholder="Enter your First Name" type="text" name="fname"
                        value="<?php echo $fname?>">


                    <input id="lname" required placeholder="Enter your Last Name" type="text" name="lname"
                        value="<?php echo $lname ?>">
                </div>
            </div>

            <div class="date-gender">
                <div id="date">
                    <h5>Birth Date</h5>
                    <input type="date" id="bdate" required name="bdate" value="<?php echo $bdate ?>">
                </div>
                <div id="gender">
                    <h5>Gender</h5>
                    <select name="gender" required>
                    <option value="" <?php echo ($gender == '') ? 'selected' : ''; ?>>Please select one…</option>
                    <option value="female" <?php echo ($gender == 'female') ? 'selected' : ''; ?>>Female</option>
                    <option value="male" <?php echo ($gender == 'male') ? 'selected' : ''; ?>>Male</option>
                    <option value="other" <?php echo ($gender == 'other') ? 'selected' : ''; ?>>Male</option>
                    <option value="other">Other</option>
                    <option value="Prefer not to answer" <?php echo ($gender == 'Prefer not to answer') ? 'selected' : ''; ?>>Prefer not to Answer</option>
                    </select value="<?php echo $gender ?>">
                </div>
            </div>
            <div class="description">
                <h5>Description</h5>
                <textarea required="" cols="77" rows="6" placeholder="Short description" name="description"
                    id="description" value="<?php echo $descrip ?>"></textarea>
            </div>
            <div>
                <h1 id="login-security">Login & Security</h1>
            </div>
            <div class="email-phone">
                <div id="email">
                    <h5>Email</h5>
                    <input id="input" required placeholder="Enter your email" type="text" name="email"
                        value="<?php echo $email ?>">
                </div>
                <div id="phone">
                    <h5>Phone</h5>
                    <input id="input" required placeholder="Enter 11 digit phone number" type="tel" name="phone"
                        value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="usern-pass">
                <div id="usern">
                    <h5>Username</h5>
                    <input id="input" required placeholder="Enter your username" type="text" name="usern"
                        value="<?php echo $curuser ?>">
                </div>
                <div id="pass">
                    <h5>Password</h5>
                    <input id="input" required placeholder="Enter your password" type="password" name="pass"
                        value="<?php echo $curpass ?>">
                </div>
            </div>
            <div>
                <button id="btn-save" type="submit">Save Changes</button>
            </div>
        </form>
    </div>
</div>