<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin/admin-students.css">
    <title>Student Information</title>
</head>
<body>
    <div class="overlay" id="scheduleOverlay">
        <form action="admin-edit-student.php" class="overlay-content" method="POST">
            <h2>Student Information</h2>
            <div class="row">
                <div class="col-100">
                    <label class="textlabel" for="stud_id">STUDENT ID</label>
                    <input type="text" id="studentid" name="studentid" class="inputtext" readonly>
                </div>
            </div>
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
                    <label class="textlabel" id="nname" for="student-nname">NICKNAME</label></br>
                    <input class="inputtext" type="text" id="student-nname" name="student-nickname" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-70" id="subrow">
                    <div class="col-50">
                        <label class="textlabel" for="student-bday">DATE OF BIRTH</label>
                        <input class="inputtext" type="text" id="student-bday" name="student-birthday" readonly></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="student-age">AGE</label>
                        <input class="inputtext" type="text" id="student-age" name="student-age" readonly><br>
                    </div>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="gender">GENDER</label>
                    <input class="inputtext" type="text" id="male" name="gender" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-70">
                    <label class="textlabel" for="school">SCHOOL</label>
                    <input class="inputtext" type="text" id="school" name="school" readonly></br>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="level">GRADE LEVEL</label>
                    <input class="inputtext" type="text" id="grade-level" name="grade-level" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-70">
                    <label class="textlabel" for="homeadd">HOME ADDRESS</label>
                    <input class="inputtext" type="text" id="homeadd" name="homeaddress" readonly></br>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="level">TUTOR</label>
                    <select name="tutor" id="tutor" disabled>
                        <option value="tutor">Tutor</option>
                        <option value="anne-erica">Ann Erica</option>
                        <option value="catherine">Catherine</option>
                        <option value="carlin">Carlin</option>
                        <option value="bless">Bless</option>
                        <option value="jillen">Jillen</option>
                    </select></br>
                </div>
            </div>
            <hr id="line-enroll">
            <h2>Parent/Guardian Information</h2>
            <div class="row">
                <div class="col-50">
                    <div class="col-100">
                        <label class="textlabel" for="parent-name">FULL NAME</label>
                        <input class="inputtext" type="text" id="parent-name" name="students-parent-name" readonly></br>
                    </div>
                </div>
                <div class="col-50">
                    <label class="textlabel" for="sp-relationship1">RELATIONSHIP</label>
                    <input class="inputtext" type="text" id="sp-relationship1" name="parent-relationship1" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label class="textlabel" for="sp-email1">E-MAIL</label>
                    <input class="inputtext" type="email" id="sp-email1" name="parent-email1" readonly></br>
                </div>
                <div class="col-50">
                    <label class="textlabel" for="sp-connum1">CONTACT NUMBER</label>
                    <input class="inputtext" type="text" id="sp-connum1" name="parent-connum1" readonly></br>
                </div>
            </div>
            <hr id="line-enroll">
            <h2>Schedule</h2>
            <div class="row">
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="mon" value="monday" disabled>
                    <label class="labelday" id="day" for="mon">MONDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="tue" value="tuesday" disabled>
                    <label class="labelday" id="day" for="tue">TUESDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="wed" value="wednesday" disabled>
                    <label class="labelday" id="day" for="wed">WEDNESDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="thu" value="thursday" disabled>
                    <label class="labelday" id="day" for="thu">THURSDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="fri" value="friday" disabled>
                    <label class="labelday" id="day" for="fri">FRIDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="student-schedday" name="sat" value="saturday" disabled>
                    <label class="labelday" id="day" for="sat">SATURDAY</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-mtime1" name="mtime1" readonly></br>
                </div>
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-ttime1" name="ttime1" readonly></br>
                </div>
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-wtime1" name="wtime1" readonly></br>
                </div>
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-thtime1" name="thtime1" readonly></br>
                </div>
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-ftime1" name="ftime1" readonly></br>
                </div>
                <div class="col-16">
                    <input class="inputtime" type="time" id="student-stime1" name="stime1" readonly></br>
                </div>
            </div>
            <hr id="line-enroll">
            <div class="btn">
                <button type="button"class="edit-btn" onclick="toggleEdit()">Edit</button>
                <button type="submit"class="save-btn">Save Changes</button>
                <button type="button" class="close-btn" onclick="closeOverlay()">Close</button>
            </div>
        </form><!-- end of the div can be form-->
    </div>

    <script src="javascript/toggleread.js"></script>
</body>
</html>
