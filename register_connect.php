<?php

include 'config.php';
include 'auth.php';

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
} else {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$dob=$_POST['dob'];
	$mobile = $_POST['mobile'];

	$sql = "INSERT INTO mini(firstname,lastname,username,emailid,password,dob,mobile) VALUES('$firstname', '$lastname','$username','$emailid','$password','$dob','$mobile')";

	if(mysqli_query($conn,$sql))
	{
		$_SESSION['logged_in'] = 1;
		$_SESSION['user_name'] = $username;
		header("Location: home.php"); // Redirecting to home page
	}
	else
	{
		echo mysqli_error($conn);
	}	
}
?>
