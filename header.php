<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Work Factory</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.jpg">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    
 	<!-- header -->
   <div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">		
								<img style="border:2px solid rgb(12, 1, 1);border:3px solid rgb(111, 108, 108);"  src="assets/img/logo.png"   alt="" >
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu" >
							<ul>
								<li><a href="index.php">Home</a></li>
								<!-- <li><a href="services.php">Services</a></li> -->
								<li><a href="services.php">Services</a>
									<ul class="sub-menu">
										<li><a href="#">>Categories</a></li>
										<li><a href="Barber.php">Barber</a></li>
										<li><a href="Carpenter.php">Carpenter</a></li>
										<li><a href="Electrician.php">Electrician</a></li>
										<li><a href="Mechanic.php">Mechanic</a></li>
										<li><a href="Plumber.php">Plumber</a></li>
										<li><a href="RepairServices.php">Repair Services</a></li>
										<li><a href="Other.php">Other</a></li>
								
									</ul>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="about.php">About</a></li>
								<li>
									<div class="header-icons">
										<?php
										if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
											?>
											<!-- <li><a href="logout.php">Logout</a></li> -->
											<a class="mobile-hide search-bar-icon" href="profile.php"><i class="fas fa-user-alt"></i></a>
											<?php 
												$count=0;
												if(isset($_SESSION['cart'])){
													$count=count($_SESSION['cart']);
												}

											?>
											<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart">(<?php echo$count ?>)</i></a>
											<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
											<a class="shopping-cart" href="logout.php"><i class="fas fa-power-off"></i></a>
												<ul class="sub-menu">
													<li><a href="profile.php">Profile</a></li>
													<li><a href="cart.php">Cart</a></li>
													<li><a href="logout.php">Logout</a></li>
												</ul>
											<?php
											}
										elseif(isset($_SESSION['sploggedin']) && $_SESSION['sploggedin']==true)	{
											?>
											<!-- <li><a href="logout.php">Logout</a></li> -->
											
											<a class="mobile-hide search-bar-icon" href="profile.php"><i class="fas fa-user-alt"></i></a>
											<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
											<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
											<a class="shopping-cart" href="logout.php"><i class="fas fa-power-off"></i></a>
												<ul class="sub-menu">
													<li><a href="#">#Service Provider</a></li>
													
													<li><a href="profile.php">Profile</a></li>
													<li><a href="cart.php">Cart</a></li>
													<li><a href="logout.php">Logout</a></li>
												</ul>
											<?php
										}					
										else{
											?>
											<li><a href="login.php">Login</a></li>
											<?php
										} ?>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

</body>
</html>