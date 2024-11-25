<?php include_once 'includes/dbh.inc.php'?>

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
                <div class="main_pfp"></div>
                <script>
                        document.addEventListener('DOMContentLoaded', function () {
                        const imageContainer = document.getElementById('pfp');
                        if (imageContainer) {
                            imageContainer.style.backgroundImage = "url(''../../images/Team/<?php echo $row['pfp_url']; ?>')";
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
    <div class="leftoptions" data-section="tutors">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Tutors</p>
    </div>
    <div class="leftoptions" data-section="tutorschedule">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Tutor Schedule</p>
    </div>
    <div class="leftoptions" data-section="addevent">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Add Event</p>
    </div>
    <div class="leftoptions" data-section="addtutor">
        <i class="fa-solid fa-square square"></i>
        <p class="lefttext2">Add Tutor</p>
    </div>
</div>