<?php 
include_once 'dbh.inc.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./login.php");
    exit();
}

?>

<div class="top">
        <div class="shortrectangle">
            <p class="rectangletext">ADMIN</p>
        </div>
        <div class="longrectangle">
            <div>
                <a href="includes/logout.php" class="logout">| Log out</a>
            </div>
            <div class="longright">
                <?php 
                    $username = $_SESSION["username"];
                    $sql = "SELECT * FROM `moderator` WHERE mod_usern = '$username'";
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);

                    if($resultcheck > 0){
                        $i =0;
                        while($row = mysqli_fetch_assoc($result)){ 
                            ?>
                            <div id="admin-info">
                                <div id="pfp"></div>
                                <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                        const imageContainer = document.getElementById('pfp');
                                        if (imageContainer) {
                                            imageContainer.style.backgroundImage = "url('images/Team/<?php echo $row['pfp_url']; ?>')";
                                            imageContainer.style.backgroundSize = 'cover';
                                            imageContainer.style.backgroundPosition = 'center';
                                            imageContainer.style.backgroundRepeat = 'no-repeat';
                                        }
                                    });
                                </script>
                                <p class="title"><?php echo $row['mod_fname']; echo" "; echo $row['mod_lname'] ?></p>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                ?>
            </div>
        </div>
</div>