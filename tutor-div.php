<link rel="stylesheet" href="css/admin/admin-tutor.css">
<div class="overlay" id="tutorinfo-overlay">
    <div class="overlay-content">
    <h1>Personal Information</h1>
    <div class="top-container">
            <div id="form-1st-part">
                <div>
                    <input id="field" type="hidden" name="form-name" value="form 1">
                    <div class="contact-form-field">
                        <input type="text" name="fname" id="fname" readonly>
                    </div>
                    <div class="contact-form-field">
                        <input type="text" name="lname" id="lname" readonly>
                    </div>
                </div>
            </div>
            <div class="date-gender">
                <div class="col-33" id="date">
                    <h5>Birth Date</h5>
                    <input type="text" id="date" name="bdate" readonly>
                </div>
                <div class="col-33" id="gender">
                    <h5>Gender</h5>
                    <input type="text" id="gender" name="gender" readonly>
                </div>
                <div class="col-33" id="acc_type">
                    <h5>Account Type</h5>
                    <input name="acctype" type="text" id="acctype" readonly>
                </div>
            </div>
        
            <div class="description">
                <h5>Description</h5>
                <input type="text"name="message" id="message" readonly>
            </div>
            <div>
                <h1 id="login-security">Login & Security</h1>
            </div>
            <div class="email-phone">
                <div class="col-50" id="modemail">
                    <h5>Email</h5>
                    <input id="email" type="text" name="email" readonly>
                </div>
                <div class="col-50" id="modphone">
                    <h5>Phone</h5>
                    <input id="phone" type="tect" name="phone" readonly>
                </div>
            </div>
                <div class="btn">
                <button class="save-btn">Save Changes</button>
                <button class="close-btn" onclick="closeModDetails()">Close</button>
                </div>
        </div>
    </div>
</div>