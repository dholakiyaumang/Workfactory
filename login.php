
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
<?php
session_start();
$showError="false";
include('dbconnection.php');

if(isset($_POST['submit'])){

  $ceml=$_POST['email'];
  $password=$_POST['password'];

  $email_search="SELECT * from customers where Email= '$ceml' ";
  $query= mysqli_query($con,$email_search);
  $email_count= mysqli_num_rows($query);

  $spemail_search="SELECT * from serviceproviders where Email= '$ceml' ";
  $spquery= mysqli_query($con,$spemail_search);
  $spemail_count= mysqli_num_rows($spquery);

  if($email_count){
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass=$email_pass['Password'];
    $_SESSION['cid']=$email_pass['cid'];
    $_SESSION['name']=$email_pass['FullName'];
    $_SESSION['email']=$email_pass['Email'];
    $_SESSION['phone']=$email_pass['PhoneNumber'];
    $_SESSION['address']=$email_pass['Address'];
    $_SESSION['pincode']=$email_pass['Pincode'];
    $_SESSION['propic']=$email_pass['ProfilePic'];

 

    $pass_decode= password_verify($password,$db_pass);

      if($pass_decode){
        ?>
          <script>
            alert("Login Successfully!!");
            location.replace("index.php");
          </script>
        <?php 
        $_SESSION['loggedin'] = true;
        $_SESSION['useremail'] = $ceml;
      }else{
        ?>
          <script>
            alert("Invelid Password!!");
            location.replace("login.php");

          </script>
        <?php 
      }
  }elseif($spemail_count){
    $email_pass = mysqli_fetch_assoc($spquery);

    $db_pass=$email_pass['Password'];
    $_SESSION['spid']=$email_pass['spid'];
    $_SESSION['name']=$email_pass['FullName'];
    $_SESSION['email']=$email_pass['Email'];
    $_SESSION['phone']=$email_pass['PhoneNumber'];
    $_SESSION['service']=$email_pass['Service'];
    $_SESSION['workexp']=$email_pass['WorkExp'];
    $_SESSION['sppropic']=$email_pass['SpProfilePic'];

    $pass_decode= password_verify($password,$db_pass);

      if($pass_decode){
        ?>
          <script>
            alert("Login Successfully!!");
            location.replace("index.php");
          </script>
        <?php 
        $_SESSION['sploggedin'] = true;
        $_SESSION['useremail'] = $ceml;
      }else{
        ?>
          <script>
            alert("Invelid Password!!");
            location.replace("login.php");

          </script>
        <?php 
      }
  }else{
    ?>
      <script>
        alert("Email Doesn't Exists! Please Create An Account!");
        location.replace("signininfo.php");
      </script>
    <?php 
  }


}

?>

<?php include_once('header.php');?>

<section class="h-200 gradient-form" style="background-color:#1D2F38;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h4 class="mt-5 mb-5 pb-1">Log In </h4>
                </div>


                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                  

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email</label>
                    <input   class="form-control"
                      placeholder="email address"name="email" required="true" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password"  class="form-control" 
                     placeholder="Password" name="password" required="true"/>
                  </div>

                  <div class="form-outline mb-4">
                   <input type="submit" value="Login" name="submit" id="submit" style="cursor:pointer">
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    <!-- <p class="mb-0 me-2">Don't have an account?</p> -->
                    <!-- <button type="button" class="btn btn-outline-danger">Create new</button> -->
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <a class="text-muted" href="/signininfo.php">Don't have an account? Register Now</a>

                    
                    <!-- <button type="button" class="btn btn-outline-danger">Create new</button> -->
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <!-- <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                  <img src="/assets/img/login.png" alt="">
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
