<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link id="rightsidestyle" rel="stylesheet" href="css/admin/admin-dashboard.css">
    <link rel="stylesheet" href="css/admin/adminheader.css">
    <link rel="stylesheet" href="css/admin/admindashboard.css">
    <link rel="stylesheet" href="css/reporticon.css">
    <script src="https://kit.fontawesome.com/9a257cd74f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('includes/adminheader.php') ?>
    <div class="main_body">
        <?php include('reporticon.php')?>
        <?php include('includes/admindashboard.php') ?>
        <div class="rightside">

            <?php 
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page === 'addevent') {
                    include('admin-add-event.php');
                    ?>
                    <script>
                        stylesheet.href = 'css/admin/addevent.css';
                        btn.classList.remove('leftoptions1');
                        btn.classList.add('leftoptions');
                        icon.classList.remove('square');
                        icon.classList.add('square1');
                    </script>
                    <?php
                } else if ($page === 'adduser') {
                    include('admin-add-tutor.php');
                } else if ($page === 'addstudent') {
                    include('admin-add-student.php');
                } else if ($page === 'pendingstudents') {
                    include('admin-pending-students.php');
                } else if ($page === 'tutors') {
                    include('admin-tutor.php');
                } else if ($page === 'settings') {
                    ?>
                    <script>
                        window.onload = function() {
                            const urlParams = new URLSearchParams(window.location.search);
                            if(urlParams.has('settings')){
                                const stylesheet = document.getElementById('rightsidestyle');
                                stylesheet.href = 'css/admin/admin-settings.css';
                            }
                        };
                    </script>
                    <?php
                    include('admin-settings.php');
                }else if ($page === 'students') {
                    include('admin-students.php');
                    ?>
                    <script>
                        document.stylesheet.href = 'css/admin/admin-students.css';
                        btn.classList.remove('leftoptions1');
                        btn.classList.add('leftoptions');
                        icon.classList.remove('square');
                        icon.classList.add('square1');
                    </script>
                    <?php
                }
            }
            else{
                include('admin-right-dashboard.php');
            }
            
            ?>




        </div>
    </div>
</body>
<script src="javascript/admin.js"></script>
<script src="javascript/admin-tutor-sched.js"></script>
<script src="javascript/admin-view-stud-info.js"></script>
<script src="javascript/toggle-read.js"></script>
<script src="javascript/admin-view-tutor.js"></script>
<script src="javascript/tutor-info-edit.js"></script>
<script src="javascript/admin-pending-student.js"></script>

</html>

