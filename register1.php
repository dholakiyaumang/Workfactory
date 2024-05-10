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
  <link href="/css/style.css" rel="stylesheet">

  
</head>
<body>
<?php 
include 'dbconnection.php';
if(isset($_POST['submit'])){

  $files=$_FILES['spimage'];
  $filename=$_FILES['spimage']['name'];
  $fileerror=$_FILES['spimage']['error'];
  $filetemp=$_FILES['spimage']['tmp_name'];
  move_uploaded_file($filetemp,"files/".$filename);
  $filedest="files/".$filename;
  
  $username=mysqli_real_escape_string($con, $_POST['spname']);
  $speml=mysqli_real_escape_string($con, $_POST['spemail']);
  $spphone=mysqli_real_escape_string($con, $_POST['spphone']);
  $spsrvs=mysqli_real_escape_string($con, $_POST['services']);
  $spwexe=mysqli_real_escape_string($con, $_POST['experience']);
  $spfees=mysqli_real_escape_string($con, $_POST['fees']);
  $spdis=mysqli_real_escape_string($con, $_POST['discription']);
  $pass=mysqli_real_escape_string($con, $_POST['sppassword']);
  $cpass=mysqli_real_escape_string($con, $_POST['csppassword']);

  $hpass=password_hash($pass, PASSWORD_BCRYPT);
  $hcpass=password_hash($cpass, PASSWORD_BCRYPT);

  $emailquery= "SELECT * FROM customers WHERE Email='$speml'";
  $query = mysqli_query($con,$emailquery);
  
  $emailcount = mysqli_num_rows($query);
  if($emailcount>0){
    ?>
      <script>
       alert("Email Already Exists! Please Login!");
      </script>
    <?php
  }else{
    if($pass===$cpass){
      
      $insertquery = "INSERT INTO serviceproviders(FullName, Email, PhoneNumber, SpProfilePic, Service, WorkExp, Fees, Discription, Password, ConfirmPass) VALUES ('$username','$speml','$spphone','$filedest','$spsrvs','$spwexe','$spfees','$spdis','$hpass','$hcpass')";
      $iquery = mysqli_query($con,$insertquery);

      if($iquery){
        ?>
          <script>
           alert("Registered Successfully!!");
           location.replace("login.php");

          </script>
        <?php
       }else{
        ?>
          <script>
           alert("Registration Failed!!");
          </script>
        <?php
       }

    }else{
     ?>
      <script>
        alert("Password And Confirm Password Does't Match");
      </script>
     <?php
    }
  }


}

?>
<?php include('header.php');?>

<section class="h-200 gradient-form" style="background-color: #1D2F38;">

<br>
<br>
<br>

  <div class="container py-5 h-200">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <h4 class="mt-5 mb-5 pb-1">Create An Account</h4>
                </div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Full Name:</label>
                      <input type="name" class="form-control"
                        placeholder="Enter your full name"name="spname" required="true" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email:</label>
                      <input type="email" class="form-control"
                        placeholder="Enter email address"name="spemail" id="email" required="true" onBlur="userAvailability()">
                        <span id="user-availability-status1" style="font-size:12px;"></span>
                    </div>


                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Phone Number:</label>
                      <input type="phonenumber"  class="form-control"
                        placeholder="Enter Phone number" name="spphone" maxlength="10" pattern="[0-9]+" required="true"/>
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Profile Photo</label>
                      <input type="file" class="form-control" name="spimage" id="file" required="true">
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="occupation-select">Select Service:</label>
                          <select name="services" id="occupation-select"  required="true">
                              <option value="">--Please choose an option--</option>
                              <option value="barber">Barber</option>
                              <option value="carpenter">Carpenter</option>
                              <option value="electrician">Electrician</option>
                              <option value="mechanic">Mechanic</option>
                              <option value="plumber">Plumber</option>
                              <option value="repairservice">Repair Service</option>
                              <option value="other">Other</option>
                          </select>
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="occupation-select">Work Experience:</label>
                          <select name="experience" id="experience-select"  required="true">
                              <option value="">--Please choose an option--</option>
                              <option value="0-1 year">0-1 Years</option>
                              <option value="1-3 years">1-3 Years</option>
                              <option value="3-5 years">3-5 Years</option>
                              <option value="5+ years">5+ Years</option>
                          </select>
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Your Fees:₹</label>
                      <input type="text"  class="form-control" 
                      placeholder="Enter your fees per service" name="fees" required="true"/>
                    </div>
                    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">About Your Self:</label>
                    <textarea id="discription" name="discription"rows="5" cols="33" placeholder='Describe your self....' required="true"></textarea>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Create Password:</label>
                      <input type="password" class="form-control" 
                      placeholder="Create Password"name="sppassword" required="true" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Confirm Password:</label>
                      <input type="password"class="form-control" 
                      placeholder="Confirm Password" name="csppassword" required="true"/>
                    </div>


                      <div class="form-outline mb-4">

                       <input type="submit" value="Join Now" name="submit" id="submit" style="cursor:pointer">
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                    <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                      <!-- <p class="mb-0 me-2">Don't have an account?</p> -->
                      <!-- <button type="button" class="btn btn-outline-danger">Create new</button> -->
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                    <a class="text-muted" href="/login.php">Already have an account? Login</a>
                      
                      <!-- <button type="button" class="btn btn-outline-danger">Create new</button> -->
                    </div>
                </form>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-3 p-md-4 mx-md-3">
                <img src="/assets/img/signin.png" alt="">
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
