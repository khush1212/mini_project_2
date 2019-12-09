<?php
	include 'auth.php';
	
	unset($_SESSION['logged_in']);
	unset($_SESSION['user_name']);

	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: login.php"); // Redirecting To Home Page
	}
?>