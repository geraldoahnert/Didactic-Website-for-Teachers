<?php

include 'conexao.php';

# Login
$userEmail = $_POST['userEmail'];
$userPasswd = $_POST['userPasswd'];


# Cadastro
#$cadastroEmail = $_POST['cadastroEmail'];
#$cadastroPasswd = $_POST['cadastroPasswd'];
#$cadastroConfPasswd = $_POST['cadastroConfPasswd'];
#$cadastroCategoria = $_POST['cadastroCategoria'];


$sql = "INSERT INTO `usuario`(`userEmail`, `userPasswd`) VALUES ('$userEmail','$userPasswd')";

$inserir = mysqli_query($conexao, $sql); // Verifica e adiciona no banco de dados.

?>

<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<div class="container" style="width: 250px;margin-top: 20px">
	<h4>Sessão iniciada com sucesso!</h4>
	<div style="padding-top: 20px">
	<a href="index.html" role="button" class="btn btn-sm btn-primary">Ir ao site</a>
</div>