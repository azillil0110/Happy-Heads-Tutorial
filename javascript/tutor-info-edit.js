function EditTutor(){
    const inputs = document.querySelectorAll('.inputtype');
    const editButton = document.querySelector('.edit-btn');
    const isEditing = editButton.textContent === 'Edit';

    inputs.forEach(input => {
        if (input.id === 'gender' || input.id === 'acctype') {
            input.disabled = !isEditing;
        } else {
            input.readOnly = !isEditing;
        }
    });

    editButton.textContent = isEditing ? 'Cancel' : 'Edit';
}

function closeModDetails() {
    document.getElementById('tutorinfo-overlay').style.display = 'none';
}