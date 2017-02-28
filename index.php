<?
session_start();
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header-wrapper">
	<p class="header-title">Office Chat</p>
</div>
<section id="input-wrapper">
	<form method="post" action="login.php">
        <div class="input-wrapper">
            <input id="login-username" type="text" class="login-input" name="username" autocomplete="off">
            <label class="input-label">Felhasználónév</label>
            <div class="login-bar"></div>
        </div>
		<div class="input-wrapper">
            <input id="login-password" type="password" class="login-input" name="password" autocomplete="off">
            <label class="input-label">Jelszó</label>
            <div class="login-bar"></div>
        </div>
		<input class="submit-button" type="submit" value="Bejelentkezés">
	</form>
    <div class="registration">
        <a href="register.php">Regisztráció</a>
    </div>
</section>
<script src="js/input.js"></script>
</body>
</html>