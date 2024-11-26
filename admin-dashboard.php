<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link id="rightsidestyle" rel="stylesheet" href="css/admin/admin-dashboard.css">
    <link rel="stylesheet" href="css/admin/adminheader.css">
    <link rel="stylesheet" href="css/admin/admindashboard.css">
    <script src="https://kit.fontawesome.com/9a257cd74f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('includes/adminheader.php') ?>
    <div class="main_body">
        <?php include('includes/admindashboard.php') ?>
        <div class="rightside">
            <div class="righttop">
                <p class="righttoptext">Administrator</p>
            </div>
            <div class="rightbot">
                <div class="box">
                    <i class="fa-solid fa-user righticons"></i>
                    <p class="righttitle">Students</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-user righticons"></i>
                    <p class="righttitle">Tutors</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-calendar righticons"></i>
                    <p class="righttitle" id="righttitle1">Tutor's Schedule</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-calendar righticons"></i>
                    <p class="righttitle">Add Event</p>
                </div>
                <div class="box">
                    <i class="fa-solid fa-user righticons"></i>
                    <p class="righttitle">Add Tutor</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

