<?php

/* Clear */
function clear($input){
	/* SQL */ 
	global $connect;
	$variable = mysqli_escape_string($connect, $input);
	/* XSS */
	$variable = htmlspecialchars($variable);
	return $variable;
}
