<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div class="container" style="margin-top: 40px;width: 500px">

	<h4>Cadastro de Categoria</h4>
	<form action="_inserir_categoria.php" method="post">
		<div class ="form-group">
			<input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria"  autocomplete="off" required="true">
		</div>
		<div style="text-align: right">
			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
		</div>
	</form>
	
</div>


	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>