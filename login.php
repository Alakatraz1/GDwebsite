<!DOCTYPE php>
<php lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content>
<meta name="keywords" content>

<title>Eduka - School, College, University And Courses php5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="preloader">
<div class="loader-book">
<div class="loader-book-page"></div>
<div class="loader-book-page"></div>
<div class="loader-book-page"></div>
</div>
</div>

<?php include('includes/navbar.php')?>




<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="login.php#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Login</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Login</li>
</ul>
</div>
</div>


<div class="login-area py-120">
<div class="container">
<div class="col-md-5 mx-auto">
<div class="login-form">
<div class="login-header">
<img src="assets/img/logo/logo.png" alt>
<p>Login with your eduka account</p>
</div>
<form action="login.php#">
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="Your Password">
</div>
<div class="d-flex justify-content-between mb-4">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="remember">
<label class="form-check-label" for="remember">
Remember Me
</label>
</div>
<a href="forgot-password.php" class="forgot-pass">Forgot Password?</a>
</div>
<div class="d-flex align-items-center">
<button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> Login</button>
</div>
</form>
<div class="login-footer">
<p>Don't have an account? <a href="register.php">Register.</a></p>
</div>
</div>
</div>
</div>
</div>

</main>

<?php include('includes/footer.php')?>




<a href="login.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</php>