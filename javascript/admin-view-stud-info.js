function showStudentDetails(box) {
    const studid = box.getAttribute('stud-id');
    const fname = box.getAttribute('stud-fname');
    const lname = box.getAttribute('stud-lname');
    const nickname = box.getAttribute('stud-nname');
    const bdate = box.getAttribute('stud-bdate');
    const age = box.getAttribute('stud-age');
    const gender = box.getAttribute('stud-gender');
    const school = box.getAttribute('school-name');
    const address = box.getAttribute('stud-address');
    const grade = box.getAttribute('grade-level');
    const name = box.getAttribute('grdn-name');
    const relationship = box.getAttribute('relationship');
    const email = box.getAttribute('grdn-email');
    const phone = box.getAttribute('grdn-phone');

    document.getElementById('studentid').value = studid;
    document.getElementById('studentfname').value = fname;
    document.getElementById('studentlname').value = lname;
    document.getElementById('student-nname').value = nickname;
    document.getElementById('student-bday').value = bdate;
    document.getElementById('student-age').value = age;
    document.getElementById('male').value = gender;
    document.getElementById('school').value = school;
    document.getElementById('homeadd').value = address;
    document.getElementById('grade-level').value = grade;
    document.getElementById('parent-name').value = name;
    document.getElementById('sp-relationship1').value = relationship;
    document.getElementById('sp-email1').value = email;
    document.getElementById('sp-connum1').value = phone;

    document.getElementById('scheduleOverlay').style.display = 'flex';
}

function closeOverlay() {
    document.getElementById('scheduleOverlay').style.display = 'none';
}