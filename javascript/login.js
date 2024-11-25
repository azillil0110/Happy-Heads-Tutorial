document.addEventListener("DOMContentLoaded", function(){

    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const username = urlParams.get('username');

    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    if(username){
        usernameInput.value = username;
    }
    if (error === 'invalid_password') {

        passwordInput.placeholder = "Incorrect password";
        passwordInput.style.border = '2px solid red';
        passwordInput.classList.add('error-placeholder');

    } else if (error === 'no_account') {
        usernameInput.style.border = '2px solid red';
        usernameInput.classList.add('error-placeholder');
        usernameInput.placeholder = "Account does not exist";
        usernameInput.value = '';
    }

    
});