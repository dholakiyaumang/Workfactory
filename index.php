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
<?php include('header.php'); ?>
	

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 offset-lg-0 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<br>
							
							<h2>"Technology Is Best,</h2>
							<h2>When It Brings People Together"</h2>
							<p class="subtitle">Welcome <?php echo $_SESSION['name']; ?></p>
							<div class="hero-btns">
								<a href="services.php" class="boxed-btn">Get Started</a>
								<a href="contact.php" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

		<!-- features list section -->
		<!--<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		</div> -->
		<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> service 's</h3>
						<p>let's fix the problem arrounding the society </p>
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
			</div>
		</div>
	</div>

</div>
</div>
	<!-- end product section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="Dummy Pic/36.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Suresh Shah <span>Barber</span></h3>
								<p class="testimonial-body">
									"The service is smooth and straightforward. My advisor was helpful. I would recommend deal direct. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="Dummy Pic/36.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Umesh Mehta <span>Carpenter</span></h3>
								<p class="testimonial-body">
									"Fantastic company! Excellent customer service, efficient process."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="Dummy Pic/36.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Jay Patel <span>Customer</span></h3>
								<p class="testimonial-body">
									"Great customer service. Even when there was a problem with paperwork the employees continued helping us and fixed the issue. Very patient workers and quick, easy and painless process."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2021</p>
						<h2>We are <span class="orange-text">Work Factory</span></h2>
						<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
						<a href="about.php" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

	
</body>
<?php include_once('footer.php');?>

</html>