document.getElementById('studentBtn').addEventListener('click', () => showOverlay('studentOverlay'));
document.getElementById('tutorBtn').addEventListener('click', () => showOverlay('tutorOverlay'));
document.getElementById('auditLogBtn').addEventListener('click', () => showOverlay('auditLogOverlay'));

function closeOverlay() {
    document.querySelectorAll('.overlay').forEach(overlay => overlay.style.display = 'none');
}

function showOverlay(overlayId) {
    closeOverlay();
    document.getElementById(overlayId).style.display = 'flex';
}

function applyStudentFilter() {
    const filter = document.getElementById('studentFilter').value;
    fetchData('students', filter); 
}

function applyTutorFilter() {
    const filter = document.getElementById('tutorFilter').value;
    fetchData('tutors', filter);
}

function applyAuditLogFilter() {
    const filter = document.getElementById('auditLogFilter').value;
    fetchData('audit_logs', filter);
}

function fetchData(reportType, filter) {
    fetch(`admin-reports-fetch.php?report=${reportType}&filter=${filter}`)
        .then(response => response.json())
        .then(data => {
            if (reportType === 'students') {
                populateTable('studentTable', data);
            } else if (reportType === 'tutors') {
                populateTable('tutorTable', data);
            } else if (reportType === 'audit_logs') {
                populateTable('auditLogTable', data);
            }
        })
        .catch(error => console.error('Fetch Error:', error));
}

function populateTable(tableId, data) {
    const table = document.getElementById(tableId);
    table.innerHTML = '';

    const headerRow = document.createElement('tr');
    if (tableId === 'studentTable') {
        headerRow.innerHTML = '<th>Name</th><th>Age</th><th>Grade</th>';
    } else if (tableId === 'tutorTable') {
        headerRow.innerHTML = '<th>Name</th><th>Gender</th><th>Grade</th>';
    } else if (tableId === 'auditLogTable') {
        headerRow.innerHTML = '<th>Name</th><th>Login Time</th><th>Logout Time</th>';
    }
    table.appendChild(headerRow);

    data.forEach(row => {
        const tr = document.createElement('tr');
        if (tableId === 'studentTable') {
            tr.innerHTML = `<td>${row.stud_fname} ${row.stud_lname}</td><td>${row.stud_age}</td><td>${row.stud_grade_level}</td>`;
        } else if (tableId === 'tutorTable') {
            tr.innerHTML = `<td>${row.mod_fname} ${row.mod_lname}</td><td>${row.mod_gender}</td><td>${row.stud_grade_level}</td>`;
        } else if (tableId === 'auditLogTable') {
            tr.innerHTML = `<td>${row.mod_fname} ${row.mod_lname}</td><td>${row.log_in_time}</td><td>${row.log_out_time}</td>`;
        }
        table.appendChild(tr);
    });
}

document.querySelector('.overlay').addEventListener('click', (event) => {
    if (event.target === document.querySelector('.overlay')) {
        closeOverlay();
    }
});