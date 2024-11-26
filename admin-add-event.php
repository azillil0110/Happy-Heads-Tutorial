<link rel="stylesheet" href="css/admin/addevent.css">
<div class="rightside">
    <div class="righttop">
        <p class="righttoptext">Add an Event</p>
        </div>
        <div class="rightbot">
            <div class="bottop">
                <div class="leftbottop">
                    <div class="uploadbox">
                        <i class="fa-solid fa-upload uploadicon"></i>
                        <p class="uploadtext">Upload<br>Images</p>
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
</div>

<script src="javascript/admin.js"></script>





