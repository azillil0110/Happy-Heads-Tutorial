<link rel="stylesheet" href="/css/admin/addevent.css">

<div class="righttop">
    <p class="righttoptext">Add an Event</p>
</div>
    <div class="rightbot">
        <div class="bottop">
            <div class="leftbottop">
                <div class="uploadbox">
                    <form action="includes/upload.php" method="POST" enctype= "multipart/form-data" class="uploadbox">
                        <label for="fileInput" >
                            <i class="fa-solid fa-upload uploadicon"></i>
                            <p class="uploadtext">Upload<br>Images</p>
                        </label>
                        <input type="file" accept="image/jpeg, image/jpg, image/png, image/PNG" id="fileInput" name="eventImage" style="display: none;">
                        <button type="submit" name="submit">CONFIRM</button>
                    </form>
                </div>
            </div>
            <div class="rightbottop">
                <form class="topform">
                    <p class="formtext">Name</p>
                    <input type="text" placeholder="Input Event Name" class="textevent">
                    <p class="formtext">Event Date</p>
                    <input type="date" id="date" name="date" placeholder="Select a date">
                </form>
            </div>
        </div>
        <div class="botbot">
            <form class="midform">
                <p class="formtext" id="desc">Description</p>
                <textarea rows="7" cols="90" id="descinp" placeholder="What is the event all about?"></textarea>
            </form>
            <form class="bottomform">
                <button type="submit" class="btnAddEvent">Add Event</button>
            </form>
        </div>
    </div>
</div>

<script src="javascript/admin.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const uploadBox = document.getElementById("uploadBox");
        const fileInput = document.getElementById("fileInput");

        uploadBox.addEventListener("click", function () {
            fileInput.click(); 
        });

        fileInput.addEventListener("change", function () {
            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                alert("Selected file: " + fileName);
            }
        });
    })
</script>





