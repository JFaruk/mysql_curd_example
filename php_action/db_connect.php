<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// create connection
$connect = new mysqli($host, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>
