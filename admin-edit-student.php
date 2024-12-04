<?php
include('includes/dbh.inc.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input

    $file = $_FILES['studImage'];
    $filename = $_FILES['studImage']['name'];
    $fileTMPname = $_FILES['studImage']['tmp_name'];
    $fileSize = $_FILES['studImage']['size'];
    $fileError = $_FILES['studImage']['error'];
    $fileType = $_FILES['studImage']['type'];
    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = $filename;
                $filedestination = 'images/students/' . $fileNameNew;
                move_uploaded_file($fileTMPname, $filedestination);
            } else {
                die("File size too big!");
            }
        } else {
            die("Error uploading your file");
        }
    } else {
        $filename ="new.jpg";
    }

    $studentid = $_POST['studentid'];
    $studentfname = $_POST['student-firstname'];
    $studentlname = $_POST['student-lastname'];
    $studentnname = $_POST['student-nickname'];
    $studentbday = $_POST['student-birthday'];
    $studentage = $_POST['student-age'];
    $gender = $_POST['gender'];
    $school = $_POST['school'];
    $gradelevel = $_POST['Grade'];
    $homeadd =$_POST['homeaddress'];

    $tutor =  $_POST['Tutor'];
    $mod = 0;
    $sql = "SELECT * FROM moderator";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    $parentname = $_POST['parent-full-name'];
    $relationship = $_POST['parent-relationship1'];
    $parentemail = $_POST['parent-email1'];
    $parentcontact = $_POST['parent-connum1'];

    $fetchername = $_POST['authindiv'];
    $fetcherrelationship = $_POST['relationship'];
    $fetchernumber = $_POST['contactnumber'];

    $parentname2 = $_POST['parent-full-name2'];
    $relationship2 = $_POST['parent-relationship2'];
    $parentemail2 = $_POST['parent-email2'];
    $parentcontact2 = $_POST['parent-connum2'];
    $meds = $_POST['student-medicalblank'];
    $childinfo = $_POST['childinformation'];

    $mtime1 = $_POST['mtime1'];
    $ttime1 = $_POST['ttime1'];
    $wtime1 = $_POST['wtime1'];
    $thtime1 = $_POST['thtime1'];
    $ftime1 = $_POST['ftime1'];
    $stime1 = $_POST['stime1'];

    $mtime2 = $_POST['mtime2'];
    $ttime2 = $_POST['ttime2'];
    $wtime2 = $_POST['wtime2'];
    $thtime2 = $_POST['thtime2'];
    $ftime2 = $_POST['ftime2'];
    $stime2 = $_POST['stime2'];

    $auth1 = $_POST['authindiv1'];
    $auth2 = $_POST['authindiv2'];

    $authrel1 = $_POST['authrelationship1'];
    $authrel2 = $_POST['authrelationship2'];

    $authcont = $_POST['authcontact1'];
    $authcont2 = $_POST['authcontact2'];
    
    $age = (int)$studentage;
    $studID = (int)$studentid;


    echo $parentname;
    echo $relationship;
    echo $parentemail;
    echo $parentcontact;

    $query = "UPDATE students 
              SET stud_fname = '$studentfname', 
                  stud_lname = '$studentlname', 
                  stud_nname = '$studentnname', 
                  stud_bdate = '$studentbday', 
                  stud_age = $studentage, 
                  stud_gender = '$gender', 
                  school_name = '$school', 
                  stud_grade_level = '$gradelevel', 
                  stud_address = '$homeadd',
                  pfp_url = '$filename',
                  modID = $tutor 
              WHERE stud_id = $studID;";

    $flag =0;
    if (mysqli_query($conn, $query)) {
        $flag =1;
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $query2 = "UPDATE guardian
                SET grdn_name = '$parentname',
                    grdn_email = '$parentemail',
                    grdn_phone = '$parentcontact',
                    relationship = '$relationship'
                    WHERE studID = $studID";

    if (mysqli_query($conn, $query2) && $flag=1) {
        header('Location: admin-dashboard.php?page=students');   
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $query3 = "UPDATE authorized_fetcher
                SET fetcher_name = '$fetchername',
                    relationship = '$fetcherrelationship',
                    fetcher_phone = '$fetchernumber'
                    WHERE studID = $studID;";

    if (mysqli_query($conn, $query3)) {
        header('Location: admin-dashboard.php?page=students&success=true');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
