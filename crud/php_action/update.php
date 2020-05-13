<?php

session_start();

require_once 'db_connect.php';

/* Verify Form Send */
if (isset($_POST['btn-edit'])) {

	/* Get post variables and filter inputs. */
	$name = mysqli_escape_string($connect, $_POST['name']);
	$lastname = mysqli_escape_string($connect, $_POST['lastname']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$age = mysqli_escape_string($connect, $_POST['age']);

	/* Get id on hidden input */
	$id = mysqli_escape_string($connect, $_POST['id']);

	/* Start Query */
	$sql = "UPDATE clients SET name = '$name', lastname = '$lastname', email = '$email', age = '$age' WHERE id = '$id'";

	/* Verify Query */
	if (mysqli_query($connect, $sql)) {
		$_SESSION['message'] = "Sucess to update.";
		header('Location: ../index.php');
	} else {
		$_SESSION['message'] = "I can't update.";
		header('Location: ../index.php');
	}
}