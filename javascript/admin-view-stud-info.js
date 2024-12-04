function showDetails(box) {

    const studid = box.getAttribute('stud-id');
    const fname = box.getAttribute('stud-fname');
    const lname = box.getAttribute('stud-lname');
    const nickname = box.getAttribute('stud-nname');
    const bdate = box.getAttribute('stud-bdate');
    const age = box.getAttribute('stud-age');
    const gender = box.getAttribute('stud-gender');
    const school = box.getAttribute('stud-school');
    const address = box.getAttribute('stud-address');
    const grade = box.getAttribute('stud-grade-level');
    const pfp = box.getAttribute('stud-pfp');
    const name = box.getAttribute('full-name');
    const relationship = box.getAttribute('relationship');
    const email = box.getAttribute('email');
    const phone = box.getAttribute('phone');
    const fetcher_name = box.getAttribute('fetcher-name');
    const fetcher_relationship = box.getAttribute('fetcher-relationship');
    const fetcher_phone = box.getAttribute('fetcher-phone');
    const pic_perm = box.getAttribute('pic-perm');
    const on_meds = box.getAttribute('on-meds');
    const comment = box.getAttribute('stud-comment');
    const day = box.getAttribute('day');
    const start_time = box.getAttribute('starttime');
    const end_time = box.getAttribute('endtime');

    document.getElementById('oldfilename').value = pfp;
    document.getElementById('studentid').value = studid;
    document.getElementById('studentfname').value = fname;
    document.getElementById('studentlname').value = lname;
    document.getElementById('student-nname').value = nickname;
    document.getElementById('student-bday').value = bdate;
    document.getElementById('student-age').value = age;
    document.getElementById('student-gender').value = gender;
    document.getElementById('school').value = school;
    document.getElementById('homeadd').value = address;
    document.getElementById('grade').value = grade;

    $pfpimage = document.getElementById('uploadbox');
    if ($pfpimage) {
        $pfpimage.style.backgroundImage = "url('images/students/" + pfp + "')";
    }

    document.getElementById('parent_fullname1').value = name;
    document.getElementById('sp-relationship1').value = relationship;
    document.getElementById('sp-email1').value = email;
    document.getElementById('sp-connum1').value = phone;
    document.getElementById('parent_fullname2').value = name;
    document.getElementById('sp-relationship2').value = relationship;
    document.getElementById('sp-email2').value = email;
    document.getElementById('sp-connum2').value = phone;
    document.getElementById('authindiv1').value = fetcher_name;
    document.getElementById('authindiv2').value = fetcher_name;
    document.getElementById('rel3').value = fetcher_relationship;
    document.getElementById('rel4').value = fetcher_relationship;
    document.getElementById('connum3').value = fetcher_phone;
    document.getElementById('connum4').value = fetcher_phone;
    document.getElementById('childinfo').value = comment;
    /*pic_perm radio button*/
    if (pic_perm === 'yes') {
        document.getElementById('student-pic-consent1').checked = true;
    } else if (pic_perm === 'no') {
        document.getElementById('student-pic-consent2').checked = true;
    }
    /*on_meds radio button*/
    if (on_meds.trim() !== "None") {
        document.getElementById('meds1').checked = true;
    } else{
        document.getElementById('meds2').checked = true;
    }
    document.getElementById('student-ques1-blank').value = on_meds;

    if(day === 'Monday'){
        document.getElementById('monday').checked = true;
        document.getElementById('student-mtime1').value = start_time;
        document.getElementById('student-mtime2').value = end_time;
    } else if (day === 'Tuesday'){
        document.getElementById('tuesday').checked = true;
        document.getElementById('student-ttime1').value = start_time;
        document.getElementById('student-ttime2').value = end_time;
    } else if (day === 'Wednesday'){
        document.getElementById('wednesday').checked = true;
        document.getElementById('student-wtime1').value = start_time;
        document.getElementById('student-wtime2').value = end_time;
    } else if (day === 'Thursday'){
        document.getElementById('thursday').checked = true;
        document.getElementById('student-thtime1').value = start_time;
        document.getElementById('student-thtime2').value = end_time;
    } else if (day === 'Friday'){
        document.getElementById('friday').checked = true;
        document.getElementById('student-ftime1').value = start_time;
        document.getElementById('student-ftime2').value = end_time;
    } else if (day === 'Saturday'){
        document.getElementById('saturday').checked = true;
        document.getElementById('student-stime1').value = start_time;
        document.getElementById('student-stime2').value = end_time;
    }

    document.getElementById('scheduleOverlay').style.display = 'flex';
}

function closePopUp() {
    document.getElementById('scheduleOverlay').style.display = 'none';
}