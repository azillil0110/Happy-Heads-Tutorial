<div class="righttop">
    <p class="righttoptext">Add an Event</p>
</div>
<form class="rightbot" action="includes/insert-event.php" method="POST" enctype="multipart/form-data">
    <div class="bottop">
        <div class="leftbottop">   
            <div class="uploadbox">
                <label for="fileInput">
                    <i class="fa-solid fa-upload uploadicon"></i>
                    <p class="uploadtext">Upload<br>Images</p>
                </label>
                <input type="file" accept="image/jpeg, image/jpg, image/png" id="fileInput" name="eventImage" style="display: none;">
                <input type="text" id="filename" class="textevent" name="filename" style="display:none;">
            </div>
        </div>
        <div class="rightbottop">
            <div class="topform">
                <p class="formtext">Name</p>
                <input type="text" placeholder="Input Event Name" class="textevent" name="eventName" required>
                <p class="formtext">Event Date</p>
                <input type="date" id="date" name="eventDate" placeholder="Select a date" required>
            </div>
        </div>
    </div>
    <div class="botbot">
        <div class="midform">
            <p class="formtext" id="desc">Description</p>
            <textarea rows="7" cols="90" id="descinp" placeholder="What is the event all about?" name="eventDescription" required></textarea>
        </div>
        <div class="bottomform">
            <button id="btn-save" type="submit" class="submit">Add Event</button>
        </div>
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p class="modal-text">Adding Event Successful</p>
                <p class="modal-text2">It is now visible on event page</p>
            </div>
        </div>
        <script src="javascript/overlay.js"></script>
    </div>
</form>

<script src="javascript/admin.js"></script>
