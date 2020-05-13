<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

if (isset($_GET['id'])) {
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clients WHERE id = '$id'";
	$result = mysqli_query($connect, $sql);
	$userDatabase = mysqli_fetch_array($result);
}
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">User Edit</h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $userDatabase['id']; ?>">
			<div class="input-field col s12">
				<input type="text" name="name" id="name" value="<?php echo $userDatabase['name']; ?>">
				<label for="name">Name</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="lastname" id="lastname" value="<?php echo $userDatabase['lastname']; ?>">
				<label for="lastname">Lastname</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="email" id="email" value="<?php echo $userDatabase['email']; ?>">
				<label for="email">Email</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="age" id="age" value="<?php echo $userDatabase['age']; ?>">
				<label for="age">Age</label>
			</div>
			<button type="submit" name="btn-edit" class="btn">Update</button>
			<a href="index.php" class="btn green">Users List</a>
		</form>
	</div>
</div>

<?php 

require_once 'includes/footer.php';

?>