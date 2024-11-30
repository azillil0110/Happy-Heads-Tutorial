<link rel="stylesheet" href="css/admin/admin-tutor.css">
<div class="overlay" id="scheduleOverlay">
    <div class="overlay-content">
    <h1>Personal Information</h1>
    <div class="top-container">
            <div id="form-1st-part">
                <div>
                    <input id="field" type="hidden" name="form-name" value="form 1">
                    <div class="contact-form-field">
                        <input type="text" name="fname" id="modfname" readonly>
                    </div>
                    <div class="contact-form-field">
                        <input type="text" name="lname" id="modlname" readonly>
                    </div>
                </div>
            </div>
            <div class="date-gender">
                <div id="date">
                    <h5>Birth Date</h5>
                    <input type="text" id="mod-date" name="bdate" readonly>
                </div>
                <div id="gender">
                    <h5>Gender</h5>
                    <input type="text" id="mod-gender" name="gender" readonly>
                </div>
                <div id="acc_type">
                    <h5>Account Type</h5>
                    <input name="acctype" type="text" id="acc-type" readonly>
                </div>
            </div>
        
            <div class="description">
                <h5>Description</h5>
                <input type="text" cols="77" rows="6" name="message" id="message" readonly>
            </div>
            <div>
                <h1 id="login-security">Login & Security</h1>
            </div>
            <div class="email-phone">
                <div id="email">
                    <h5>Email</h5>
                    <input id="mod-email" type="text" name="email" readonly>
                </div>
                <div id="phone">
                    <h5>Phone</h5>
                    <input id="mod-phone" type="tect" name="phone" readonly>
                </div>
            </div>
            <hr id="line-enroll">
                <div class="btn">
                <button class="save-btn">Save Changes</button>
                <button class="close-btn" onclick="closeOverlay()">Close</button>
                </div>
        </div>
    </div>
</div>