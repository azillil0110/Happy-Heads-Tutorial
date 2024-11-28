<link rel="stylesheet" href="css/admin/admin-tutor.css">
<meta http-equiv="Cache-control" content="no-cache">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Tutors!</p>
</div>
<div class="rightbot">
    <?php 
        $sql = "SELECT * FROM `moderator`";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){ 
                $tutorID = $row['mod_id']; // DITO YUNG ID GUYS PALITAN NYO NALANG NAME DI KO ALAM EH
                ?>
                <div class="box">
                    <div id="stud-pic<?php echo $i; ?>" class="stpfp">
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            console.log('DOM fully loaded');
                            const imageContainer = document.getElementById('stud-pic<?php echo $i; ?>');
                            if (imageContainer) {
                                imageContainer.style.backgroundImage = "url('./images/students/<?php echo $row['pfp_url']; ?>')";
                                imageContainer.style.backgroundSize = 'cover';
                                imageContainer.style.backgroundPosition = 'center';
                                imageContainer.style.backgroundRepeat = 'no-repeat';
                            }
                        });
                    </script>
                    <a href="admin-tutorinfo.php?id=<?php echo $tutorID; ?>" class="righttitle"> 
                        <?php echo $row['mod_fname'] . " " . $row['mod_lname']; ?>
                    </a>
                </div>
                <?php
                $i++;
            }
        }
    ?> 
</div>
<script src="javascript/admin.js"></script>