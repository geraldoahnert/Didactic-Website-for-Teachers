<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Users</h3>
		<table class="striped">
			<thead>
				<tr class="light">
					<th>Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Age</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM clients";
					$result = mysqli_query($connect, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($userDatabase = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $userDatabase['name']; ?></td>
					<td><?php echo $userDatabase['lastname']; ?></td>
					<td><?php echo $userDatabase['email']; ?></td>
					<td><?php echo $userDatabase['age']; ?></td>
					<td><a href="useredit.php?id=<?php echo $userDatabase['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="#modal<?php echo $userDatabase['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
					<div id="modal<?php echo $userDatabase['id']; ?>" class="modal">
						<div class="modal-content">
							<h4>Alert</h4>
							<p>Do you want to delete user?</p>
						</div>
						<div class="modal-footer">
							<form action="php_action/delete.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $userDatabase['id']; ?>">
								<button type="submit" name="btn-delete" class="btn red">Delete</button>
								<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
							</form>
						</div>
					</div>
				</tr>
				<?php
					}
				} else {
				?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<br>
		<a href="useradd.php" class="btn">add new user</a>
	</div>
</div>
<?php
require_once 'includes/footer.php';
?>