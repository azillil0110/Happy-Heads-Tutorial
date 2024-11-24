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
                stylesheet.href = 'css/admin/admindashboard.css';
                break;
            case 'students':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'tutorschedule':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'tutorschedule':
                stylesheet.href = 'css/admin/.css';
                break;
            case 'addevent':
                stylesheet.href = 'css/admin/.css';
                break;
            default:
                stylesheet.href = 'css/admin/.css';
                break;
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
        case 'myschedule':
            return `
                
            `;
        case 'addevent':
            return `
                
            `;
        case 'settings':
            return `
                
            `;
        default:
            return `<p>Content not found.</p>`;
    }
}