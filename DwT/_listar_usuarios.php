<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Usuários</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="container" style="margin-top: 40px; width: 1000px;">
	<h3>Lista de Usuários</h3>
	<br>

		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Email</th>
		      <th scope="col">Senha</th>
		      <th scope="col">Ação</th>
		    </tr>
		  </thead>

		    	<?php 

		    		include '_conexao.php';

		    		$sql = "SELECT * FROM `usuario`";
		    		$busca = mysqli_query($conexao,$sql);

		    		while ($array = mysqli_fetch_array($busca)) {
		    			$id_usuario = $array['id_usuario'];
		    			$userEmail = $array['userEmail'];
		    			$userPasswd = $array['userPasswd'];

		    	?>


		    <tr>	


		      <td><?php echo $id_usuario ?></td>

		      <td><?php echo $userEmail ?></td>

		      <td><?php echo $userPasswd ?></td>

		      <td>
		      	<a class="btn btn-warning btn-sm" href="_editar_usuario.php?id=<?php echo $id_usuario ?>" role="button">
		      		<i class="far fa-edit"></i>&nbsp;Editar
		      	</a>

		      		<a class="btn btn-danger btn-sm" href="_remover_usuario.php?id=<?php echo $id_usuario ?>" role="button">
		      		<i class="fas fa-user-slash"></i>&nbsp;Remover
		      	</a>
		      </td>




		  		<?php 

		  			} 

		  		?>

		    </tr>

		</table>


	</div>

	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>