<?php

/* Session Start */
session_start();

/* Require Database */
require_once 'db_connect.php';

/* Verify Form Send */
if (isset($_POST['btn-register'])) {

	/* Get post variables and filter inputs. */
	$name = mysqli_escape_string($connect, $_POST['name']);
	$lastname = mysqli_escape_string($connect, $_POST['lastname']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$age = mysqli_escape_string($connect, $_POST['age']);

	/* Start Query */
	$sql = "INSERT INTO clients (name, lastname, email, age) VALUES ('$name', '$lastname', '$email', '$age')";

	/* Verify Query */
	if (mysqli_query($connect, $sql)) {
		$_SESSION['message'] = "Sucess to create.";
		header('Location: ../index.php');
	} else {
		$_SESSION['message'] = "Erro. Can't create.";
		header('Location: ../index.php');
	}
}