document.addEventListener('DOMContentLoaded', () => {
    const studentsButton = document.getElementById('studentsButton');
    const tutorsButton = document.getElementById('tutorsButton');
    const auditLogButton = document.getElementById('auditLogButton');

    const studentsReportSection = document.getElementById('studentsReportSection');
    const tutorsReportSection = document.getElementById('tutorsReportSection');
    const auditLogReportSection = document.getElementById('auditLogReportSection');

    const studentsTableContainer = document.getElementById('studentsTableContainer');
    const tutorsTableContainer = document.getElementById('tutorsTableContainer');
    const auditLogTableContainer = document.getElementById('auditLogTableContainer');

    // When the students button is clicked, show the students report and fetch data
    studentsButton.addEventListener('click', () => {
        studentsReportSection.style.display = 'block';
        tutorsReportSection.style.display = 'none';
        auditLogReportSection.style.display = 'none';
        fetchReport('students');
    });

    // When the tutors button is clicked, show the tutors report and fetch data
    tutorsButton.addEventListener('click', () => {
        tutorsReportSection.style.display = 'block';
        studentsReportSection.style.display = 'none';
        auditLogReportSection.style.display = 'none';
        fetchReport('tutors');
    });

    // When the audit log button is clicked, show the audit log report and fetch data
    auditLogButton.addEventListener('click', () => {
        auditLogReportSection.style.display = 'block';
        studentsReportSection.style.display = 'none';
        tutorsReportSection.style.display = 'none';
        fetchReport('audit_log');
    });
});

// Fetch report data and display it in the corresponding section
function fetchReport(reportType) {
    fetch(`admin-reports-fetch.php?report=${reportType}`)
        .then(response => response.json())
        .then(data => {
            if (reportType === 'students') {
                createTable(data, 'students');
            } else if (reportType === 'tutors') {
                createTable(data, 'tutors');
            } else if (reportType === 'audit_log') {
                createTable(data, 'audit_log');
            }
        })
        .catch(err => {
            console.error("Error fetching data:", err);
            document.getElementById(`${reportType}TableContainer`).innerHTML = "<p>Error loading data.</p>";
        });
}

// Create a dynamic table for the fetched data
function createTable(data, type) {
    let tableHTML = '<table border="1"><thead><tr>';
    
    if (type === 'students') {
        tableHTML += '<th>Name</th><th>Age</th><th>Grade</th>';
    } else if (type === 'tutors') {
        tableHTML += '<th>Name</th><th>Subject</th><th>Email</th>';
    } else if (type === 'audit_log') {
        tableHTML += '<th>Action</th><th>Date</th><th>Details</th>';
    }

    tableHTML += '</tr></thead><tbody>';

    if (data.length === 0) {
        tableHTML += `<tr><td colspan="3">No data available</td></tr>`;
    } else {
        data.forEach(item => {
            if (type === 'students') {
                tableHTML += `<tr><td>${item.stud_fname} ${item.stud_lname}</td><td>${item.stud_age}</td><td>${item.stud_grade_level}</td></tr>`;
            } else if (type === 'tutors') {
                tableHTML += `<tr><td>${item.tutor_name}</td><td>${item.subject}</td><td>${item.email}</td></tr>`;
            } else if (type === 'audit_log') {
                tableHTML += `<tr><td>${item.action}</td><td>${item.date}</td><td>${item.details}</td></tr>`;
            }
        });
    }

    tableHTML += '</tbody></table>';
    document.getElementById(`${type}TableContainer`).innerHTML = tableHTML;
}
