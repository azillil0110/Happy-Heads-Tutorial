<?php
if (isset($_GET['currentUrl'])) {
    $currentUrl = $_GET['currentUrl'];
} else {
    $currentUrl = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Dashboard</title>
    <link rel="stylesheet" href="css/admin/admin-reports.css">
</head>
<body>
    <button class="backbtn2" onclick="window.location.href = '<?php echo htmlspecialchars($currentUrl); ?>'">| RETURN</button>
                <p class="maintitle">REPORTS</p>
                <div class="buttons">
                    <button class="frontbtn" id="studentBtn">Students</button>
                    <button class="frontbtn" id="tutorBtn">Tutors</button>
                    <button class="frontbtn" id="auditLogBtn">Audit Logs</button>
                </div>

                <div id="studentOverlay" class="overlay">
                    <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                    <div class="overlay-content">
                        <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                        <h1>STUDENT REPORT</h1>
                        <select id="studentFilter" class="filter-dropdown">
                            <option value="none">None</option>
                            <option value="asc_name">Ascending in Name</option>
                            <option value="desc_name">Descending in Name</option>
                            <option value="asc_age">Ascending in Age</option>
                            <option value="desc_age">Descending in Age</option>
                            <option value="playgroup">Playgroup</option>
                            <option value="pre_nursery">Pre-nursery</option>
                            <option value="kindergarten">Kindergarten</option>
                            <option value="grade_1">Grade 1</option>
                            <option value="grade_2">Grade 2</option>
                            <option value="grade_3">Grade 3</option>
                            <option value="grade_4">Grade 4</option>
                            <option value="grade_5">Grade 5</option>
                            <option value="grade_6">Grade 6</option>
                            <option value="junior_high">Junior High School</option>
                        </select>
                        <button class="backbtn" onclick="applyStudentFilter()">Apply Filter</button>
                        <table id="studentTable">
                        </table>
                    </div>
                </div>

                <div id="tutorOverlay" class="overlay">
                    <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                    <div class="overlay-content">
                        <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                        <h1>TUTOR REPORT</h1>
                        <select id="tutorFilter" class="filter-dropdown">
                            <option value="none">None</option>
                            <option value="asc_name">Ascending in Name</option>
                            <option value="desc_name">Descending in Name</option>
                            <option value="all_grades">All Grades</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <button class="backbtn" onclick="applyTutorFilter()">Apply Filter</button>
                        <table id="tutorTable">
                        </table>
                    </div>
                </div>

                <div id="auditLogOverlay" class="overlay">
                    <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                    <div class="overlay-content">
                        <button class="backbtn1" onclick="closeOverlay()">|Back</button>
                        <h1>AUDIT TRAIL</h1>
                        <select id="auditLogFilter" class="filter-dropdown">
                            <option value="today">Today</option>
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                        </select>
                        <button class="backbtn" onclick="applyAuditLogFilter()">Apply Filter</button>
                        <table id="auditLogTable">
                        </table>
                    </div>
                </div>

            <script src="reports.js"></script>
        </body>
    </html>
?>