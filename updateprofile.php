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
<!-- Database Connection And Update Profile  -->
<?php 
include 'dbconnection.php';

if(isset($_POST['submit'])){

  $files=$_FILES['image'];
  $filename=$_FILES['image']['name'];
  $fileerror=$_FILES['image']['error'];
  $filetemp=$_FILES['image']['tmp_name'];
  move_uploaded_file($filetemp,"files/".$_SESSION['name'].".jpg");
  $filedest="files/".$_SESSION['name'].".jpg";
  
  $cid=$_SESSION['cid'];
  $username=mysqli_real_escape_string($con, $_POST['cname']);
  $ceml=mysqli_real_escape_string($con, $_POST['cemail']);
  $cphone=mysqli_real_escape_string($con, $_POST['cphone']);
  $cpincode=mysqli_real_escape_string($con, $_POST['cpincode']);
  $cadd=mysqli_real_escape_string($con, $_POST['caddress']);


  $updatequery= "UPDATE customers SET FullName='$username',Email='$ceml',PhoneNumber='$cphone',Pincode='$cpincode',Address='$cadd',ProfilePic='$filedest' WHERE cid=$cid";
  $query = mysqli_query($con,$updatequery);
  


      if($query){
        ?>
          <script>
           alert("Updated Successfully!!");
        //    alert("Login Again!!");
           location.replace("profile.php");

          </script>
        <?php
       }else{
        ?>
          <script>
           alert("Failed!!");
          </script>
        <?php
       }

    
  }

?>

<?php include_once('header.php');?>

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
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data"> 

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class=" align-items-center text-center">
                                                
                                                    <img src="<?php echo$filedest?>" alt="Profile Picture" class="rounded-circle p-1 bg-primary" width="150" heignt="200">
                                                    <div class="mt-3">
                                                        <h3><?php echo $_SESSION['name']; ?></h3>
                                                        <h6>Update Profile Photo</h6>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-12 text-secondary">
                                                                <input type="file" class="form-control" name="image" id="file">
                                                            </div>
                                                        </div>
                                                           
                                                        <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                                        <button class="btn btn-primary">Follow</button>
                                                        <button class="btn btn-outline-primary">Message</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-8">
                                                            <h6 class="mb-0">Full Name</h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="cname" value="<?php echo $_SESSION['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-8">
                                                            <h6 class="mb-0">Email</h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="email" class="form-control" name="cemail" id="email" value="<?php echo $_SESSION['email']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-8">
                                                            <h6 class="mb-0">Phone</h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="cphone" maxlength="10" pattern="[0-9]+" value="<?php echo $_SESSION['phone']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-8">
                                                            <h6 class="mb-0">Pincode</h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="cpincode" maxlength="6" pattern="[0-9]+" value="<?php echo $_SESSION['pincode']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-8">
                                                            <h6 class="mb-0">Address</h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="text" class="form-control" name="caddress" value="<?php echo $_SESSION['address']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3"></div>
                                                            <div class="form-outline mb-4">
                                                            <input type="submit" value="Save Change" name="submit" id="submit" style="cursor:pointer">
                                                            </div>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form> 
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
