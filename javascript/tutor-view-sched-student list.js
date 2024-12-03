function showStudents(modId, schedDay, startTime, endTime) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `tutor/fetch_studentlist.php?mod_id=${modId}&sched_day=${schedDay}&start_time=${startTime}&end_time=${endTime}`, true);

    // Fetch the elements once
    const studentList = document.getElementById('studentList');
    const overlay = document.getElementById('student-list-overlay');

    xhr.onload = function () {
        console.log(xhr.responseText);  // Log the raw response to inspect it

        if (xhr.status === 200) {
            try {
                const students = JSON.parse(xhr.responseText); // Try parsing the response
                console.log(students);  // Log the students array to see if it's correct

                // Sort students by their start time (sched_starttime)
                students.sort((a, b) => {
                    return new Date(`1970-01-01T${a.sched_starttime}Z`) - new Date(`1970-01-01T${b.sched_starttime}Z`);
                });

                studentList.innerHTML = ''; // Clear previous list

                if (students.length === 0) {
                    studentList.innerHTML = "<li>No students for this time slot.</li>";
                } else {
                    students.forEach(student => {
                        // Format the student's name and the time slot
                        const studentInfo = `${student.stud_fname} ${student.stud_lname} : ${student.sched_starttime} - ${student.sched_endtime}`;
                        const li = document.createElement('li');
                        li.textContent = studentInfo;
                        studentList.appendChild(li);
                    });
                }

                document.getElementById('student-list-overlay').style.display = 'flex';
            } catch (e) {
                console.error('Failed to parse JSON:', e);
                const studentList = document.getElementById('studentList');
                studentList.innerHTML = "<li>Error: Invalid data received.</li>";
                document.getElementById('student-list-overlay').style.display = 'flex';
            }
        } else {
            console.error("Error fetching students: " + xhr.status);
            const studentList = document.getElementById('studentList');
            studentList.innerHTML = "<li>Error fetching student list. Please try again later.</li>";
            document.getElementById('student-list-overlay').style.display = 'flex';
        }
    };

    xhr.onerror = function () {
        console.error("Request failed");
        studentList.innerHTML = "<li>Network error. Please try again later.</li>";
        overlay.style.display = 'flex';
    };

    xhr.send();
}
function closeStudent() {
    const overlay = document.getElementById('student-list-overlay');
    overlay.style.display = 'none';
}