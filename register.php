<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header-wrapper">
    <p class="header-title">Office Chat</p>
</div>

<section id="input-wrapper">
    <form class="register-form" action="">
        <div class="input-wrapper">
            <input id="register-displayname" type="text" class="login-input" name="username" required autocomplete="off">
            <label class="input-label">Becenév</label>
            <div class="login-bar"></div>
        </div>

        <div class="input-wrapper">
            <input id="register-username" type="text" class="login-input" name="username" required> autocomplete="off"
            <label class="input-label">Felhasználónév</label>
            <div class="login-bar"></div>
        </div>

        <div class="input-wrapper">
            <input id="register-email" type="email" class="login-input" name="username" required autocomplete="off">
            <label class="input-label">E-mail</label>
            <div class="login-bar"></div>
        </div>

        <div class="input-wrapper">
            <input id="register-password1" type="password" class="login-input" name="username" required autocomplete="off">
            <label class="input-label">Jelszó</label>
            <div class="login-bar"></div>
        </div>
        <div class="input-wrapper">
            <input id="register-password2" type="password" class="login-input" name="username" required autocomplete="off">
            <label class="input-label">Jelszó újra</label>
            <div class="login-bar"></div>
        </div>


        <input class="submit-button" type="submit">
    </form>
</section>

<script src="js/input.js"></script>
</body>
</html>