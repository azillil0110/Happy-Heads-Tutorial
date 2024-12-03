<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="css/about-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/enroll-form.css">
    <link rel="stylesheet" href="css/olay.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <?php include_once 'includes/dbh.inc.php' ?>
</head>

<body>
    <?php include('includes/header.php') ?>
    <script src="javascript/sched.js"></script>

    <main>

        <div id="enroll-banner">
            <h1 class="largest-font txt-shadow">ENROLLMENT FORM</h1>
            <h2 class="txt-shadow">APPLY FOR YOUR CHILDREN NOW!</h5>
        </div>

        <div id="body">
            <form method="POST" action="enrollment-backend.php">
                <div class="row">
                    <div class="col-70" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="studentfname">FIRST NAME</label>
                            <input type="text" id="studentfname" name="student-firstname"
                                placeholder="Input student's First Name" class="inputtext" required>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="studentlname">LAST NAME</label>
                            <input type="text" id="studentlname" name="student-lastname"
                                placeholder="Input student's Last Name" class="inputtext" required>
                        </div>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="student-nname">NICKNAME</label></br>
                        <input class="inputtext" type="text" id="student-nname" name="student-nickname"
                            placeholder="Enter nickname" required></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-70" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="student-bday">DATE OF BIRTH</label></br>
                            <input class="inputtext" type="date" id="student-bday" name="student-birthday"
                                required></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="student-age">AGE</label></br>
                            <input class="inputtext" type="number" id="student-age" name="student-age"
                                placeholder="Enter your age" required></br>
                        </div>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="gender">GENDER</label></br>
                        <div class="option" id="studentgender-option">
                            <input class="radiobtn" type="radio" id="male" name="gender" value="male">
                            <label class="btnlabel" id="student-malelabel" for="male">Male</label><br>
                            <input class="radiobtn" type="radio" id="female" name="gender" value="female">
                            <label class="btnlabel" for="female">Female</label>
                        </div>
                        <script>
                            document.getElementById('male').checked = true;
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-70">
                        <label class="textlabel" for="school">SCHOOL</label></br>
                        <input class="inputtext" type="text" id="school" name="school" placeholder="Name of School"
                            required></br>
                    </div>
                    <div class="col-30">
                        <label class="textlabel" for="level">GRADE LEVEL</label></br>
                        <select name="Grade" id="grade">
                            <option value="playgroup">Playgroup</option>
                            <option value="prenursery">Pre-nursery</option>
                            <option value="kinder">Kindergarten</option>
                            <option value="g1">Grade 1</option>
                            <option value="g2">Grade 2</option>
                            <option value="g3">Grade 3</option>
                            <option value="g4">Grade 4</option>
                            <option value="g5">Grade 5</option>
                            <option value="g6">Grade 6</option>
                            <option value="hs">Junior Highschool</option>
                        </select> </br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <label class="textlabel" for="homeadd">HOME ADDRESS</label></br>
                        <input class="inputtext" type="text" id="homeadd" name="homeaddress"
                            placeholder="Enter your Address" required></br>
                    </div>
                </div>
                <hr id="line-enroll">
                <div class="row">
                    <p class="subtitle" id="parentinfo-title">PARENT/ GUARDIAN INFORMATION</p>
                </div>
                <div class="row">
                    <div class="col-50" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="parent-lname1">LAST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-lname1" name="students-parent-lname1"
                                placeholder="Enter Last Name" required></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="parent-fname1">FIRST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-fname1" name="students-parent-fname1"
                                placeholder="Enter First Name" required></br>
                        </div>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-relationship1">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="sp-relationship1" name="parent-relationship1"
                            placeholder="Enter Relationship" required></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="sp-email1">E-MAIL</label></br>
                        <input class="inputtext" type="email" id="sp-email1" name="parent-email1"
                            placeholder="Enter E-mail Address" required></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-connum1">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="sp-connum1" name="parent-connum1"
                            placeholder="Enter Contact Number" required></br>
                    </div>
                </div>
                <hr id="line-invi">
                <div class="row">
                    <div class="col-50" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="parent-lname2">LAST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-lname2" name="students-parent-lname2"
                                placeholder="Enter Last Name"></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="parent-fname2">FIRST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-fname2" name="students-parent-fname2"
                                placeholder="Enter First Name"></br>
                        </div>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-relationship2">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="sp-relationship2" name="parent-relationship2"
                            placeholder="Enter Relationship"></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="sp-email2">E-MAIL</label></br>
                        <input class="inputtext" type="email2" id="sp-email" name="parent-email2"
                            placeholder="Enter E-mail Address"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-connum2">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="sp-connum2" name="parent-connum2"
                            placeholder="Enter Contact Number"></br>
                    </div>
                </div>
                <hr id="line-invi">
                <div class="row">
                    <div class="col-70">
                        <label class="lightlabel" for="student-ques1">Is your child taking any medications or has any
                            medical issues that we should know about? like allergies?</label></br>
                    </div>
                    <div class="col-30">
                        <div class="option" id="student-ques1-option">
                            <input class="radiobtn" type="radio" id="student-ques1" name="yesno" value="yes">
                            <label class="btnlabel" for="student-ques1">Yes</label><br>
                            <input class="radiobtn" type="radio" id="student-ques2" name="yesno" value="no">
                            <label class="btnlabel" for="student-ques2">No</label>
                        </div></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <input class="inputtext" type="text" id="student-ques1-blank" name="student-medicalblank"
                            placeholder="Enter text" disabled></br>
                    </div>
                </div>
                <script>
                    const yesRadio = document.getElementById('student-ques1');
                    const noRadio = document.getElementById('student-ques2');
                    const medicalInput = document.getElementById('student-ques1-blank');

                    yesRadio.addEventListener('change', function () {
                        if (yesRadio.checked) {
                            medicalInput.disabled = false;
                            medicalInput.required = true;
                        }
                    });

                    noRadio.addEventListener('change', function () {
                        if (noRadio.checked) {
                            medicalInput.disabled = true;
                            medicalInput.required = false;
                            medicalInput.value = '';
                        }
                    });
                </script>
                <div class="row">
                    <div class="col-70">
                        <label class="lightlabel" for="student-pic-consent">Can your child have his/her picture taken or
                            displayed? &lpar;for promotional purposes of the center&rpar;</label></br>
                    </div>
                    <div class="col-30">
                        <div class="option" id="student-ques2-option">
                            <input class="radiobtn1" type="radio" id="student-pic-consent" name="yesno_pic" value="yes">
                            <label class="btnlabel1" for="yes">Yes</label><br>
                            <input class="radiobtn1" type="radio" id="student-pic-consent" name="yesno_pic" value="no">
                            <label class="btnlabel1" for="no">No</label>
                        </div></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-40">
                        <label class="lightlabel" for="childinfo">What would you like me to know about your
                            child?</label></br>
                    </div>
                    <div class="col-602">
                        <input class="inputtext" type="text" id="childinfo" name="childinformation"
                            placeholder="Enter Text"></br>
                    </div>
                </div>
                <hr id="line-enroll">
                <div class="row">
                    <label class="textlabel" for="schedlabel">PICK UP/ DROP OFF SCHEDULE</label></br>
                </div>
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
                        <input class="inputtime" type="time" id="student-mtime1" name="mtime1" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-ttime1" name="ttime1" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-wtime1" name="wtime1" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-thtime1" name="thtime1" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-ftime1" name="ftime1" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-stime1" name="stime1" disabled></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-mtime2" name="mtime2" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-ttime2" name="ttime2" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-wtime2" name="wtime2" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-thtime2" name="thtime2" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-ftime2" name="ftime2" disabled></br>
                    </div>
                    <div class="col-16">
                        <input class="inputtime" type="time" id="student-stime2" name="stime2" disabled></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-40" id="authorizeddiv">
                        <label class="textlabel" for="authname">AUTHORIZED INDIVIDUALS</label></br>
                        <label class="lightlabel-small" for="authname-inst">The following individuals are hereby
                            approved by the Parent to pick up the child.</label>
                        <input class="inputtext" type="text" id="authindiv1" name="authindiv1" placeholder="Fullname"></br>
                        <input class="inputtext" type="text" id="authindiv2" name="authindiv2"
                            placeholder="Fullname"></br>
                    </div>
                    <div class="col-60" id="subrow">
                        <div class="col-40">
                            <label class="textlabel" for="rel">RELATIONSHIP</label></br></br>
                            <input class="inputtext" type="text" id="rel3" name="relationship1"
                                placeholder="Enter relationship"></br>
                            <input class="inputtext" type="text" id="rel4" name="relationship2"
                                placeholder="Enter relationship"></br>
                        </div>
                        <div class="col-60">
                            <label class="textlabel" for="connum">CONTACT NUMBER</label></br></br>
                            <input class="inputtext" type="text" id="connum3" name="contactnumber1"
                                placeholder="Enter Contact Number"></br>
                            <input class="inputtext" type="text" id="connum4" name="contactnumber2"
                                placeholder="Enter Contact Number"></br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-40">
                    </div>
                    <div class="col-60" id="subrow">
                        <div class="col-60">
                        </div>
                        <div class="col-40">
                            <button type="submit" class="btnSUBMIT">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p class="modal-text">Registration Details Sent!</p>
                <p class="modal-text2">Kindly wait for the confirmation.</p>
            </div>
        </div>
    </main>

    </div>
    </section>

    <?php include('includes/footer.php') ?>
</body>
<script src="javascript/overlay.js"></script>
<script src="javascript/sched.js"></script>

</html>