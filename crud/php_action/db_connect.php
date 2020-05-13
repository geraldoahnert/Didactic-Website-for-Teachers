<?php

/* Credentials */
$serverName = "localhost";
$userName = "root";
$userPassword = "123";
$dbName = "crud";

/* Connect to Database */
$connect = mysqli_connect($serverName, $userName, $userPassword, $dbName);

/* Mysqli Set Charset */
mysqli_set_charset($connect, "utf-8");

/* Verify Connect */
if (mysqli_connect_error()) {
	echo "I can't connect with database: ".mysqli_connect_error();
}