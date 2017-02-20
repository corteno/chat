<?php
session_start();
if(!isset($_SESSION['userID'])){
	header("Location: index.php");
}

include("db.php");
include("functions.php");
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat</title>
	<link rel="stylesheet" href="style.css">

	<script src="js/scroll.js"></script>
	<!-- AJAX SCRIPT -->
	<script>
		function ajax() {
			var request = new XMLHttpRequest();

			request.onreadystatechange = function () {
				if(request.readyState == 4 && request.status == 200){
						document.getElementById('chat-data').innerHTML = request.responseText;
				}
			};

			request.open('GET','chat-logic.php',true);
			request.send();
		}

		setInterval(function(){
			ajax();
		}, 1000);
	</script>

</head>
<body onload="ajax();">
<div class="header-wrapper chat-header">
	<div class="user">
		<?php printf($_SESSION['displayname']); ?>
	</div>
</div>

<div id="container">
	<div id="chat-box">
		<div id="chat-data">

		</div>
		<form class="input-form" method="post" action="">
			<textarea id="message-input" type="text" name="message" placeholder="Enter message"></textarea>
			<input class="submit-button" type="submit" name="submit" value="Send">
		</form>

		<?php

		if(isset($_POST['submit']) && ($_POST['submit'] == "Send")){

			$displayname = $_SESSION['displayname'];
			$message = $_POST['message'];


				$query = "INSERT INTO `chat`.`chat` (`id`, `name`, `message`, `date`) VALUES (NULL, '$displayname', '$message', CURRENT_TIMESTAMP)";
				$insert = $conn->query($query);



			$_POST['message'] = '';
			header("Location: chat.php");
			exit;


		}

		?>


	</div>


</div>
<script type="text/javascript">
	initScroll();
</script>
</body>
</html>