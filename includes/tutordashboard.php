<?php 
include_once 'includes/dbh.inc.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<div class="leftside">

            <?php 
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM `moderator` WHERE mod_usern = '$username'";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    $i =0;
                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <div id="main_pfp-tutor"></div>
                        <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                const imageContainer = document.getElementById('main_pfp-tutor');
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
            <div class="leftoptions" data-section="myschedule">
                <i class="fa-solid fa-square square"></i>
                <p class="lefttext2">My Schedule</p>
            </div>
            <div class="leftoptions" data-section="settings">
                <i class="fa-solid fa-square square"></i>
                <p class="lefttext2">Settings</p>
            </div>
</div>