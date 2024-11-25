<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="css/events-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <?php include_once 'includes/dbh.inc.php'?>
</head>
<body>
    <?php include('includes/header.php') ?>

    <div id="banner">
        <h1 class="largest-font txt-shadow no-margin">EVENTS</h1>
            <h3 class="txt-shadow">here's what happened to Happy Heads</h3>
    </div>

    <section class="events">
        <div class="event-container">
            
            <?php 
                $sql = "SELECT * FROM `events_`";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    $i =0;
                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <div>
                            <div id="eventpic<?php echo $i; ?>" class="event-pic"></div>
                            <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                    const imageContainer = document.getElementById('eventpic<?php echo $i; ?>');
                                    if (imageContainer) {
                                        imageContainer.style.backgroundImage = "url('./images/events/<?php echo $row['image_url']; ?>')";
                                        imageContainer.style.backgroundSize = 'cover';
                                        imageContainer.style.backgroundPosition = 'center';
                                        imageContainer.style.backgroundRepeat = 'no-repeat';
                                    }
                                });
                            </script>
                            <h1><?php echo $row['event_name']?></h1>
                            <p id="date"><?php 
                                $date = $row['event_date'];
                                echo substr($date,0,10);
                            ?></p>
                            <p id="description"><?php echo $row['event_description']?></p>
                            <hr>
                        </div>
                        <?php
                        $i++;
                    }
                }
            ?>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
</body>
</html>
