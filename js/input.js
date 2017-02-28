var login = () => {
    /*var username = document.getElementById('login-username');
    var password = document.getElementById('login-password');*/

    var loginInputs = document.getElementsByClassName('login-input');
    var loginArray = [];

    for( var i = 0; i<loginInputs.length; i++){
        loginArray[i] = loginInputs[i];
    }

    loginArray.forEach(function (element) {
        element.addEventListener('blur',() => {
            if(element.value !== ""){
                element.className = "login-input login-active";
            } else {
                element.className = "login-input";
            }
        });
    });

    /*username.addEventListener('blur', () => {

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
    });*/
};

login();