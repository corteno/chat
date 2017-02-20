<?php
session_start();
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' && password = '$password'";



$result = $conn->query($query);
$row_count = mysqli_num_rows($result);

$user = $result->fetch_array();

if($row_count == 1){
	$_SESSION['userID'] = $user["id"];
	$_SESSION['username'] = $user["username"];
	$_SESSION['displayname'] = $user["displayname"];
	header("Location: chat.php");
} else {
	header("Location: index.php");
}

