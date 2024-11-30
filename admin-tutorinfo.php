<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutor Information</title>
    <link rel="stylesheet" href="css/admin-tutorinfo.css">
    <script>
        function toggleEditMode() {
            const fields = document.querySelectorAll('.read-only');
            const isEditable = fields[0].contentEditable === "true";

            fields.forEach(field => {
                field.contentEditable = !isEditable;
                field.style.backgroundColor = isEditable ? "#ecf0f1" : "#f7f9fc"; 
                field.style.border = isEditable ? "1px solid #bdc3c7" : "1px dashed #2980b9";
            });

            const button = document.getElementById('edit-button');
            button.textContent = isEditable ? "Edit" : "Save";
        }
    </script>
</head>
<body>
    <?php include('includes/header.php') ?>

    <div id="profile-picture-section">
        <img id="profile-picture" src="https://via.placeholder.com/150" alt="Profile Picture">
    </div>

    <div id="body">
        <button id="edit-button" onclick="toggleEditMode()" style="margin-bottom: 20px; padding: 10px 20px; background-color: #2980b9; color: white; border: none; border-radius: 5px; cursor: pointer;">Edit</button>

        <div id="form-section">
            <h2 class="subtitle">Personal Information</h2>
            <hr>
            <div class="row">
                <div class="col-25">
                    <label>First Name:</label>
                    <div class="read-only">Jhon Ron</div>
                </div>
                <div class="col-25">
                    <label>Last Name:</label>
                    <div class="read-only">Eleazar</div>
                </div>
                <div class="col-25">
                    <label>Nickname:</label>
                    <div class="read-only">Jhonron</div>
                </div>
                <div class="col-25">
                    <label>Gender:</label>
                    <div class="read-only">Male</div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Date of Birth:</label>
                    <div class="read-only">2004-07-17</div>
                </div>
                <div class="col-25">
                    <label>Age:</label>
                    <div class="read-only">20</div>
                </div>
                <div class="col-25">
                    <label>School:</label>
                    <div class="read-only">Bulacan State University</div>
                </div>
                <div class="col-25">
                    <label>Grade Level:</label>
                    <div class="read-only">3rd Year College</div>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label>Home Address:</label>
                    <div class="read-only">North Grove, San Simon, Pampanga</div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
