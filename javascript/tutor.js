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
                stylesheet.href = 'css/tutor/student.css';
                break;
            case 'myschedule':
                stylesheet.href = 'css/tutor/my_sched.css';
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
                    <p class="righttoptext">Welcome, Teacher!</p>
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
                        <i class="fa-solid fa-gear righticons"></i>
                        <p class="righttitle">Settings</p>
                    </div>
                </div>
            `;
        case 'students':
            fetch('tutor/students.php')
                .then(response => response.text())
                .then(html => {
                    document.querySelector('.rightside').innerHTML = html;
                })
                .catch(err => {
                    document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                });
            break;
        case 'myschedule':
            return `
            <div class="col-100" id="overlay" onclick="off()">
                <p class="ov-text" id="ov-title"> STUDENT LIST</p>
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
        case 'settings':
            return `
                    <div class="righttop">
                        <p class="righttoptext">Settings Page</p>
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
    
    function generateScheduleDays(days) {
        return days
            .map(day => `<div class="col-16-tc"><p class="textlabel">${day}</p></div>`)
            .join('');
    }
    
}