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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Check It Out</p>
						<h1>My Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Service Provider Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									
									
									if(isset($_SESSION['cart'])){
										foreach($_SESSION['cart'] as $key => $value)
										{

											echo"
												<tr>
													<td>
														<form action='manage_cart.php' method='POST'>
															<button name='Remove_item' class='btn btn-outline-danger'>x</button>
															<input type='hidden' name='Item_name' value='$value[Item_name]'>
														</form>
													</td>
													<form action='manage_cart.php' method='POST'>
														<td class='product-image'><img src='$value[Item_img]'></td>
														<td class='product-name'>$value[Item_name]</td>
														<td class='product-price'>₹$value[Fees]<input type='hidden' class='ifees' value='$value[Fees]'></td>
														<td class='product-quantity'><input class='iquantity' onchange='subTotal()' type='number'name='qnt' value='$value[quantity]'></td>
														<td class='product-total itotal'></td>
												</tr>
											
											";
										}
									}else{
										echo"
										
										<h3>Cart Is Empty !</h3>
										<a href='services.php'class='cart-btn'>Book Now</a>
										<br>
										
										";		
									}
								?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal:</strong></td>
									<td id='stotal'></td>
								</tr>
								<tr class="total-data">
									<td><strong>Service Charges: </strong></td>
									<td>₹0.00</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td id="stotal1"></td>
								</tr>
							</tbody>
						</table>
						<div class="total-section">
							<br>
							<p>Payment Mode: <strong>Offline</strong></p>
						</div>
						<div class="cart-buttons">
						<!-- </form> -->
						<!-- <form method="POST" action="checkout1.php" > -->
							<input type='hidden' name='Item_name' value='$value[Item_name]'>
							<input type='hidden' name='Item_Fees' value='$value[Fees]'>
							<input type='hidden' name='Item_Quantity' value='$value[quantity]'>
							<button type="submit" name="checkout" class="btn btn-primary">Check Out</button>
						</form>
						</div>
					</div>

					<!-- <div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
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


	<script>

		var st=0;
		var iquantity=document.getElementsByClassName('iquantity');
		var ifees=document.getElementsByClassName('ifees');
		var itotal=document.getElementsByClassName('itotal');
		// var stotal=document.getElementsByClassId('stotal');

		function subTotal(){
			st=0;
			for(i=0;i<iquantity.length;i++)
			{
				itotal[i].innerText=(ifees[i].value)*(iquantity[i].value);
				st=st+(ifees[i].value)*(iquantity[i].value);
			}
			stotal.innerText=st;
			stotal1.innerText=st;
		}
		subTotal();
	</script>
</body>
<?php include_once('footer.php');?>

</html>