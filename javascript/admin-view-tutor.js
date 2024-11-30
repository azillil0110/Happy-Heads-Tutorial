function showModDetails(box){
    const fname = box.getAttribute('mod-fname');
    const lname = box.getAttribute('mod-lname');
    const email = box.getAttribute('mod_email');
    const phone = box.getAttribute('mod-phone');
    const bdate = box.getAttribute('mod-bdate');
    const gender = box.getAttribute('mod_gender');
    const acctype = box.getAttribute('acc-type');
    const desc = box.getAttribute('mod-description');

    document.getElementById('modfname').value = fname;
    document.getElementById('modlname').value = lname;
    document.getElementById('mod-date').value = bdate;
    document.getElementById('mod-gender').value = gender;
    document.getElementById('acc-type').value = acctype;
    document.getElementById('message').value = desc;
    document.getElementById('mod-email').value = email;
    document.getElementById('mod-phone').value = phone;

    document.getElementById('scheduleOverlay').style.display = 'flex';

}
function closeOverlay() {
    document.getElementById('scheduleOverlay').style.display = 'none';
}