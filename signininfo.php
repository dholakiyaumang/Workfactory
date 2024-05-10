<?php
session_start();
error_reporting(0);
include('header.php');
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

  <!-- Template Main CSS File -->
  <link href="assets\css\style.css" rel="stylesheet">

  
</head>
<body>
<section class="h-200 gradient-form" style="background-color:#1D2F38;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">

        <div class="card rounded-3 text-black">
          <div class="text-center ">
            <h2 class="mt-5 mb-5 pb-1 ">Create An Account</h2>
          </div>
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="d-flex align-items-center justify-content-center pb-4">
                    <img src="/assets/img/customer.png" alt="">
                  </div>
                     <div class="d-flex align-items-center justify-content-center pb-4">
                       <a class="text-muted" href="#!"><h4> Get Service </h4></a>
                      </div>
                      <div class="d-flex align-items-center justify-content-center pb-4">
                       <button type="button"onclick="window.location.href='/register.php'" class="btn btn-outline-danger">Register Now</button>
                      </div>
              </div>
            </div>
            <div class="card-body p-md-5 mx-md-4">
               <div class="d-flex align-items-center justify-content-center pb-4">
                  <img src="/assets/img/employee.png" alt="">
                </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                   <a class="text-muted" href="#!"><h4>Give Service</h4></a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                   <button type="button" onclick="window.location.href='/register1.php'" class="btn btn-outline-danger">Join Now</button>
                  </div>   
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<?php include_once('footer.php');?>

</html>
