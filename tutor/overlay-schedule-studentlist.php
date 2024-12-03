<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/-schedule.css">
    <title>Student List</title>
</head>
<body>
<div id="student-list-overlay" class="overlay">
    <div class="overlay-content">
        
        <div class="listcontent">
            
            <div class="row">
            <div class="col-10"></div>
            <div class="col-80">
                <h2>List of Students</h2>
            </div>
            <div class="col-10"></div>
            </div>
            <div class="row" id="list">
            <div class="col-10"></div>
            <div class="col-80">
                <ul id="studentList"></ul>
            </div>
            <div class="col-10"></div>
            </div>
            
        </div>       
        <button class="close-btn" onclick="closeStudent()">Close</button>
    </div>
</div>
<script src="javascript/tutor-view-sched-student list.js"></script>
</body>
</html>