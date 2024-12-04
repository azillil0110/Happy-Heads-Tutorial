<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tutor/student.css">
    <title>Student Information</title>
</head>

<body>
    <div class="overlay" id="studentInfo">
        <form action="tutor-edit-student.php" class="overlay-content" method="POST" enctype="multipart/form-data">
            <h2>Student Information</h2>
            <div class="row" id="pfpup">
                <div id="pfpup">
                    <div id="uploadbox">
                        <label for="fileInput">
                            <p class="uploadtext">Change Profile</p>
                        </label>
                        <input type="file" accept="image/jpeg, image/jpg, image/png" id="fileInput" name="studImage"
                            style="display:none">
                        <input type="text" id="oldfilename" name="oldfilename" value="file_name_here" style="display: none;">
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const fileInput = document.getElementById('fileInput');
                        const filenameInput = document.getElementById('filename');
                        const uploadBox = document.getElementById('uploadbox');

                        fileInput.addEventListener('change', function (event) {
                            const file = event.target.files[0];

                            if (file) {
                                // Update filename in the hidden input
                                filenameInput.value = file.name;

                                // Optional: Display the filename in the console for debugging
                                console.log('File name:', file.name);

                                // Display the image as background (if needed)
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    uploadBox.style.backgroundImage = `url('${e.target.result}')`;
                                    uploadBox.style.backgroundSize = 'cover';
                                    uploadBox.style.backgroundPosition = 'center';

                                    // Optional: Hide the text once the image is loaded
                                    const uploadText = uploadBox.querySelector('.uploadtext');
                                    if (uploadText) uploadText.style.display = 'none';
                                };
                                reader.readAsDataURL(file);
                            } else {
                                console.warn('No file selected');
                            }
                        });
                    });
                </script>


                <div class="col-100" style="display: none;">
                    <label class="textlabel" for="stud_id">STUDENT ID</label>
                    <input type="text" id="studentid" name="studentid" class="inputtext" readonly>
                </div>

            </div>
            <div class="row">
                <div class="col-70" id="subrow">
                    <div class="col-50">
                        <label class="textlabel" for="studentfname">FIRST NAME</label>
                        <input type="text" id="studentfname" name="student-firstname"
                            placeholder="Input student's First Name" class="inputtext" readonly>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="studentlname">LAST NAME</label>
                        <input type="text" id="studentlname" name="student-lastname"
                            placeholder="Input student's Last Name" class="inputtext" readonly>
                    </div>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="student-nname">NICKNAME</label></br>
                    <input class="inputtext" type="text" id="student-nname" name="student-nickname"
                        placeholder="Enter nickname" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-70" id="subrow">
                    <div class="col-50">
                        <label class="textlabel" for="student-bday">DATE OF BIRTH</label></br>
                        <input class="inputtext" type="date" id="student-bday" name="student-birthday" id="student-bday" required></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="student-age">AGE</label></br>
                        <input class="inputtext" type="number" id="student-age" name="student-age"
                            placeholder="Enter your age" readonly></br>
                    </div>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="gender">GENDER</label></br>
                    <select name="gender" id="student-gender" disabled>
                        <option disabled value="">Please select one…</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Other">Other</option>
                        <option value="Prefer not to answer">Prefer not to Answer</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-70">
                    <label class="textlabel" for="school">SCHOOL</label></br>
                    <input class="inputtext" type="text" id="school" name="school" placeholder="Name of School"
                        readonly></br>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="level">GRADE LEVEL</label></br>
                    <select name="Grade" id="grade" disabled>
                        <option disabled value="">Please select one…</option>
                        <option value="Playgroup">Playgroup</option>
                        <option value="Pre-Nursery">Pre-Nursery</option>
                        <option value="Kindergarten">Kindergarten</option>
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Junior Highschool">Junior Highschool</option>
                    </select> </br>
                </div>
            </div>
            <div class="row">
                <div class="col-70">
                    <label class="textlabel" for="homeadd">HOME ADDRESS</label></br>
                    <input class="inputtext" type="text" id="homeadd" name="homeaddress"
                        placeholder="Enter your Address" readonly></br>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="tutor">TUTOR</label></br>
                    <select name="Tutor" id="tutor">
                        <option disabled value="">Please select one…</option>
                        <option value="2">Sweden</option>
                        <option value="3">Ann Erica</option>
                        <option value="4">Catherine</option>
                        <option value="5">Carlin</option>
                        <option value="6">Bles</option>
                        <option value="7">Jillen</option>
                    </select> </br>
                </div>
            </div>
            <hr id="line-enroll">
            <div class="row">
                <p class="textlabel" id="parentinfo-title"> PARENT/ GUARDIAN INFORMATION </p>
            </div>
            <div class="row">
                <div class="col-50" id="subrow">
                    <div class="col-100">
                    <label class="textlabel" for="parent-lname1">FULL NAME</label></br>
                        <input class="inputtext" type="text" id="parent_fullname1" name="students-full-name"
                        placeholder="Enter Full Name" required></br>
                </div>
                </div>
                <div class="col-50">
                    <label class="textlabel" for="sp-relationship1">RELATIONSHIP</label></br>
                    <input class="inputtext" type="text" id="sp-relationship1" name="parent-relationship1"
                        placeholder="Enter Relationship" readonly></br>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label class="textlabel" for="sp-email1">E-MAIL</label></br>
                    <input class="inputtext" type="email" id="sp-email1" name="parent-email1"
                        placeholder="Enter E-mail Address" readonly></br>
                </div>
                <div class="col-50">
                    <label class="textlabel" for="sp-connum1">CONTACT NUMBER</label></br>
                    <input class="inputtext" type="text" id="sp-connum1" name="parent-connum1"
                        placeholder="Enter Contact Number" readonly></br>
                </div>
            </div>
            <hr id="line-invi">
            <div class="row">
                <div class="col-50" id="subrow">
                    <div class="col-100">
                        <label class="textlabel" for="parent-lname1">FULL NAME</label></br>
                        <input class="inputtext" type="text" id="parent_fullname2" name="students-full-name"
                            placeholder="Enter Full Name" required></br>
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
                    <input class="inputtext" type="email2" id="sp-email2" name="parent-email2"
                        placeholder="Enter E-mail Address" readonly></br>
                </div>
                <div class="col-50">
                    <label class="textlabel" for="sp-connum2">CONTACT NUMBER</label></br>
                    <input class="inputtext" type="text" id="sp-connum2" name="parent-connum2"
                        placeholder="Enter Contact Number" readonly></br>
                </div>
            </div>
            <hr id="line-invi">
            <div class="row">
                <div class="col-70">
                    <label class="lightlabel" for="student-ques1-option">Is your child taking any medications or has any
                        medical issues that we should know about? like allergies?</label></br>
                </div>
                <div class="col-30">
                <div class="option" id="student-ques1-option">
                        <input class="radiobtn1" type="radio" id="meds1" name="yesno_meds">
                        <label class="btnlabel1" for="yes">Yes</label><br>
                        <input disabled class="radiobtn1" type="radio" id="meds2" name="yesno_meds">
                        <label class="btnlabel1" for="no">No</label>
                    </div></br>
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <input class="inputtext" type="text" id="student-ques1-blank" name="student-medicalblank"
                        placeholder="Enter text" readonly></br>
                </div>
            </div>
            <script>
                const yesRadio = document.getElementById('student-ques1');
                const noRadio = document.getElementById('student-ques2');
                const medicalInput = document.getElementById('student-ques1-blank');

                yesRadio.addEventListener('change', function () {
                    if (yesRadio.checked) {
                        medicalInput.disabled = false;
                    }
                });

                noRadio.addEventListener('change', function () {
                    if (noRadio.checked) {
                        medicalInput.disabled = true;
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
                        <input disabled class="radiobtn2" type="radio" id="student-pic-consent1" name="yesno_pic" value="yes">
                        <label class="btnlabel2" for="yes">Yes</label><br>
                        <input disabled class="radiobtn2" type="radio" id="student-pic-consent2" name="yesno_pic" value="no">
                        <label class="btnlabel2" for="no">No</label>
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
                        placeholder="Enter Text" readonly></br>
                </div>
            </div>
            <hr id="line-enroll">
            <div class="row">
                <label class="textlabel" for="schedlabel">PICK UP/ DROP OFF SCHEDULE</label></br>
            </div>
            <div class="row">
                <div class="col-16">
                    <input type="checkbox" id="monday" name="mon" value="monday" disabled>
                    <label class="labelday" for="mon">MONDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="tuesday" name="tue" value="tuesday" disabled>
                    <label class="labelday" for="tue">TUESDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="wednesday" name="wed" value="wednesday" disabled>
                    <label class="labelday" for="wed">WEDNESDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="thursday" name="thu" value="thursday" disabled>
                    <label class="labelday" for="thu">THURSDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="friday" name="fri" value="friday" disabled>
                    <label class="labelday" for="fri">FRIDAY</label><br>
                </div>
                <div class="col-16">
                    <input type="checkbox" id="saturday" name="sat" value="saturday" disabled>
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
                    <input class="inputtext" type="text" id="authindiv1" name="authindiv" placeholder="Fullname">
                    </br>
                    <input class="inputtext" type="text" id="authindiv2" name="authindiv" placeholder="Fullname">
                    </br>
                </div>
                <div class="col-60" id="subrow">
                    <div class="col-40">
                        <label class="textlabel" for="rel">RELATIONSHIP</label></br></br>
                        <input class="inputtext" type="text" id="rel3" name="relationship"
                            placeholder="Enter relationship"></br>
                        <input class="inputtext" type="text" id="rel4" name="relationship"
                            placeholder="Enter relationship"></br>
                    </div>
                    <div class="col-60">
                        <label class="textlabel" for="connum">CONTACT NUMBER</label></br></br>
                        <input class="inputtext" type="text" id="connum3" name="contactnumber"
                            placeholder="Enter Contact Number"></br>
                        <input class="inputtext" type="text" id="connum4" name="contactnumber"
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
            <div class="btn">
                <button type="button"class="edit-btn" onclick="editToggle()">Edit</button>
                <button type="submit"class="save-btn">Save Changes</button>
                <button type="button" class="close-btn" onclick="closeOverlay()">Close</button>
            </div>
        </form><!-- end of the div can be form-->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p class="modal-text">Adding User Successful</p>
                <p class="modal-text2">username and password are default</p>
            </div>
        </div>
        <script src="javascript/overlay.js"></script>
    </div>

    <script src="javascript/toggleread.js"></script>
</body>

</html>