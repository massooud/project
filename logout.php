<?php 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	if (session_destroy()) {
		header('location: index.php');
	}
	
	// header('Refresh: 2; URL= index.php');
	/*if (session_destroy()) {
		header('location: index.php');
	}
*/	
 ?>