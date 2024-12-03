function showStudents(schedId, startTime, endTime) {
    const xhr = new XMLHttpRequest();
xhr.open('GET', `fetch_studentlist.php?sched_id=${schedId}`, true);
xhr.onload = function () {
    if (xhr.status === 200) {
        const students = JSON.parse(xhr.responseText);
        const studentList = document.getElementById('studentList');
        studentList.innerHTML = ''; // Clear previous list

        if (students.length === 0) {
            studentList.innerHTML = "<li>No students for this time slot.</li>";
        }

        students.forEach(student => {
            const li = document.createElement('li');
            li.textContent = `${student.stud_name} ${student.stud_lastname}`;
            studentList.appendChild(li);
        });

        document.getElementById('student-list-overlay').style.display = 'flex';
    } else {
        console.error("Error fetching students: " + xhr.status);  // Error handling
    }
};
xhr.send();
}
function closeStudent() {
    document.getElementById('student-list-overlay').style.display = 'none';
}