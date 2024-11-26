<?php include_once 'dbh.inc.php'?>

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
                            imageContainer.style.backgroundImage = "url('images/Team/<?php echo $row['pfp_url']; ?>')";
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
    <?php require_once('functions.php') ?>
    
    <a href="admin-dashboard.php?username=<?php echo $username ?>" class="leftoptions">
    <div class=" <?php if(is_page('/admin-dashboard.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-dashboard.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-dashboard.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Dashboard</p>
    </div>
    </a>

    <a href="admin-tutor.php?username=<?php echo $username ?>" class="leftoptions">
    <div class=" <?php if(is_page('/admin-tutor.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-tutor.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-tutor.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Students</p>
    </div>
    </a>

    <a href="admin-students.php?username=<?php echo $username ?>" class="leftoptions">
    <div class=" <?php if(is_page('/admin-students.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-students.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-students.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Tutor</p>
    </div>
    </a>
    
    <a href="admin-tutor-sched.php?username=<?php echo $username ?>" class="leftoptions">
    <div class=" <?php if(is_page('/admin-tutor-sched.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-tutor-sched.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-tutor-sched.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Tutor Schedule</p>
    </div>
    </a>

    <a href="admin-add-event.php?username=<?php echo $username ?>" class="leftoptions">
    <div class=" <?php if(is_page('/admin-add-event.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-add-event.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-add-event.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Add Event</p>
    </div>
    </a>

    <a href="admin-add-tutor.php?username=<?php echo $username ?>" class="leftoptions">
        <div class=" <?php if(is_page('/admin-add-tutor.php')) echo 'leftoptions1'; else echo 'leftoptions'?>"  data-section="addtutor">
        <i class="fa-solid fa-square <?php if(is_page('/admin-add-tutor.php')) echo 'square1'; else echo 'square'?>"></i>
        <p class="<?php if(is_page('/admin-add-tutor.php')) echo 'lefttext1'; else echo 'lefttext2'?>">Add Tutor</p>
        </div>
    </a>
</div>