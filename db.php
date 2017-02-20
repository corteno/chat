<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "chat";

$conn = new mysqli($host, $user, $pass, $db);


mysqli_set_charset($conn,"utf8");


?>