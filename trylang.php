<link rel="stylesheet" href="css/admin/admin-students.css">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
<div class="overlay" id="scheduleOverlay">
    <div class="overlay-content">
        <h2>Student Information</h2>
                <div class="row">
                    <div class="col-70" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="studentfname">FIRST NAME</label>
                            <input type="text" id="studentfname" name="student-firstname" class="inputtext" readonly>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="studentlname">LAST NAME</label>
                            <input type="text" id="studentlname" name="student-lastname" class="inputtext" readonly>
                        </div>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="student-nname">NICKNAME</label></br>
                        <input class="inputtext" type="text" id="student-nname" name="student-nickname" readonly></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-70" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="student-bday">DATE OF BIRTH</label></br>
                            <input class="inputtext" type="text" id="student-bday" name="student-birthday" readonly></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="student-age">AGE</label></br>
                            <input class="inputtext" type="text" id="student-age" name="student-age" readonly><br>
                        </div>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="gender">GENDER</label></br>
                        <input class="inputtext" type="text" id="male" name="gender" readonly></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-70">
                        <label class="textlabel" for="school">SCHOOL</label></br>
                        <input class="inputtext" type="text" id="school" name="school" readonly></br>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="level">GRADE LEVEL</label></br>
                        <input class="inputtext" type="text" id="grade-level" name="greade-level" readonly></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-70">
                        <label class="textlabel" for="homeadd">HOME ADDRESS</label></br>
                        <input class="inputtext" type="text" id="homeadd" name="homeaddress" readonly></br>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="level">TUTOR</label></br>
                        <select name="Grade" id="grade">
                          <option value="tutor">Tutor</option>
                          <option value="anne-erica">Ann Erica</option>
                          <option value="catherine">Catherine</option>
                          <option value="carlin">Carlin</option>
                          <option value="bless">Bless</option>
                          <option value="jillen">Jillen</option>
                        </select> </br>
                    </div>
                </div>
                <hr id="line-enroll">
                <h2>Parent/Guardian Information</h2>
                <div class="row">
                    <div class="col-50" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="parent-lname1">LAST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-lname1" name="students-parent-lname1" readonly></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="parent-fname1">FIRST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-fname1" name="students-parent-fname1" readonly></br>
                        </div>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-relationship1">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="sp-relationship1" name="parent-relationship1" readonly></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="sp-email1">E-MAIL</label></br>
                        <input class="inputtext" type="email" id="sp-email1" name="parent-email1" readonly></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-connum1">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="sp-connum1" name="parent-connum1" readonly></br>
                    </div>
                </div>
                <hr id="line-enroll">
                <h2>Schedule</h2>
                    <div class="row">
                    <div class="col-16">
                        <input type="checkbox" id="student-schedday" name="mon" value="monday">
                        <label class="labelday" for="mon">MONDAY</label><br>                    
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
                    <div class="col-40">
                    </div>
                    <div class="col-60" id="subrow">
                        <div class="col-60">
                        </div>
                    </div>
                </div>
                <hr id="line-enroll">
                <button class="close-btn" onclick="toggleOverlay()">Close</button>
        </div>
    </div>
</div>