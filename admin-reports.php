<div class="righttop">
    <p class="righttoptext">REPORTS</p>
</div>

<div class="rightbot">
    <div class="toppp">
        <button class="box-dashboard" id="studentsButton">
            <i class="fa-solid fa-user righticons"></i>
            <p class="righttitle">Students</p>
        </button>
        
        <button class="box-dashboard" id="tutorsButton">
            <i class="fa-solid fa-chalkboard-teacher righticons"></i>
            <p class="righttitle">Tutors</p>
        </button>
        
        <button class="box-dashboard" id="auditLogButton">
            <i class="fa-solid fa-file-alt righticons"></i>
            <p class="righttitle">Audit Log</p>
        </button>
    </div>

    <div id="studentsReportSection" class="report-section">
        <h2>Students Report</h2>
        <select id="studentsFilter">
            <option value="">None</option>
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
            <option value="junior_high_school">Junior High School</option>
        </select>
        <p>This is the Students report content.</p>
    </div>

    <div id="tutorsReportSection" class="report-section">
        <h2>Tutors Report</h2>
        <select id="tutorsFilter">
                <option value="">None</option>
                <option value="asc_name">Ascending in Name</option>
                <option value="desc_name">Descending in Name</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        <p>This is the Tutors report content.</p>
    </div>

    <div id="auditLogReportSection" class="report-section">
        <h2>Audit Log Report</h2>
        <select id="auditFilter">
            <option value="">None</option>
            <option value="today">Today</option>
            <option value="week">This Week</option>
            <option value="month">This Month</option>
        </select>
        <p>This is the Audit Log report content.</p>
    </div>
    <script src="reports.js"></script>
</div>
