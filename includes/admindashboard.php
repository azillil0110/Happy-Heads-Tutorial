<?php include_once 'dbh.inc.php'?>
<meta http-equiv="Cache-control" content="no-cache">

<div class="leftside">

    <?php 
        $username = $_GET['username'];
        $sql = "SELECT * FROM `moderator` WHERE mod_usern = '$username'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            $i =0;
            while($row = mysqli_fetch_assoc($result)){ 
                ?>
                <div id="main_pfp-admin"></div>
                <script>
                        document.addEventListener('DOMContentLoaded', function () {
                        const imageContainer = document.getElementById('main_pfp-admin');
                        if (imageContainer) {
                            imageContainer.style.backgroundImage = "url('./images/Team/<?php echo $row['pfp_url']; ?>')";
                            imageContainer.style.backgroundSize = 'cover';
                            imageContainer.style.backgroundPosition = 'center';
                            imageContainer.style.backgroundRepeat = 'no-repeat';
                        }
                    });
                </script>
                <p class="title2"><?php echo $row['mod_fname'];?></p>

                <?php
                $i++;
            }
        }
    ?>

    <div class="leftoptions1" data-section="dashboard">
        <i class="fa-solid fa-square square1"></i>
        <p class="lefttext1">Dashboard</p>
    </div>
    <div class="leftoptions" data-section="students">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Students</p>
    </div>
    <div class="leftoptions" data-section="pending-students">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Pending Students</p>
    </div>
    <div class="leftoptions" data-section="addstudents">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Add Students</p>
    </div>
    <div class="leftoptions" data-section="tutors">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Tutors</p>
    </div>
    <div class="leftoptions" data-section="addtutor">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Add User</p>
    </div>
    <div class="leftoptions" data-section="addevent">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Add Event</p>
    </div>  
    <div class="leftoptions" data-section="settings">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Settings</p>
    </div>
</div>