function toggleEdit() {
    const inputs = document.querySelectorAll('.inputtext, .inputtime, select, input[type="checkbox"]');
    const editButton = document.querySelector('.edit-btn');
    const isEditing = editButton.textContent === 'Edit';
function editToggle() {
            const inputs = document.querySelectorAll('.inputtext, .inputtime, select, input[type="checkbox"]');
            const editButton = document.querySelector('.edit-btn');
            const isEditing = editButton.textContent === 'Edit';

    inputs.forEach(input => {
        if (input.type === 'checkbox' || input.tagName === 'SELECT') {
            input.disabled = !isEditing;
        } else {
            input.readOnly = !isEditing;
        }
    });
            inputs.forEach(input => {
                if (input.type === 'checkbox' || input.tagName === 'SELECT' || input.type === 'time') {
                    input.disabled = !isEditing;
                } else {
                    input.readOnly = !isEditing;
                }
            });

    editButton.textContent = isEditing ? 'Cancel' : 'Edit';
}

function closeOverlay() {
    document.getElementById('scheduleOverlay').style.display = 'none';
}

document.getElementById('uploadbox').addEventListener('click', function () {
    document.getElementById('fileInput').click();
});

document.getElementById('fileInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const uploadText = document.getElementById('uploadText');

    if (file) {
        uploadText.textContent = "Image Selected"; // Change text to "Image Selected"
    }
});

function editToggle() {
            const inputs = document.querySelectorAll('.inputtext, .inputtime, select, input[type="checkbox"]');
            const editButton = document.querySelector('.edit-btn');
            const isEditing = editButton.textContent === 'Edit';

            inputs.forEach(input => {
                if (input.type === 'checkbox' || input.tagName === 'SELECT' || input.type === 'time') {
                    input.disabled = !isEditing;
                } else {
                    input.readOnly = !isEditing;
                }
            });

            editButton.textContent = isEditing ? 'Cancel' : 'Edit';
        }
    }