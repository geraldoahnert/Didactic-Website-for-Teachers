<?php
$serverName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "sistemalogin";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if (mysqli_connect_error()) {
	echo "Não foi possível se conectar ao banco de dados.";
}