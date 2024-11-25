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
                stylesheet.href = 'css/admin/admin-dashboard.css';
                break;
            case 'students':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'tutors':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'tutorschedule':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'addevent':
                stylesheet.href = 'css/admin/addevent.css';
                break;
            case 'addtutor':
                stylesheet.href = 'css/admin/addtutor.css';
                break;
            default:
                stylesheet.href = 'css/admin/admin-dashboard.css';
        }
        
    });
});

function getContent(section) {
    switch (section) {
        case 'dashboard':
            return `
                <div class="righttop">
                    <p class="righttoptext">Administrator</p>
                </div>
                <div class="rightbot">
                    <div class="box">
                        <i class="fa-solid fa-user righticons"></i>
                        <p class="righttitle">Students</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-user righticons"></i>
                        <p class="righttitle">Tutors</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-calendar righticons"></i>
                        <p class="righttitle" id="righttitle1">Tutor's Schedule</p>
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
                
            `;
        case 'tutors':
            return `
                
            `;
        case 'tutorschedule':
            return `
                
            `;
        case 'addevent':
            return `
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
            `;
        case 'addtutor':
            return `
                <div class="righttop">
                        <p class="righttoptext">Add a Tutor</p>
                    </div>
                    <div class="contact-form">
                        <h1>Personal Information</h1>
                        <div class="top-container">
                            <div>
                                <img id="img-1" src="2X2 (1).jpg" alt="2x2 Img">
                            </div>
                            <form action="#" method="post">
                                <input id="field" type="hidden" name="form-name" value="form 1">
                            <div class="contact-form-field">
                                <input id="field" required placeholder="Enter your FirstName" type="text" name="name" id="name">
                            </div>
                            <div class="contact-form-field">
                                <input id="field" required placeholder="Enter your LastName" type="text" name="name" id="name">
                            </div>
                            <div class="date-gender">
                                <div id="date">
                                    <h5>Birth Date</h5>
                                    <input type="date" id="date" required>
                            </div>
                                <div id="gender">
                                    <h5>Gender</h5>
                                    <select name="gender" required>
                                        <option value="">Please select one…</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                        <option value="other">Other</option>
                                        <option value="Prefer not to answer">Perfer not to Answer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <h5>Description</h5>
                            <textarea required ="" cols="77" rows="6" placeholder="Short description" name="message" id="message" required></textarea>
                        </div>
                        <div>
                            <h1 id="login-security">Login & Security</h1>
                        </div>
                        <div class="email-phone">
                            <div id="email">
                                <h5>Email</h5>
                                <input id="input" required placeholder="Enter your email" type="text" name="email">
                            </div>
                            <div id="phone">
                                <h5>Phone</h5>
                                <input id="input" required placeholder="Enter 11 digit phone number" type="tel" name="phone">
                            </div>
                        </div>
                        <div class="usern-pass">
                            <div id="usern">
                                <h5>Username</h5>
                                <input id="input" required placeholder="Enter your username" type="text" name="usern">
                            </div>
                            <div id="pass">
                                <h5>Password</h5>
                                <input id="input" required placeholder="Enter your password" type="password" name="pass">
                                <p>change password</p>
                            </div>
                        </div>
                        <div>
                            <button id="btn-save">Save Changes</button>
                        </div>
                    </div>
            `;
        default:
            return `<p>Content not found.</p>`;
    }
}