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
            case 'myschedule':
                stylesheet.href = 'css/schedule.css';
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
                        <i class="fa-solid fa-user righticons" onclick="toggleOverlay"></i>
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
            fetch('tutor/schedule.php')
                .then(response => response.text())
                .then(html => {
                    document.querySelector('.rightside').innerHTML = html;
                })
                .catch(err => {
                    document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                });
        case 'settings':
            fetch('tutor/tutor-settings.php')
                .then(response => response.text())
                .then(html => {
                    document.querySelector('.rightside').innerHTML = html;
                })
                .catch(err => {
                    document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                });
        default:
            return `<p>Content not found.</p>`;
    }
    
    function generateScheduleDays(days) {
        return days
            .map(day => `<div class="col-16-tc"><p class="textlabel">${day}</p></div>`)
            .join('');
    }
    
}