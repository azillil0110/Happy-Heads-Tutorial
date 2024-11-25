<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <Title>Team</Title>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/footer.css">
        <?php include_once 'includes/dbh.inc.php'?>
    </head>
    <body id="team-page-body">
        <?php include('includes/header.php') ?>

        <div id="banner">
            <h1 class="largest-font txt-shadow no-margin">People Behind Us</h1>
                <h3 class="txt-shadow">learn more about our team</h3>
        </div>
        <div id="team-page-container">
            <?php 
                $sql = "SELECT * FROM `moderator` WHERE acc_type = 'founder';";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    while($row = mysqli_fetch_assoc($result)){ 
                        
                        ?>
                        <div id="founder-container">
                            <div id="founder">
                                <img src="images/Team/<?php echo $row['pfp_url'] ?>" alt="" id="founder-pic">
                                <div id="founder-details">
                                    <h2 class="no-margin-y"><?php echo $row['mod_fname']; echo" "; echo $row['mod_lname'];?></h2>
                                    <h5 class="no-margin-y"><?php echo $row['acc_type']?></h5>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
            ?>    
        </div>

        

        <hr>

        <div id="tutor-container">
            <h1 id="tutors-text-team">Tutors</h1>
                <div id="team">

                    <?php 
                        $sql = "SELECT * FROM `moderator` WHERE acc_type = 'tutor';";
                        $result = mysqli_query($conn, $sql);
                        $resultcheck = mysqli_num_rows($result);

                        if($resultcheck > 0){
                            $i =1;
                            while($row = mysqli_fetch_assoc($result)){ 
                                
                                ?>
                                <div id="per-member">
                                    <div id="tutor-pic<?php echo $i; ?>" class="tutor-pic-bg">
                                    </div>
                                    <script>
                                          document.addEventListener('DOMContentLoaded', function () {
                                            const imageContainer = document.getElementById('tutor-pic<?php echo $i; ?>');
                                            if (imageContainer) {
                                                imageContainer.style.backgroundImage = "url('images/team/<?php echo $row['pfp_url']; ?>')";
                                                imageContainer.style.backgroundSize = 'cover';
                                                imageContainer.style.backgroundPosition = 'center';
                                                imageContainer.style.backgroundRepeat = 'no-repeat';
                                            }
                                        });
                                    </script>
                                    <div id="tutor-details">
                                        <h5 class="no-margin-y"><?php echo $row['mod_fname']?></h5>
                                        <h6 class="no-margin-y"><?php echo $row['acc_type']?></h6>
                                    </div>
                                </div>

                                <?php
                                $i++;
                            }
                        }
                    ?>
                </div>
        </div>


        <?php include('includes/footer.php')?>
    </body>
</html>