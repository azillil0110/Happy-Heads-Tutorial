<link rel="stylesheet" href="css/admin/-addtutor-.css">

<div class="righttop">
<p class="righttoptext">Add a User</p>
</div>
<div class="contact-form">
    <h1>Personal Information</h1>
    <div class="top-container">
        
        <form action="includes/insert-user.php" method="POST">
            <div id="form-1st-part">
                <div>
                    <input id="field" type="hidden" name="form-name" value="form 1">
                    <div class="contact-form-field">
                        <input required placeholder="First Name" type="text" name="fname" id="fname">
                    </div>
                    <div class="contact-form-field">
                        <input required placeholder="Last Name" type="text" name="lname" id="lname">
                    </div>
                </div>
            </div>
            <div class="date-gender">
                <div id="date">
                    <h5>Birth Date</h5>
                    <input type="date" id="date" required name="bdate">
                </div>
                <div id="gender">
                    <h5>Gender</h5>
                    <select name="gender" id="gender" required>
                        <option value="">Please select one…</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                        <option value="Prefer not to answer">Perfer not to Answer</option>
                    </select>
                </div>
                <div id="acc_type">
                    <h5>Account Type</h5>
                    <select name="acctype" id="acctype" required>
                        <option value="">Please select one…</option>
                        <option value="Tutor">Tutor</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
            </div>
        
            <div class="description">
                <h5>Description</h5>
                <textarea required ="" cols="77" rows="6" placeholder="Short description" name="message" id="message" required></textarea>
            </div>
            <div>
                <h1 id="login-security">Login & Security</h1>
            </div>
            <div class="email-phone">
                <div id="modemail">
                    <h5>Email</h5>
                    <input id="email" required placeholder="Enter email" type="text" name="email">
                </div>
                <div id="modphone">
                    <h5>Phone</h5>
                    <input id="phone" required placeholder="Enter 11 digit phone number" type="tel" name="phone">
                </div>
            </div>
            <div class="usern-pass">
                <div class="col-30">
                    <button class="btn" id="btn-save">Add Tutor</button>
                </div>
            </div>  
        </form>
    </div>
    <div id="successModal" class="modal">
            <div class="modal-content">
                <p class="modal-text">Adding User Successful</p>
                <p class="modal-text2">username and password are default</p>
            </div>
        </div>
    <script src="javascript/overlay.js"></script>
</div>
       
<script src="javascript/admin.js"></script>





