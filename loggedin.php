
<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: home.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>logged in</title>
</head>
<body>

		<div class="navbar">
			<a href="CDL.html">Customer Detail Listing</a>
			<a href="profile.html">Profile</a>
			<a href="view.html">View</a>
		</div>

</body>
</html>

