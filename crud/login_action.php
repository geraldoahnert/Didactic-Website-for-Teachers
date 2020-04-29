<?php
require_once 'db_connect.php';
// Start a new Session
session_start();


if (isset($_POST['btn-login'])) {
	$erros = array();
	// Filtro com mysqli
	$login = mysqli_escape_string($connect, $_POST['login']);
	$password = mysqli_escape_string($connect, $_POST['password']);

	if (empty($login) or empty($password)) {
		$erros[] = "<li> O campo login/senha precisa ser preenchido. </li>";
	} else {
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) > 0) {
			$password = md5($password);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND password = '$password'";
			$result = mysqli_query($connect, $sql);

			if (mysqli_num_rows($result) == 1) {
				$result = mysqli_fetch_array($result);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $result['id'];
				header('Location: menu.php');
			} else {
				$erros[] = "<li> Usuário e Senha não conferem. </li>";
				header('Location: index.php');
			}
		} else {
			$erros[] = "Não há ninguém registrado com as informações passadas.";
			header('Location: index.php');
		}
	}
}