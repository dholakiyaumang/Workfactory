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

  <!-- Template Main CSS File -->
  <link href="/profile.css" rel="stylesheet">

  
</head>
<body>
<?php include_once('header.php');
  $files=$_FILES['image'];
  $filedest="files/".$_SESSION['name'].".jpg";

?>

<section class="h-200 gradient-form" style="background-color:#1D2F38;">
<br>
<br>
<br>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-20">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-20">
              <div class="card-body p-md-5 mx-md-4">

                    <div class="container">
                        <div class="main-body">
                            <div class="row gutters-sm">
                                <div class="col-md-5 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="align-items-center text-center">
                                            <img src="<?php echo$filedest?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="150" height="150">
                                            <div class="mt-3">
                                            <h4><?php echo $_SESSION['name']; ?></h4>
                                            <h6>Customer Id:<?php echo $_SESSION['cid']; ?></h6>
                                            <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button> -->
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="col-md-15">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $_SESSION['name']; ?>
                                        </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $_SESSION['email']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $_SESSION['phone']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <h6 class="mb-0">Pincode</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $_SESSION['pincode']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $_SESSION['address']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                            
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                             <button type="button" onclick="window.location.href='/updateprofile.php'" class="btn btn-outline-danger">Edit</button>
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
