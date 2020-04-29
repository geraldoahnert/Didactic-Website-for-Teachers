<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Menu</title>
		<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 100px; color: black">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Login</h5>
							<p class="card-text">Clique aqui para entrar na sua conta.</p>
							<a href="login.php" class="btn btn-primary">Login</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Registro</h5>
							<p class="card-text">Clique aqui para se registrar.</p>
							<a href="cadastro.php" class="btn btn-primary">Cadastro</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="container" style="margin-top: 100px; color: black">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Usuários</h5>
							<p class="card-text">Clique aqui para listar os usuários.</p>
							<a href="_listar_usuarios.php" class="btn btn-primary">Lista</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Categoria</h5>
							<p class="card-text">Adicionar uma nova categoria.</p>
							<a href="_adicionar_categoria.php" class="btn btn-primary">Adicionar</a>
						</div>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		</body>
	</html>