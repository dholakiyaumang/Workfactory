<?php 
session_start();
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
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>

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
	<link rel="stylesheet" href="card.css">
	<!-- <link rel="stylesheet" href="card.js"> -->
	<?php 
	include 'dbconnection.php';
	include 'header.php'; ?>

 <div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h2>Plumbers</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</head>
<body>


	<div class="container">
		<div class="row">
			<!-- products -->
			<?php    
				$sql = "SELECT * from serviceproviders where Service = 'plumber'";
                $result = $con->query($sql);
				
                if(!$result){
                    die("Invalid Query:". $con->error);
                }
			?>
				
				<?php
					while($row=$result->fetch_assoc()){
						$filelc="/".$row['SpProfilePic'];
						?>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="single-product-item">
								<!-- insert card  -->
								<form action="product.php" method="POST">
								<div class="details">
									<img src="<?php echo$filelc;?>" alt="" width="220" height="280">
									<h3><?php echo $row["FullName"]; ?></h3>
									<p class="product-price"><span>Per Service</span>₹<?php echo $row["Fees"] ?>  </p>

				
									
									<button type="submit" name="book_now"  class="btn btn-outline-dark"><i class="fas fa-arrow-circle-right"></i>  Book Now</button>
									<!-- <a href="#" class="cart-btn"><i class="fas fa-angle-right"></i>Book Now</a> -->
									<input type="hidden" name="Item_name" value="<?php echo $row["FullName"]; ?>">
									<input type="hidden" name="Item_id" value="<?php echo $row["spid"]; ?>">
								
								</div>
							</div>
						</div>
						</form>
						<?php
					}
				?>	
		</div>					
	</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a class="active" href="#">1</a></li>
							<!-- <li><a class="active" href="#">2</a></li> -->
							<!-- <li><a href="#">3</a></li> -->
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>

	
<!-- end products -->


</body>
<?php include_once('footer.php');?>

</html>