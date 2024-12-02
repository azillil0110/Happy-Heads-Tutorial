function toggleEdit() {
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

            editButton.textContent = isEditing ? 'Cancel' : 'Edit';
        }

        function closeOverlay() {
            document.getElementById('scheduleOverlay').style.display = 'none';
        }