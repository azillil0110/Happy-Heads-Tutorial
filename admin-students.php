<link rel="stylesheet" href="css/admin/admin-students.css">
<?php include_once 'includes/dbh.inc.php'?>
<div class="righttop">
    <p class="righttoptext">Happy Heads Tutorial Center Students!</p>
</div>
<div class="rightbot">
    <div class="firstrow">
        <?php 
            $sql = "SELECT * FROM `students`";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                $i = 0;
                while($row = mysqli_fetch_assoc($result)){ 

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
                        <p class="righttitle"><?php echo $row['stud_fname']; echo" "; echo $row['stud_lname'];?></p>
                    </div>

                    <?php
                    $i++;
                }
            }
        ?> 
        
    </div>
</div>