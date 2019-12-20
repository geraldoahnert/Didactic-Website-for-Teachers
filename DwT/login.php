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
	<form action="_informacoes.php" method="post">
	<div class="form-group">
	    <label>Login</label>
	    <input type="email" class="form-control" name="userEmail" placeholder="Email" autocomplete="off" required="true">
	</div>

	<div class="form-group">
	    <input type="password" class="form-control" name="userPasswd" placeholder="Senha" autocomplete="off" required="true">
	</div>

	<div id="botoesDireita">
		<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
	</div> 
	</form>
</div>	

<div class="container" id="containerCentralizado" style="margin-top: 100px">
	<form action="cadastro.php" method="post">
	<div class="form-group">
	    <label>Não possui conta?</label>
	<div id="botoesEsquerda">
		<button type="submit" class="btn btn-secondary btn-sm">Cadastre-se</button>
	</div> 
	</form>
</div>	





	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>
