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
<section class="login-wrapper">
	<form method="post" action="login.php">
        <div class="login-input-wrapper">
            <input id="login-username" type="text" class="login-username login-input" name="username">
            <label class="login-label">Felhasználónév</label>
            <div class="login-bar"></div>
        </div>
		<div class="login-input-wrapper">
            <input id="login-password" type="password" class="login-password login-input" name="password">
            <label class="login-label">Jelszó</label>
            <div class="login-bar"></div>
        </div>
		<input class="submit-button" type="submit" value="Bejelentkezés">
	</form>
</section>
<script src="js/login.js"></script>
</body>
</html>