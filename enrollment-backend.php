<?php include_once 'includes/dbh.inc.php'?>

<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stud_fname = htmlspecialchars($_POST['student-firstname']);
$stud_lname = htmlspecialchars($_POST['student-lastname']);
$stud_nname = htmlspecialchars($_POST['student-nickname']);
$stud_bdate = htmlspecialchars($_POST['student-birthday']);
$stud_age = intval($_POST['student-age']);
$stud_gender = htmlspecialchars($_POST['gender']);
$school_name = htmlspecialchars($_POST['school']);
$stud_grade_level = htmlspecialchars($_POST['Grade']);
$stud_address = htmlspecialchars($_POST['homeaddress']);

$grdn1_name = htmlspecialchars($_POST['students-parent-fname1'] . " " . $_POST['students-parent-lname1']);
$grdn1_relationship = htmlspecialchars($_POST['parent-relationship1']);
$grdn1_email = htmlspecialchars($_POST['parent-email1']);
$grdn1_phone = htmlspecialchars($_POST['parent-connum1']);

$grdn2_name = isset($_POST['students-parent-fname2']) && isset($_POST['students-parent-lname2']) 
    ? htmlspecialchars($_POST['students-parent-fname2'] . " " . $_POST['students-parent-lname2']) 
    : null;

$grdn2_relationship = isset($_POST['parent-relationship2']) 
    ? htmlspecialchars($_POST['parent-relationship2']) 
    : null;

$grdn2_email = isset($_POST['parent-email2']) 
    ? htmlspecialchars($_POST['parent-email2']) 
    : null;

$grdn2_phone = isset($_POST['parent-connum2']) 
    ? htmlspecialchars($_POST['parent-connum2']) 
    : null;

$fetcher1_name = htmlspecialchars($_POST['authindiv']);
$fetcher1_relationship = htmlspecialchars($_POST['relationship']);
$fetcher1_phone = htmlspecialchars($_POST['contactnumber']);

$fetcher2_name = isset($_POST['authindiv']) ? htmlspecialchars($_POST['authindiv']) : null;
$fetcher2_relationship = isset($_POST['relationship']) ? htmlspecialchars($_POST['relationship']) : null;
$fetcher2_phone = isset($_POST['contactnumber']) ? htmlspecialchars($_POST['contactnumber']) : null;

$on_meds = isset($_POST['student-medicalblank']) ? htmlspecialchars($_POST['student-medicalblank']) : 'None';
$yesno = isset($_POST['yesno_pic']) ? $_POST['yesno_pic'] : 'No';
$comment = !empty($_POST['childinformation']) ? htmlspecialchars($_POST['childinformation']) : 'nothing';

    $insert_student = $conn->prepare("
        INSERT INTO students (
            stud_fname, stud_lname, stud_nname, stud_bdate, stud_age, 
            stud_gender, school_name, stud_address, stud_grade_level, on_meds, pic_perm, stud_comment, pfp_url, modID
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $defaultmodID = 1;
    $defaultpic = "default.jpg";

    $insert_student->bind_param("ssssissssssssi", $stud_fname, $stud_lname, $stud_nname, $stud_bdate, $stud_age, $stud_gender, $school_name, $stud_address, $stud_grade_level, $on_meds, $yesno, $comment, $defaultpic, $defaultmodID);

if ($insert_student->execute()) {

    $last_id_query = $conn->query("SELECT MAX(stud_id) AS max_id FROM students");
    $last_id_result = $last_id_query->fetch_assoc();
    $student_id = $last_id_result['max_id'];

    $insert_guardian1 = $conn->prepare("
        INSERT INTO guardian (grdn_name, relationship, grdn_email, grdn_phone, studID)
        VALUES (?, ?, ?, ?, ?)
    ");
    $insert_guardian1->bind_param("ssssi", $grdn1_name, $grdn1_relationship, $grdn1_email, $grdn1_phone, $student_id);
    $insert_guardian1->execute();

    $insert_guardian2 = $conn->prepare("
        INSERT INTO guardian (grdn_name, relationship, grdn_email, grdn_phone, studID)
        VALUES (?, ?, ?, ?, ?)
    ");
    $insert_guardian2->bind_param("ssssi", $grdn2_name, $grdn2_relationship, $grdn2_email, $grdn2_phone, $student_id);
    $insert_guardian2->execute();

    $insert_fetcher1 = $conn->prepare("
        INSERT INTO authorized_fetcher (fetcher_name, relationship, grdn_phone, studID)
        VALUES (?, ?, ?, ?)
    ");
    $insert_fetcher1->bind_param("sssi", $fetcher1_name, $fetcher1_relationship, $fetcher1_phone, $student_id);
    $insert_fetcher1->execute();

    $insert_fetcher2 = $conn->prepare("
        INSERT INTO authorized_fetcher (fetcher_name, relationship, grdn_phone, studID)
        VALUES (?, ?, ?, ?)
    ");
    $insert_fetcher2->bind_param("sssi", $fetcher2_name, $fetcher2_relationship, $fetcher2_phone, $student_id);
    $insert_fetcher2->execute();

    $days_selected = [];
    
    if (isset($_POST['mon'])) $days_selected[] = 'monday';
    if (isset($_POST['tue'])) $days_selected[] = 'tuesday';
    if (isset($_POST['wed'])) $days_selected[] = 'wednesday';
    if (isset($_POST['thu'])) $days_selected[] = 'thursday';
    if (isset($_POST['fri'])) $days_selected[] = 'friday';
    if (isset($_POST['sat'])) $days_selected[] = 'saturday';

    $times = [
        'monday' => ['start' => $_POST['mtime1'], 'end' => $_POST['mtime2']],
        'tuesday' => ['start' => $_POST['ttime1'], 'end' => $_POST['ttime2']],
        'wednesday' => ['start' => $_POST['wtime1'], 'end' => $_POST['wtime2']],
        'thursday' => ['start' => $_POST['thtime1'], 'end' => $_POST['thtime2']],
        'friday' => ['start' => $_POST['ftime1'], 'end' => $_POST['ftime2']],
        'saturday' => ['start' => $_POST['stime1'], 'end' => $_POST['stime2']],
    ];

    $latest_stud_id = $conn->insert_id;

    $insert_schedule = $conn->prepare("
        INSERT INTO schedule (grade, sched_day, sched_starttime, sched_endtime, stud_ID, mod_ID)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    foreach ($days_selected as $day) {
        $start_time = $times[$day]['start'];
        $end_time = $times[$day]['end'];

        $insert_schedule->bind_param("ssssii", $stud_grade_level, $day, $start_time, $end_time, $latest_stud_id, $defaultmodID);
    }

    $insert_schedule->close();

    header("Location: enroll-form.php?success=true");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>