<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'pizza';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) 
	die('Connection failed: ' . mysqli_error($conn));

?>