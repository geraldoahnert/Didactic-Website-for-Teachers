<?php

/* Session Start */
session_start();

/* Require Database */
require_once 'db_connect.php';

/* Verify Form Send */
if (isset($_POST['btn-delete'])){
	/* Get id on hidden input */
	$id = mysqli_escape_string($connect, $_POST['id']);

	/* Start Query */
	$sql = "DELETE FROM clients WHERE id = '$id'";
	
	/* Verify Query */
	if (mysqli_query($connect, $sql)) {
		$_SESSION['message'] = "Sucess to delete.";
		header('Location: ../index.php');
	} else {
		$_SESSION['message'] = "I can't delete.";
		header('Location: ../index.php');
	}
}