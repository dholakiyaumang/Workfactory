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
<?php
include('dbconnection.php');
include('header.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['book_now']))
    {
       $pid= $_POST['Item_id'];

	   $sql = "SELECT * from serviceproviders where spid = '$pid'";
       $result = $con->query($sql);
				
		if(!$result){
			die("Invalid Query:". $con->error);
		}

		$row=$result->fetch_assoc();
		$filelc="/".$row['SpProfilePic'];
	
    }
}
?>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
		 <form action="manage_cart.php" method="POST">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="<?php echo$filelc;?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h2><?php echo $row["FullName"]; ?></h2>
						<p class="single-product-pricing"><span>Per Service</span>₹<?php echo $row["Fees"] ?></p>
						<p><?php echo $row["Discription"] ?></p>
						<p><strong>Work Experience: </strong><?php echo $row["WorkExp"]; ?></p>

						<div class="single-product-form">
								<input type="number" name="quantity" value="1">
								<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ ?>
									<button type="submit" name="add_to_cart"  class="btn btn-outline-dark"><i class="fas fa-arrow-circle-right"></i>  Add to Cart</button>
									<!-- <a href="#" class="cart-btn"><i class="fas fa-angle-right"></i>Book Now</a> -->
									<input type="hidden" name="Item_name" value="<?php echo $row["FullName"]; ?>">
									<input type="hidden" name="Item_img" value="<?php echo $row["SpProfilePic"]; ?>">
									<input type="hidden" name="Item_id" value="<?php echo $row["spid"]; ?>">
									<input type="hidden" name="Fees" value="<?php echo $row["Fees"]; ?>">
									<?php }else {?>
									<a href="login.php" class="btn btn-outline-dark"><i class="fas fa-arrow-circle-right"></i>  Add to Cart</a>
									<?php } ?>
							<!-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
							
							<p><strong>Categories: </strong><?php echo $row["Service"]; ?></p>
						</div>
						<!-- <h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul> -->
					</div>
				</div>
			</div>
		 </form>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Service Providers</h3>
						<p>Other <?php echo $row["Service"]; ?>s</p>
					</div>
				</div>
			</div>
			<div class="row">
					<?php
							$psrv = $row["Service"];
							$sqla = "SELECT * from serviceproviders where Service = '$psrv'";
							$resulta = $con->query($sqla);
							
							if(!$resulta){
								die("Invalid Query:". $con->error);
							}
						
							while($rowa=$resulta->fetch_assoc()){	
								
								$filelc="/".$rowa['SpProfilePic'];
								?>
								<div class="col-lg-4 col-md-6 text-center">
								<div class="single-product-item">
									<!-- insert card  -->
									<form action="product.php" method="POST">
									<div class="details">
										<img src="<?php echo$filelc;?>" alt="" width="220" height="280">
										<h3><?php echo $rowa["FullName"]; ?></h3>
										<p class="product-price"><span>Per Service</span>₹<?php echo $rowa["Fees"] ?>  </p>

					
										<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ ?>
										<button type="submit" name="book_now"  class="btn btn-outline-dark"><i class="fas fa-arrow-circle-right"></i>  Book Now</button>
										<!-- <a href="#" class="cart-btn"><i class="fas fa-angle-right"></i>Book Now</a> -->
										<input type="hidden" name="Item_name" value="<?php echo $rowa["FullName"]; ?>">
										<input type="hidden" name="Item_id" value="<?php echo $rowa["spid"]; ?>">
										<?php }else {?>
										<a href="login.php" class="cart-btn"><i class="fas fa-arrow-circle-right"></i>  Book Now</a>
										<?php } ?>
									</div>
									</form>
									</div>
								</div>
								<?php
							}
						?>
			</div>
		</div>
	</div>
	<!-- end more products -->

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