<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <Title>Happy Head Tutorial</Title>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/footer.css">
        <?php include_once 'includes/dbh.inc.php'?>
    </head>
    <body>
        <?php include('includes/header.php') ?>

        
        <div id="home-banner" >
                <h1 class="largest-font txt-shadow">Welcome to Happy Heads Tutorial Center</h1>
                <h2 class="txt-shadow">LEARN WITH US!</h5>
                <a href="./enroll-form.php"><button id="inquire-btn" class="shadow">Inquire Now</button></a>
        </div>

        <div id="home-about" class="block-center">
            <h1>What is Happy Head Tutorial Center?</h1>

            <div id="home-about-description">
                <p>Happy Heads provides tutoring classes for students from pre-nursery to high school. Our experienced tutors focus on fostering a positive and engaging learning environment in different subjects while helping them gain confidence, nurturing both emotional and academic development. </p>
            </div>
            
            <h2 ><a href="about.php" class="clickable-txt">Learn More</a></h2>

            <hr class="line-separator">

            <div id="more-info">
                <div class="per-info-teacher">
                    <div class="icon-container-teacher">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h3>Pro Teachers</h3>

                    <div class="center-text">
                        <p>A team of highly skilled teachers dedicated to providing guidance and support to students.</p>
                    </div>

                    <h4><a href="team.php" class="clickable-txt">Learn More</a></h4>
                </div>

                <div class="per-info-program">
                    <div class="icon-container-program">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h3>Effective Program</h3>

                    <div class="center-text">
                        <p>A tailored program designed to prepare and review students covering a variety of subjects.</p>
                    </div>

                    <h4><a href="program.php" class="clickable-txt">Learn More</a></h4>
                </div>

                
            </div>

            <hr class="line-separator">

            <div id="image-slides-container">
                <?php
                $sql = "SELECT * FROM `events_`";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if ($resultcheck > 0) {
                    $images = [];
                    while ($row = mysqli_fetch_assoc($result)) {
                        $images[] = $row['image_url'];
                    }
                }
                ?>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        let imagearr = <?php echo json_encode($images); ?>; // Convert PHP array to JavaScript array
                        let x = 0;
                        const time = 3000; // Change every 3 seconds

                        function changeImage() {
                            const imageSlideContainer = document.getElementById('image-slide1');
                            if (imageSlideContainer && imagearr.length > 0) {
                                imageSlideContainer.style.backgroundImage = `url('./images/events/${imagearr[x]}')`;
                                imageSlideContainer.style.backgroundSize = 'cover';
                                imageSlideContainer.style.backgroundPosition = 'center';
                                imageSlideContainer.style.backgroundRepeat = 'no-repeat';
                            }

                            // Update index for the next image
                            x = (x + 1) % imagearr.length;

                            // Call function again after `time` interval
                            setTimeout(changeImage, time);
                        }

                        // Start the slideshow
                        changeImage();
                    });
                </script>

                <div id="image-slide1" class="image-slider"></div>
            </div>

            <hr>

            <div id="event-container">
                <h1>Events</h1>

                <div id="latest-event">
                    <?php 
                        $sql = "SELECT * FROM `events_`";
                        $result = mysqli_query($conn, $sql);
                        $resultcheck = mysqli_num_rows($result);

                        if($resultcheck > 0){
                            $i = 0;
                            while($i<2){ 
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="event1">
                                    <h4 class="small-margin"><?php echo $row['event_name']?></h4>
                                    <h6 class="no-margin-y">
                                        <?php 
                                        $date = $row['event_date'];
                                        echo substr($date,0,10);
                                    ?></h6>

                                    <div id="eventpic<?php echo $i; ?>"class="event1-image-container">
                                    </div>
                                    <script>
                                          document.addEventListener('DOMContentLoaded', function () {
                                            const imageContainer = document.getElementById('eventpic<?php echo $i; ?>');
                                            if (imageContainer) {
                                                imageContainer.style.backgroundImage = "url('images/events/<?php echo $row['image_url']; ?>')";
                                                imageContainer.style.backgroundSize = 'cover';
                                                imageContainer.style.backgroundPosition = 'center';
                                                imageContainer.style.backgroundRepeat = 'no-repeat';
                                            }
                                        });
                                    </script>

                                    <h5 class="small-margin"><?php echo $row['event_description']?></h5>
                                </div>

                                <?php
                                $i++;
                            }
                        }
                    ?>
                    
                </div>

                <h3><a href="events.php" class="clickable-txt">See More</a></h3>

            </div>

            <hr>

            

            <div id="team-container">
                <h1>Our Team</h1>
                <div id="team">
                    <?php 
                        $sql = "SELECT * FROM `moderator` WHERE acc_type != 'admin' AND acc_status = 'active'";
                        $result = mysqli_query($conn, $sql);
                        $resultcheck = mysqli_num_rows($result);

                        if($resultcheck > 0){
                            $i = 0;
                            while($i < 4){ 
                                $row = mysqli_fetch_assoc($result)
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

                <h3 class="no-margin-y"> <a href="team.php" class="clickable-txt">See More</a></h3>
            </div>

            <hr class="line-separator">

            <div id="map-container">
                <h2>We're Here!</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.937465782869!2d120.78473877587767!3d14.884774770054628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396510bdd850d7b%3A0x2fa7847064929eed!2sHappy%20Heads%20Tutorial%20Center!5e0!3m2!1sen!2sph!4v1732846705023!5m2!1sen!2sph" width="750" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <?php include('includes/footer.php')?>
        </div>
    </body>
</html>