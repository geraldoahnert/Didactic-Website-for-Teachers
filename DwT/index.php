<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tela de Login</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container" style="margin: 200px auto; width: 300px;">
		
		<form action="_informacoes.php" method="post">
			<div class="form-group">
				<label><i class="fas fa-user"></i></label>
				<input type="text" name="usuario" class="form-control" required="true" placeholder="Email">
			</div>
			<div class="form-group">
				<label><i class="fas fa-lock"></i></label>
				<input type="password" name="senha" class="form-control" required="true" placeholder="Senha">
			</div>

			<div id="botoesDireita">
				<a href="cadastro.php" type="submit" class="btn btn-dark btn-sm">Registrar</a>
				<button type="submit" class="btn btn-info btn-sm">Entrar</button>
			</div> 
		</form>

	</div>



	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>	
	<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
</body>
</html>