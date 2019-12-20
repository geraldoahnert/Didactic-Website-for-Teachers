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
		    <label>Cadastro</label>
		    <input type="email" class="form-control" name="cadastroEmail" placeholder="Email" autocomplete="off" required="true">
		</div>

		<div class="form-group">
		    <input type="password" class="form-control" name="cadastroPasswd" placeholder="Senha" required="true">
		</div>
			<div class="form-group">
		    <input type="password" class="form-control" name="cadastroConfPasswd" placeholder="Confirmar Senha" required="true">
		</div>

		<div>
			<label>Sua categoria:</label>
			<select class="form-control" name="cadastroCategoria" required="true">

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

	  	<div id="botoesDireita" style="margin-top: 10px">
			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
			<a href="login.html" role="button" class="btn btn-sm btn-secondary">Entrar</a>
		</div>
    </form>

</div>	







	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>
