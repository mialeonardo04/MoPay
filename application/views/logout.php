<?php 
	session_start();
	if (isset($_SESSION['email'])) {
		session_destroy();
		header('Location: auth/login');
	} else {
		header('Location: auth/login');
	}
?>