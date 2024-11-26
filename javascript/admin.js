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
                fetch('./admin-right-dashboard.php')
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('.rightside').innerHTML = html;
                    })
                    .catch(err => {
                        document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                    });
                break;
        case 'students':
            fetch('./admin-students.php')
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('.rightside').innerHTML = html;
                    })
                    .catch(err => {
                        document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                    });
                break;
        case 'tutors':
            fetch('./admin-tutor.php')
                .then(response => response.text())
                .then(html => {
                    document.querySelector('.rightside').innerHTML = html;
                })
                .catch(err => {
                    document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                });
        break;
        case 'tutorschedule':
            return `
                
            `;
        case 'addevent':
                fetch('./admin-add-event.php')
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('.rightside').innerHTML = html;
                    })
                    .catch(err => {
                        document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                    });
                break;
        case 'addtutor':
            fetch('./admin-add-tutor.php')
                .then(response => response.text())
                .then(html => {
                    document.querySelector('.rightside').innerHTML = html;
                })
                .catch(err => {
                    document.querySelector('.rightside').innerHTML = `<p>Error loading student data.</p>`;
                });
            break;
        default:
            return `<p>Content not found.</p>`;
    }
}