<?php
require_once 'login_action.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tela de Login</title>
		<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container" style="margin: 200px auto; width: 300px;">
			<form action="login_action.php" method="post">
				<div class="form-group">
					<label><i class="fas fa-user"></i></label>
					<input type="text" name="login" class="form-control" required="true" placeholder="Email">
				</div>
				<div class="form-group">
					<label><i class="fas fa-lock"></i></label>
					<input type="password" name="password" class="form-control" required="true" placeholder="Senha">
				</div>
				<div id="botoesDireita">
					<a href="cadastro.php" type="submit" class="btn btn-dark btn-sm">Registrar</a>
					<button type="submit" name="btn-login" class="btn btn-info btn-sm">Entrar</button>
				</div>
				<?php
					if (!empty($erros)) {
						foreach ($erros as $erro) {
							echo "<li> $erro </li>";
						}
					}
				?>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>