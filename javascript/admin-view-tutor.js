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

    console.log('Tutor ID:', modid); // Check if mod-id is correct

    // Make AJAX request to tutor-div.php
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'tutor-div.php?id=' + modid, true);
    
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.querySelector('.schedule-details').innerHTML = xhr.responseText; // Insert schedule here
            document.getElementById('tutorsched-overlay').style.display = 'flex'; // Show the overlay
        } else {
            alert('Failed to fetch schedule.');
        }
    };
}
function closeModDetails() {
    document.getElementById('tutorinfo-overlay').style.display = 'none';
    console.log('???');
}

function showTutorSchedule() {
    var modId = document.getElementById('modid').value; // Get the tutor's ID

    if (!modId) {
        alert('No tutor ID provided!');
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'fetch_schedule.php?id=' + modId, true); // Send the tutor's ID to fetch the schedule
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Replace the content inside the schedule-details div to avoid duplication
            document.getElementById('schedule-content').innerHTML = xhr.responseText;
            document.getElementById('tutorsched-overlay').style.display = 'flex'; // Show the overlay
        } else {
            alert('Failed to fetch schedule.');
        }
    };
    xhr.send();
}

function BackButton(){
    document.getElementById('tutorsched-overlay').style.display = 'none';
    console.log('!!');
}
function closeSched() {
    document.getElementById('tutorsched-overlay').style.display = 'none';
    document.getElementById('tutorinfo-overlay').style.display = 'none';
    console.log('!');
}