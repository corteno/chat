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
<div class="header">
	<p class="header-title">Office Chat</p>
</div>
<section class="login-wrapper">
	<form method="post" action="login.php">
		<input type="text" class="login-username" name="username" placeholder="Felhasználónév">
		<input type="password" class="login-password" name="password" placeholder="Jelszó">
		<input class="submit-button" type="submit" value="Bejelentkezés">
	</form>
</section>
</body>
</html>