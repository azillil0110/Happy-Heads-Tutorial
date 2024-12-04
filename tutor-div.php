<link rel="stylesheet" href="css/admin/--admin-tutor.css">
<div class="overlay" id="tutorinfo-overlay">
<?php
    include_once 'includes/dbh.inc.php';
?>
    <div class="overlay-content">
        <div class="row">
            <div class="col-80">

            </div>
            <div class="col-20">
                <button class="sched-btn" onclick="showTutorSchedule()">Schedule →</button>
            </div>
        </div>
        <form action="tutor-update.php" class="tutorform" method="POST">
            <h1>Personal Information</h1>
            <div class="top-container">
                <div id="form-1st-part">
                    <div>
                        <input id="field" type="hidden" name="form-name" value="form 1">
                        <div class="contact-form-field">
                            <input class="inputtype" type="hidden" name="modid" id="modid" readonly>
                        </div>
                        <div class="contact-form-field">
                            <input class="inputtype" type="text" name="fname" id="fname" readonly>
                        </div>
                        <div class="contact-form-field">
                            <input class="inputtype" type="text" name="lname" id="lname" readonly>
                        </div>
                    </div>
                </div>
                <div class="date-gender">
                    <div class="col-33" id="date">
                        <h5>Birth Date</h5>
                        <input class="inputtype" type="date" id="bdate" name="bdate" readonly>
                    </div>
                    <div class="col-33" id="gender">
                        <h5>Gender</h5>
                        <input class="inputtype" type="text" id="mgender" name="mgender" readonly>
                    </div>
                    <div class="col-33" id="acc_type">
                        <h5>Account Type</h5>
                        <input class="inputtype" name="acctype" type="text" id="acctype" readonly>

                    </div>
                </div>

                <div class="description">
                    <h5>Description</h5>
                    <input class="inputtype" type="text" name="message" id="message" readonly>
                </div>
                <div>
                    <h1 id="login-security">Login & Security</h1>
                </div>
                <div class="email-phone">
                    <div class="col-50" id="modemail">
                        <h5>Email</h5>
                        <input class="inputtype" id="email" type="text" name="email" readonly>
                    </div>
                    <div class="col-50" id="modphone">
                        <h5>Phone</h5>
                        <input class="inputtype" id="phone" type="tel" name="phone" readonly>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" class="remove-btn" name="action" value="remove">Remove</button>
                    <button type="button" class="edit-btn" onclick="EditTutor()">Edit</button>
                    <button type="submit" class="save-btn" name="action" value="save">Save Changes</button>
                    <button type="button" class="close-btn" onclick="closeModDetails()">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="overlay" id="tutorsched-overlay">
    <div id="overlay-content2">
        <div id="schedule-content">
                
    </div>
</div>