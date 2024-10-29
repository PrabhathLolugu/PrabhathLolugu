<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>ResolveHub</title>

  

</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 ">
    <a href="index.php" class="navbar-brand">ResolveHub</a>
    <!-- <span class="navbar-text">Customer's Happiness is our Aim</span> -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Aboutus" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Register Here</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Home Page -->


  <div class="container myclass mainHeading bg-secondary" style="min-height:80vh;  display:flex; align-items:center;justify-content:center;">
  <div >
      <h1 class="text-uppercase text-light font-weight-bold">Welcome to ResolveHub</h1>
      <p class="font-italic text-light">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
  </div>
      
  </div>

  


  <!-- Starting AboutUs -->
<div class="border-bottom " id="Aboutus" style="padding-top:5vh; " >
  <?php include('aboutus.php') ?>
<!-- Ending AboutUs -->


  <!-- Start Services -->
  <div class="container text-center border-bottom " id="Services"  >
  <div class="alert alert-secondary text-center pb-0" role="alert"> <h3 >Our Services</h3>
  </div>
  <div class="row mt-4">
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
      <h4 class="mt-4">Electronic Appliances</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
      <h4 class="mt-4">Preventive Maintenance</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
      <h4 class="mt-4">Fault Repair</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-bolt fa-8x text-warning"></i></a>
      <h4 class="mt-4">Electrical failures</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-wrench fa-8x text-danger"></i></a>
      <h4 class="mt-4">Instrumentation and control system malfunctions</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-robot fa-8x text-secondary"></i></a>
      <h4 class="mt-4">Automation system glitches</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-tools fa-8x text-dark"></i></a>
      <h4 class="mt-4">Mechanical breakdowns</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-exclamation-triangle fa-8x text-info"></i></a>
      <h4 class="mt-4">Process deviations</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-wifi fa-8x text-success"></i></a>
      <h4 class="mt-4">Communication and connectivity issues</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-laptop fa-8x text-primary"></i></a>
      <h4 class="mt-4">Software and IT infrastructure problems</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-leaf fa-8x text-success"></i></a>
      <h4 class="mt-4">Environmental monitoring and control</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-lock fa-8x text-danger"></i></a>
      <h4 class="mt-4">Data management and cybersecurity</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-link fa-8x text-secondary"></i></a>
      <h4 class="mt-4">Integration challenges</h4>
    </div>
    <div class="col-sm-4 mb-4">
  <a href="#"><i class="fas fa-plug fa-8x text-primary"></i></a>
  <h4 class="mt-4">Electronic Devices</h4>
</div>

  </div>
</div> <!-- End Services -->


  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

 

  <!--Start Contact Us-->
  <div class="container " id="Contact">
    <!--Start Contact Us Container-->
    <div class="alert alert-secondary text-center pb-0" role="alert"><h3>Contact Us</h3>
  </div>
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center " style="display:flex; justify-content:center;flex-direction:column;">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> 
          Rashtriya Ispat Nigam Ltd.,<br> 
       (CIN: U27109AP1982GOI003404)
       Administrative Building, Visakhapatnam Steel Plant, Visakhapatnam - 530031,<br>
       Andhra Pradesh, India.
        <a href="#" target="_blank">www.ResolveHub.com</a> <br>

      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="https://www.facebook.com/ResolveHub" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href=" https://www.twitter.com/ResolveHub" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/ResolveHub" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
          <a href="https://www.ResolveHub.com" target="_blank" class="pr-2 fi-color"><i class="fab fa-google"></i></a>

          
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small style="color: crimson;"> Controls BY Vizag Steel Plant &copy; 2023.</small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>