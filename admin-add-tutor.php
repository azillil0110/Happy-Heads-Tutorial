<link rel="stylesheet" href="css/admin/addtutor.css">

<div class="righttop">
<p class="righttoptext">Add a Tutor</p>
</div>
<div class="contact-form">
    <h1>Personal Information</h1>
    <div class="top-container">
        
        <form action="#" method="post">
            <div id="form-1st-part">
                <div id="pfp-container">
                    <img id="img-1" src="2X2 (1).jpg" alt="2x2 Img">
                </div>
                <div>
                    <input id="field" type="hidden" name="form-name" value="form 1">
                    <div class="contact-form-field">
                        <input id="field" required placeholder="First Name" type="text" name="name" id="name">
                    </div>
                    <div class="contact-form-field">
                        <input id="field" required placeholder="Last Name" type="text" name="name" id="name">
                    </div>
                </div>
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
                <div class="rowcenter" id="textcenter">
                            <h1> Schedule</h1>
                        </div>
                        <div class="row">
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="mon" value="monday">
                            <label class="labelday" for="mon">MONDAyY</label><br>                    
                        </div>
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="tue" value="tuesday">
                            <label class="labelday" for="tue">TUESDAY</label><br>   
                        </div>
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="wed" value="wednesday">
                            <label class="labelday" for="wed">WEDNESDAY</label><br>
                        </div>
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="thu" value="thursday">
                            <label class="labelday" for="thu">THURSDAY</label><br>
                        </div>
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="fri" value="friday">
                            <label class="labelday" for="fri">FRIDAY</label><br>
                        </div>
                        <div class="col-16">
                            <input type="checkbox" id="student-schedday" name="sat" value="saturday">
                            <label class="labelday" for="sat">SATURDAY</label><br>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-mtime1" name="mtime1"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-ttime1" name="ttime1"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-wtime1" name="wtime1"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-thtime1" name="thtime1"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-ftime1" name="ftime1"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-stime1" name="stime1"></br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-mtime2" name="mtime2"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-ttime2" name="ttime2"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-wtime2" name="wtime2"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-thtime2" name="thtime2"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-ftime2" name="ftime2"></br>
                            </div>
                            <div class="col-16">
                                <input class="inputtime" type="time" id="student-stime2" name="stime2"></br>
                            </div>
                        </div>
            <div class="row">
                <div class="col-70">
                    <p> hi</p>
                </div>
                <div class="col-30">
                    <button class="btn" id="btn-save">Add</button>
                </div>
            </div>  
        </form>
    </div>
</div>
       
<script src="javascript/admin.js"></script>





