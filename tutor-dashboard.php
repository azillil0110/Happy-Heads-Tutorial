<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutor Dashboard</title>
    <link id="rightsidestyle" rel="stylesheet" href="css/tutor/tutor-dashboard.css">
    <link rel="stylesheet" href="css/tutor/tutordashboard.css">
    <link rel="stylesheet" href="css/tutor/tutorheader.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include('includes/tutorheader.php') ?>
    <div class="main_body">
        <?php include('includes/tutordashboard.php') ?>
        <div class="rightside">
            <div class="righttop">
                <p class="righttoptext">Welcome, Teacher!</p>
            </div>
            <div class="rightbot">
                <div class="box">
                    <i class="fa-solid fa-user righticons"></i>
                    <p class="righttitle">Students</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-calendar righticons"></i>
                    <p class="righttitle">My Schedule</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-gear righticons"></i>
                    <p class="righttitle">Settings</p>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript/tutor.js"></script>
    <script src="javascript/schedule.js"></script>
    <script src="javascript/student-info.js"></script>
    <script src="javascript/tutor-view-sched-student list.js"></script>
    <script src="javascript/tutor-view-studinfo.js"></script>
    <script src="javascript/toggle-read.js"></script>
</body>
</html>