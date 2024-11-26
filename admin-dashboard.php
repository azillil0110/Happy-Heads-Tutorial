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
            <?php include('admin-right-dashboard.php')?>
        </div>
    </div>
</body>
<script src="javascript/admin.js"></script>
</html>

