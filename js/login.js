var login = () => {
    var username = document.getElementById('login-username');
    var password = document.getElementById('login-password');

    username.addEventListener('blur', () => {

        if(username.value !== ""){
            username.className = 'login-username login-input login-active';
        } else {
            username.className = 'login-username login-input';
        }
    });
    password.addEventListener('blur', () => {
        if(password.value != ''){
            password.className = 'login-password login-input login-active';
        } else {
            password.className = 'login-password login-input';
        }
    });
};

login();