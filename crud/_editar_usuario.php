<?php 

	include '_conexao.php';

	$id = $_GET['id'];



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DwT - Login</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>







<div class="container" id="containerCentralizado" style="margin-top: 40px">

	<?php 

		$sql = "SELECT * FROM `usuario` WHERE id_usuario = $id";
		$buscar = mysqli_query($conexao, $sql);

		while ($array = mysqli_fetch_array($buscar)) {

		    $id_usuario = $array['id_usuario'];
			$userEmail = $array['userEmail'];
			$userPasswd = $array['userPasswd'];

	 ?>




	<form action="_atualizar_usuario.php" method="post">
	<div class="form-group">
	    <label>Editar informações</label>
	    <input type="email" class="form-control" name="userEmail" value="<?php echo $userEmail ?>">
	    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
	</div>

	<div class="form-group">
	    <input type="password" class="form-control" name="userPasswd" value="<?php echo $userPasswd ?>">
	</div>

	<div id="botoesDireita">
		<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
	</div> 
	</form>
</div>	

<div class="container" id="containerCentralizado" style="margin-top: 100px">
	<form action="cadastro.html" method="post">
	<div class="form-group">
	    <label>Não possui conta?</label>
	<div id="botoesEsquerda">
		<button type="submit" class="btn btn-secondary btn-sm">Cadastre-se</button>
	</div> 

	<?php 

		}

	 ?>
	</form>
</div>	





	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>
