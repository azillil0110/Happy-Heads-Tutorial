<link rel="stylesheet" href="css/admin/addtutor.css">

<div class="righttop">
<p class="righttoptext">Add a Tutor</p>
</div>
<div class="contact-form">
    <h1>Personal Information</h1>
    <div class="top-container">
        <div>
            <img id="img-1" src="2X2 (1).jpg" alt="2x2 Img">
        </div>
        <form action="#" method="post">
            <input id="field" type="hidden" name="form-name" value="form 1">
            <div class="contact-form-field">
                <input id="field" required placeholder="First Name" type="text" name="name" id="name">
            </div>
            <div class="contact-form-field">
                <input id="field" required placeholder="Last Name" type="text" name="name" id="name">
            </div>
            <div class="date-gender">
                <div id="date">
                    <h5>Birth Date</h5>
                    <input type="date" id="date" required>
                </div>
                <div id="gender">
                    <h5>Gender</h5>
                    <select name="gender" required>
                        <option value="">Please select one…</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                        <option value="Prefer not to answer">Perfer not to Answer</option>
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
                <div id="email">
                    <h5>Email</h5>
                    <input id="input" required placeholder="Enter email" type="text" name="email">
                </div>
                <div id="phone">
                    <h5>Phone</h5>
                    <input id="input" required placeholder="Enter 11 digit phone number" type="tel" name="phone">
                </div>
            </div>
            <div class="usern-pass">
                <div id="usern">
                    <h5>Username</h5>
                    <input id="input" required placeholder="Enter username" type="text" name="usern">
                </div>
                <div id="pass">
                    <h5>Password</h5>
                    <input id="input" required placeholder="Enter password" type="password" name="pass">
                    <p>change password</p>
                </div>
            </div>
            <div>
                <button id="btn-save">Add</button>
            </div>  
        </form>
    </div>
</div>
       
<script src="javascript/admin.js"></script>





