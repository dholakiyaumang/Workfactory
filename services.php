<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
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
	<?php include 'header.php'; ?>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Genuine And Esay To Book</p>
						<h1>Services</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<div class="product-section mt-80 mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Categories</h3>
						<p>Book Now</p>
					</div>
				</div>
			</div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="Barber.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Barber</h3>
						<a href="Barber.php" class="cart-btn"></i> Let's see</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="Carpenter.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Carpenter</h3>
						<a href="Carpenter.php" class="cart-btn"></i> Let's see</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="Electrician.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Electrician</h3>
						<a href="Electrician.php" class="cart-btn"></i> Let's see</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="Mechanic.php"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
				</div>
				<h3>Mechanic</h3>
				<a href="Mechanic.php" class="cart-btn"></i> Let's see</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="Plumber.php"><img src="assets/img/products/product-img-4.jpg" alt=""></a>
				</div>
				<h3>Plumber</h3>
				<a href="Plumber.php" class="cart-btn"></i> Let's see</a>
			</div>
		</div>
		
		<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="RepairServices.php"><img src="assets/img/products/product-img-5.jpg" alt=""></a>
				</div>
				<h3>Repair services</h3>
				<a href="RepairServices.php" class="cart-btn"></i> Let's see</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="Other.php"><img src="assets/img/products/product-img-7.jpg" alt=""></a>
				</div>
				<h3>Other</h3>
				<a href="Other.php" class="cart-btn"></i> Let's see</a>
			</div>
		</div>
			</div>
		</div>
	</div>

</div>
</div>
	<!-- end product section -->


</body>
<?php include 'footer.php'; ?>
</html>