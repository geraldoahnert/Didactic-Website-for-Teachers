<?php

include '_conexao.php';



# Cadastro
$userEmail = $_POST['userEmail'];
$userPasswd = $_POST['userPasswd'];
$userLevel = $_POST['userLevel'];
$userCategoria = $_POST['userCategoria'];


echo $sql = "INSERT INTO `usuario`(`userEmail`, `userPasswd`, `userLevel`, `userCategoria`) VALUES ('$userEmail', '$userPasswd','$userLevel','$userCategoria')";

$inserir = mysqli_query($conexao, $sql); // Verifica e adiciona no banco de dados.

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrado com sucesso!</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>

	<div class="container" style="width: 250px;margin-top: 20px">
		<h4>Cadastrado com sucesso!</h4>
		<div style="padding-top: 20px">
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Ir ao site</a>
	</div>

</body>
</html>
