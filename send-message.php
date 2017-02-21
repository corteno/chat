<?php
session_start();
include("db.php");
if(isset($_GET['message'])){

	$displayname = $_SESSION['displayname'];
	$message = $_GET['message'];


	$query = "INSERT INTO `chat`.`chat` (`id`, `name`, `message`, `date`) VALUES (NULL, '$displayname', '$message', CURRENT_TIMESTAMP)";
	$insert = $conn->query($query);


}