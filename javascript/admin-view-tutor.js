function showModDetails(box){
    const fname = box.getAttribute('mod-fname');
    const lname = box.getAttribute('mod-lname');
    const email = box.getAttribute('mod-email');
    const phone = box.getAttribute('mod-phone');
    const bdate = box.getAttribute('mod-bdate');
    const gender = box.getAttribute('mod-gender');
    const acctype = box.getAttribute('acc-type');
    const desc = box.getAttribute('mod-description');

    document.getElementById('fname').value = fname;
    document.getElementById('lname').value = lname;
    document.getElementById('date').value = bdate;
    document.getElementById('gender').value = gender;
    document.getElementById('acctype').value = acctype;
    document.getElementById('message').value = desc;
    document.getElementById('email').value = email;
    document.getElementById('phone').value = phone;

    document.getElementById('tutorinfo-overlay').style.display = 'flex';

}
function closeModDetails() {
    document.getElementById('tutorinfo-overlay').style.display = 'none';
}