<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/schedule.css">
    <title>Student List</title>
</head>
<body>
<div id="student-list-overlay" class="overlay">
    <div class="overlay-content">
        <button class="close-btn" onclick="closeStudent()">Close</button>
        <h3>Students for the selected time</h3>
        <ul id="studentList"></ul>
    </div>
</div>

<script src="javascript/tutor-view-sched-studentlist.js"></script>
</body>
</html>