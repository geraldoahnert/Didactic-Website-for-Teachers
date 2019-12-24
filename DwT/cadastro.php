<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DwT - Login</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



	<div class="container" style="margin: 100px auto; width: 300px;">
		
		<form class="form-group" action="_cadastrar_usuario.php" method="post">
				<div class="form-group">
					<label><i class="fas fa-user"></i></label>
					<input type="text" name="userEmail" class="form-control" required="true" placeholder="Email">
				</div>

				<div class="form-group" style="margin-top: 5%">
					<label><i class="fas fa-lock"></i></label>
					<input type="password" name="userPasswd" class="form-control" required="true" placeholder="Senha">
					<input style="margin-top: 5%" type="password" name="passwordUserConfirm" class="form-control" required="true" placeholder="Repita">
				</div>


				<div class ="form-group">

					<label><i class="fas fa-project-diagram"></i></label>
					<select name="userLevel" class="form-control">
						<option value="1">Aluno</option>}
						<option value="2">Professor</option>}
					</select>

				</div>


				<div class="form-group">
					<label><i class="fas fa-graduation-cap"></i></label>
					<select class="form-control" name="userCategoria" required="true">

							<?php

							include '_conexao.php';

							$sql = "SELECT * FROM categoria order by nome_categoria ASC";
							$buscar = mysqli_query($conexao, $sql);


							while($array = mysqli_fetch_array($buscar)){


								$id_categoria = $array['id_categoria'];
								$nome_categoria = $array['nome_categoria'];
							

							?>

			     	 	<option><?php echo $nome_categoria ?></option>
			     	 	
				      	<?php } ?>


		    		</select>
		  		</div>

				<div id="botoesDireita" class="form-group">
					<a href="index.php" type="submit" class="btn btn-dark btn-sm">Entrar</a>
					<button type="submit" class="btn btn-info btn-sm">Registrar</button>
				</div> 
		</form>

	</div>	







	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>	
	<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
</body>
</html>
