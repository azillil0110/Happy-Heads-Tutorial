<?php
include('includes/dbh.inc.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $studentid = $_POST['studentid'];
    $studentfname = $_POST['student-firstname'];
    $studentlname = $_POST['student-lastname'];
    $studentnname = $_POST['student-nickname'];
    $studentbday = $_POST['student-birthday'];
    $studentage = $_POST['student-age'];
    $gender = $_POST['gender'];
    $school = $_POST['school'];
    $gradelevel = $_POST['grade-level'];
    $homeadd =$_POST['homeaddress'];
    $tutor =  $_POST['tutor'];
    $parentname = $_POST['students-parent-name'];
    $relationship = $_POST['parent-relationship1'];
    $parentemail = $_POST['parent-email1'];
    $parentcontact = $_POST['parent-connum1'];
    $fetchername = $_POST['authindiv'];
    $fetcherrelationship = $_POST['relationship'];
    $fetchernumber = $_POST['contactnumber'];
    
    $age = (int)$studentage;
    $studID = (int)$studentid;

    $mod = 1;

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
                  modID = $mod 
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
                    WHERE studID = $studID;";

    if (mysqli_query($conn, $query2) && $flag=1) {
        header('Location: tutor-dashboard.php?page=students');   
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $query3 = "UPDATE authorized_fetcher
                SET fetcher_name = '$fetchername',
                    relationship = '$fetcherrelationship',
                    fetcher_phone = '$fetchernumber'
                    WHERE studID = $studID;";

    if (mysqli_query($conn, $query3) && $flag=1) {
        header('Location: admin-dashboard.php?page=students');   
    } else {
        echo "Error: " . mysqli_error($conn);
    }


    // Close the connection
    mysqli_close($conn);
}
?>
