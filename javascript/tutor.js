document.querySelectorAll('.leftoptions, .leftoptions1').forEach(button => {
    button.addEventListener('click', function () {
        document.querySelectorAll('.leftoptions, .leftoptions1').forEach(btn => {
            btn.querySelector('p').classList.remove('lefttext1');
            btn.querySelector('p').classList.add('lefttext2');

            btn.classList.remove('leftoptions1');
            btn.classList.add('leftoptions');

            const icon = btn.querySelector('i');
            if (icon) {
                icon.classList.remove('square1');
                icon.classList.add('square');
            }
        });

        const textElement = this.querySelector('p');
        textElement.classList.remove('lefttext2');
        textElement.classList.add('lefttext1');

        this.classList.remove('leftoptions');
        this.classList.add('leftoptions1');

        const icon = this.querySelector('i');
        if (icon) {
            icon.classList.remove('square');
            icon.classList.add('square1');
        }

        const section = this.getAttribute('data-section');
        const rightside = document.querySelector('.rightside');
        rightside.innerHTML = getContent(section);

        const stylesheet = document.getElementById('rightsidestyle');
        switch (section) {
            case 'dashboard':
                stylesheet.href = 'css/tutor/tutor-dashboard.css';
                break;
            case 'students':
                stylesheet.href = 'css/tutor/students.css';
                break;
            case 'addevent':
                stylesheet.href = 'css/tutor/addevent.css';
                break;
            case 'myschedule':
                stylesheet.href = 'css/tutor/mysched.css';
                break;
            case 'settings':
                stylesheet.href = 'css/tutor/settings.css';
                break;
            default:
                stylesheet.href = 'css/tutor/tutor-dashboard.css';
        }
        
    });
});

function getContent(section) {
    switch (section) {
        case 'dashboard':
            return `
                <div class="righttop">
                    <p class="righttoptext">Welcome Back, Teacher John!</p>
                </div>
                <div class="rightbot">
                    <div class="box">
                        <i class="fa-solid fa-user righticons"></i>
                        <p class="righttitle">Students</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-calendar righticons"></i>
                        <p class="righttitle">My Schedule</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-calendar righticons"></i>
                        <p class="righttitle">Event</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-gear righticons"></i>
                        <p class="righttitle">Settings</p>
                    </div>
                </div>
            `;
        case 'students':
            return `
                <div class="righttop">
                    <p class="righttoptext">Welcome Back, Teacher John!</p>
                </div>
                <div class="rightbot">
                    <div class="firstrow">
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                    </div>
                    <div class="secrow">
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                        <div class="box">
                            <img src="PFP1.jpg" class="stpfp">
                            <p class="righttitle">Student Name</p>
                        </div>
                    </div>
                </div>
            `;
        case 'myschedule':
            return `
                <div id="overlay" onclick="off()">
                    <div class="col-100" id="ov-textContainer">
                        <p class="ov-text" id="ov-title"> STUDENT LIST</p>
                    </div>
                </div>
                <div class="righttop">
                    <p class="righttoptext">Your Schedule</p>
                </div>
                <div class="rightbot">
                    <div class="row">
                        ${generateScheduleDays(['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY'])}
                    </div>
                    <div class="row">
                        <div class="col-16-tc">
                            <p class="txt-mysched" onclick="on()">7:00-8:00</p>
                        </div>
                    </div>
                </div>
            `;
        case 'addevent':
            return `
                <div class="righttop">
                    <p class="righttoptext">Welcome Back, Teacher John!</p>
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
                            <textarea rows="7" cols="120" id="descinp" placeholder="What is the event all about?"></textarea>
                        </form>
                        <form class="bottomform">
                            <button type="submit" class="btnAddEvent">Add Event</button>
                        </form>
                    </div>
                </div>
            `;
        case 'settings':
            return `
                <div class="righttop">
                    <p class="righttoptext">Settings Page</p>
                </div>
            `;
        default:
            return `<p>Content not found.</p>`;
    }
    
    function generateScheduleDays(days) {
        return days
            .map(day => `<div class="col-16-tc"><p class="textlabel">${day}</p></div>`)
            .join('');
    }
    
}