<div class="righttop">
    <p class="righttoptext">Add a Student</p>
</div>
<div class="rightbot">
    <div class="rowcenter" id="textcenter">
        <p class="righttitletext"> Personal Information</p>
    </div>
    <div class="row">
        <div class="leftbottop">
            <div class="uploadbox">
                <i class="fa-solid fa-upload uploadicon"></i>
                <p class="uploadtext">Upload<br>Images</p>
            </div>
        </div>
        <div class="rightbottop">
            <form class="topform">      
                <div class="row">
                    <div class="col-50">
                        <input type="text" id="studentfname" name="student-firstname" placeholder="Input student's First Name" class="inputtext">
                    </div>
                    <div class="col-50">
                        <input type="text" id="studentlname" name="student-lastname" placeholder="Input student's Last Name" class="inputtext">
                    </div>
                </div>               

                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="student-nname">NICKNAME</label></br>
                        <input class="inputtext" type="text" id="student-nname" name="student-nickname" placeholder="Enter nickname"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="gender">GENDER</label></br>
                        <div class="option" id="studentgender-option">
                            <input class="radiobtn" type="radio" id="studentgender-option" name="gender" value="male">
                            <label class="btnlabel" id="student-malelabel" for="male">Male</label><br>
                            <input class="radiobtn" type="radio" id="studentgender-option" name="gender" value="female">
                            <label class="btnlabel" for="female">Female</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="student-age">AGE</label></br>
                        <input class="inputtext" type="number" id="student-age" name="student-age-" placeholder="Enter your age"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="student-selectdate"">DATE OF BIRTH</label></br>
                        <input type="date" class="inputtext" id="student-selectdate" name="student-bdate" placeholder="Select a date">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="rightbotbot">
        <form class="botform">
            <div class="row">
                <div class="col-70">
                    <label class="textlabel" for="student-sch">SCHOOL</label></br>
                    <input class="inputtext" type="text" id="student-sch" name="student-school" placeholder="Name of School"></br>
                </div>
                <div class="col-30">
                    <label class="textlabel" for="student-level">GRADE LEVEL</label></br>
                    <select name="Grade" id="student-level">
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
                    <label class="textlabel" for="student-homeadd">HOME ADDRESS</label></br>
                    <input class="inputtext" type="text" id="student-homeadd" name="student-homeaddress" placeholder="Enter tutor's Address"></br>
                </div>
            </div> 
            <div class="rowcenter" id="textcenter">
                <p class="righttitletext" id="parentinfo-title">Parent/ Guardian Information</p>
            </div>
            <div class="row">
                <div class="col-50" id="subrow">
                    <div class="col-50">
                        <label class="textlabel" for="parent-lname1">LAST NAME</label></br>
                        <input class="inputtext" type="text" id="parent-lname1" name="students-parent-lname1" placeholder="Enter Last Name"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="parent-fname1">FIRST NAME</label></br>
                        <input class="inputtext" type="text" id="parent-fname1" name="students-parent-fname1" placeholder="Enter First Name"></br>
                    </div>
                </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-relationship1">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="sp-relationship1" name="parent-relationship1" placeholder="Enter Relationship"></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="sp-email1">E-MAIL</label></br>
                        <input class="inputtext" type="email" id="sp-email1" name="parent-email1" placeholder="Enter E-mail Address"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-connum1">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="sp-connum1" name="parent-connum1" placeholder="Enter Contact Number"></br>
                    </div>
                </div>
                <hr id="line-invi">
                <div class="row">
                    <div class="col-50" id="subrow">
                        <div class="col-50">
                            <label class="textlabel" for="parent-lname2">LAST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-lname2" name="students-parent-lname2" placeholder="Enter Last Name"></br>
                        </div>
                        <div class="col-50">
                            <label class="textlabel" for="parent-fname2">FIRST NAME</label></br>
                            <input class="inputtext" type="text" id="parent-fname2" name="students-parent-fname2" placeholder="Enter First Name"></br>
                        </div>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-relationship2">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="sp-relationship2" name="parent-relationship2" placeholder="Enter Relationship"></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50">
                        <label class="textlabel" for="sp-email2">E-MAIL</label></br>
                        <input class="inputtext" type="email2" id="sp-email" name="parent-email2" placeholder="Enter E-mail Address"></br>
                    </div>
                    <div class="col-50">
                        <label class="textlabel" for="sp-connum2">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="sp-connum2" name="parent-connum2" placeholder="Enter Contact Number"></br>
                    </div>
                </div>
                <div class="rowcenter" id="textcenter">
                    <p class="righttitletext" id="student-otherinfo">Other Information</p>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label class="lightlabel" for="student-ques1">MEDICATION/ MEDICAL ISSUES</label></br>
                    </div>
                    <div class="col-20">
                        <div class="option" id="student-ques1-option">
                            <input class="radiobtn" type="radio" id="student-ques1" name="yesno" value="yes">
                            <label class="btnlabel" for="yes">Yes</label><br>
                            <input class="radiobtn" type="radio" id="student-ques1" name="yesno" value="no">
                            <label class="btnlabel" for="no">No</label>
                        </div></br>
                    </div>
                    <div class="col-50">
                        <input class="inputtext" type="text" id="student-ques1-blank" name="student-medicalblank" placeholder="Enter text"></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label class="lightlabel" for="student-pic-consent">CONSENT TO HAVE PICTURE TAKEN AND DISPLAYED</label></br>
                    </div>
                    <div class="col-20">
                        <div class="option" id="student-ques2-option">
                            <input class="radiobtn" type="radio" id="student-pic-consent" name="yesno" value="yes">
                            <label class="btnlabel" for="yes">Yes</label><br>
                            <input class="radiobtn" type="radio" id="student-pic-consent" name="yesno" value="no">
                            <label class="btnlabel" for="no">No</label>
                        </div>    </br>                
                    </div>
                    <div class="col-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label class="lightlabel" for="childinfo">ADDITIONAL INFORMATION</label></br>
                    </div>
                    <div class="col-70">
                        <input class="inputtext" type="text" id="childinfo" name="childinformation" placeholder="Enter Text"></br>
                    </div>
                </div>
                <hr id="line-invi">
                <div class="row">
                    <div class="col-40" id="authorizeddiv">
                        <label class="textlabel" for="authname">AUTHORIZED INDIVIDUALS</label></br>
                        <input class="inputtext" type="text" id="authindiv1" name="authindiv" placeholder="Fullname"></br>
                        <input class="inputtext" type="text" id="authindiv2" name="authindiv" placeholder="Fullname"></br>
                    </div>
                    <div class="col-40">
                        <label class="textlabel" for="rel">RELATIONSHIP</label></br>
                        <input class="inputtext" type="text" id="rel3" name="relationship" placeholder="Enter relationship"></br>
                        <input class="inputtext" type="text" id="rel4" name="relationship" placeholder="Enter relationship"></br>
                    </div>
                    <div class="col-60">
                        <label class="textlabel" for="connum">CONTACT NUMBER</label></br>
                        <input class="inputtext" type="text" id="connum3" name="contactnumber" placeholder="Enter Contact Number"></br>
                        <input class="inputtext" type="text" id="connum4" name="contactnumber" placeholder="Enter Contact Number"></br>
                    </div>
                </div>
                
                <div class="rowcenter" id="textcenter">
                    <p class="righttitletext" id="schedtitle"> Schedule</p>
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
                    <div class="col-40">
                        <button type="submit" class="btnSUBMIT">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>            
</div>
<script src="javascript/admin.js"></script>
