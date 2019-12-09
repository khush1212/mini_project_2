<?php

	include 'config.php';
	include 'auth.php';

	$error=''; //Variable to Store error message
	if(isset($_POST['submit'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$error = "Username or Password is Invalid";
		} else {
 			//Define $user and $pass
			$user=$_POST['user'];
			$pass=$_POST['pass'];

 			//sql query to fetch information of registerd user and finds user match.
			$query = mysqli_query($conn, "SELECT * FROM mini WHERE password='$pass' AND username='$user'");
			$rows = mysqli_fetch_array($query);

			if(is_array($rows)){
				$_SESSION['logged_in'] = 1;
				$_SESSION['user_name'] = $rows['username'];
				header("Location: home.php"); // Redirecting to home page
			} else {
				$error = "Username and Password is Invalid";
			}
 			
 			mysqli_close($conn); // Closing connection
		}
	}
?>