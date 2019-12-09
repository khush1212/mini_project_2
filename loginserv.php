<?php

	$error=''; //Variable to Store error message
	if(isset($_POST['submit'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$error = "Username or Password is Invalid";
		} else {
 			//Define $user and $pass
			$user=$_POST['user'];
			$pass=$_POST['pass'];
 			
 			//Establishing Connection with server by passing server_name, user_id and pass as a patameter
			$conn = mysqli_connect("localhost", "root", "root");
 			
 			//Selecting Database
			$db = mysqli_select_db($conn, "mini_project_2");
 			
 			//sql query to fetch information of registerd user and finds user match.
			$query = mysqli_query($conn, "SELECT * FROM mini WHERE password='$pass' AND username='$user'");
			$rows = mysqli_num_rows($query);
			
			if($rows == 1){
				$_SESSION['logged_in'] = 1;
				header("Location: home.php"); // Redirecting to home page
			} else {
				$error = "Username and Password is Invalid";
			}
 			
 			mysqli_close($conn); // Closing connection
		}
	}
?>