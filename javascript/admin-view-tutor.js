function showModDetails(box){
    const modid = box.getAttribute('mod-id');
    const fname = box.getAttribute('mod-fname');
    const lname = box.getAttribute('mod-lname');
    const email = box.getAttribute('mod-email');
    const phone = box.getAttribute('mod-phone');
    const bdate = box.getAttribute('mod-bdate');
    const date = new Date(bdate);
    const formattedDate = date.toISOString().split('T')[0];
    console.log(formattedDate);

    const gender = box.getAttribute('mod-gender');
    const acctype = box.getAttribute('acc-type');
    const desc = box.getAttribute('mod-description');

    document.getElementById('modid').value = modid;
    document.getElementById('fname').value = fname;
    document.getElementById('lname').value = lname;
    document.getElementById('bdate').value = formattedDate;
    document.getElementById('mgender').value = gender;
    document.getElementById('acctype').value = acctype;
    document.getElementById('message').value = desc;
    document.getElementById('email').value = email;
    document.getElementById('phone').value = phone;

    document.getElementById('tutorinfo-overlay').style.display = 'flex';

}
function closeModDetails() {
    document.getElementById('tutorinfo-overlay').style.display = 'none';
    
}