<?php
	include 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Surprise Test</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/css_1.css">
	<link rel="stylesheet" type="text/css" href="css/css1.css">
	<link rel="stylesheet" type="text/css" href="css/css2.css">
	<link rel="stylesheet" type="text/css" href="css/edit.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="main_wrapper">
		<header class="header_wrapper">
			<div class="offer_countdown">Super Weekend: FLAT 60% OFF* Ends in 11h 53m 50s</div>
			<div class="main_header_content">
				<div class="logo">
					<a href="home.php"><img src="img/logo.png" /></a>
				</div>
				<div class="account_wrapper">
					<div class="search_and_account_wrapper">
						<div class="searchbar_and_account">
							<div class="searchbar relative">
								<input type="search" name="search" placeholder="search" />
								<span class="searchbar_img absolute"><i class="fa fa-search"></i></span>
							</div>
						</div>
						<div class="searchbar_and_account account_icons">
							<span class="account_and_cart_img">
								<div class="dropdown">
									<span class="dropbtn"><i class="fa fa-user-o"></i></span>
									<?php if (!empty($_SESSION['logged_in'] = 1) && !empty($_SESSION['user_name'])) { ?>
										<div class="loggedin_dropdown_content">
											<a href=""><?php echo "Hi ".$_SESSION['user_name']; ?></a>
											<a href="logout.php">Logout</a>
										</div>
									<?php } else { ?>
										<div class="dropdown-content">
											<a href="login.php">Login</a>
											<a href="register.php">Register</a>
										</div>
									<?php } ?>
									<span><i class="fa fa-shopping-bag"></i></span>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="category">
				<div class="menu">
					<div class="menulist">
						<a href="#">new arrivals</a>
					</div>
					<div class="menulist">
						<a href="#">jeans</a>
					</div>
					<div class="menulist">
						<a href="#">tops & tees</a>
					</div>
					<div class="menulist">
						<a href="#">fashion</a>
					</div>
					<div class="menulist sale_menu">
						<a href="#">sale</a>
					</div>
					<div class="menulist">
						<a href="#">collections</a>
					</div>
					<div class="menulist">
						<a href="#">tokidoki</a>
					</div>
					<?php if (!empty($_SESSION['logged_in'] = 1) && !empty($_SESSION['user_name'])) { ?>
					<div class="menulist">
						<a href="view.php?user_name=<?php echo $_SESSION['user_name'];?>">View</a>
					</div>
					<div class="menulist">
						<a href="cdl.php">CDL</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="order_info">
				<div class="order_shipment_offer">
					<div class="orders">
						<span class="icons"><i class="fa fa-truck" aria-hidden="true"></i></span>
						<div class="text">free shipping</div>
					</div>
					<div class="orders">
						<span class="icons"><i class="fa fa-tag" aria-hidden="true"></i></span>
						<div class="text">sign up and avail 20% off on your first order*</div>
					</div>
					<div class="orders">
						<span class="icons"><i class="fa fa-undo" aria-hidden="true"></i></span>
						<div class="text">easy returns</div>
					</div>
				</div>
			</div>
		</header>