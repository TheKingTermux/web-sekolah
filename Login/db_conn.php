<?php

$sname= "localhost";
$username= "root";
$password = "";

$db_name = "yoikulah";

$conn = mysqli_connect($username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}