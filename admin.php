<?php
session_start();
$usersessionemail = $_SESSION['email'];
?>
<?php
if (isset($usersessionemail)){
	echo '	
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gifted and Talented Academy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mr. Dex" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="Mr. Dex" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.gta.com.ng</p>
						<p class="num">Call: +234 806 271 9674</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html"><img src="images/GTA.jpg" width="80" height="60">GTA</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="teacher.html">Teacher</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>

							

							<li class="btn-cta"><a href="login/login.html"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
</br>

<div class="container">
    <div class="row header">
      <h1>Admin Add USER &nbsp;</h1>
      <h3>Fill out the form below for new student or staff</h3>
    </div>
    <div class="row body">
      <form action="connections/admin.php" method="post">
        <ul>
          	<p>
              <label for="email">Email <span class="req">*</span></label>
              <input type="email" name="email" placeholder="Gta@yahoo.com" required/>
            </p>
            <p class="left">
              <label for="password1">Password</label>
              <input type="password" name="password1" placeholder="password" required/>
            </p>
            <p class="left">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" placeholder="password" required/>
              </p>
            <p class="left">
              <label for="first_name">First name</label>
              <input type="text" name="first_name" placeholder="John" required/>
            </p>
            <p class="left">
              <label for="first_name">Other names</label>
              <input type="text" name="other_names" placeholder="John" />
            </p>
            <p class="left">
              <label for="last_name">Last name</label>
              <input type="text" name="last_name" placeholder="Smith" required/>      
            </p>
              <p class="right">
              <label for="last_name">Date of Birth</label>
              <input type="date" name="date_of_birth" placeholder="09/05/2013" required/>      
            </p>
            <p class="left">
              <label for="last_name">Nationality</label>
              <input type="text" name="nationality" placeholder="Nigerian, Ghanian etc." required/>      
            </p>
            <p class="left">
              <label for="last_name">City of birth</label>
              <input type="text" name="city_of_birth" placeholder="FCT" required/>      
            </p>
			<p class="left">
				<label for="student_class">Class</label>
				<select name="class" id="student_class" required>
					  <option value="creche">Creche</option>
					  <option value="nur1">NURSERY 1</option>
					  <option value="nur2">NURSERY 2</option>
					  <option value="nur3">NURSERY 3</option>
					  <option value="pri1">PRIMARY 1</option>
					  <option value="pri2">PRIMARY 2</option>
					  <option value="pri3">PRIMARY 3</option>
					  <option value="pri4">PRIMARY 4</option>
					  <option value="pri5">PRIMARY 5</option>
					  <option value="pri6">PRIMARY 6</option>
					  <option value="jss1">JUNIOR SECONDARY SCHOOL 1</option>
					  <option value="jss2">JUNIOR SECONDARY SCHOOL 2</option>
					  <option value="jss3">JUNIOR SECONDARY SCHOOL 3</option>
					  <option value="ss1">SENIOR SECONDARY SCHOOL 1</option>
					  <option value="ss2">SENIOR SECONDARY SCHOOL 2</option>
					  <option value="ss3">SENIOR SECONDARY SCHOOL 3</option>
				</select>      
			  </p>
            <p class="left">
              <label for="gender">Gender</label>
              <select name="gender" id="gender-select" required>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="Non-binart">NON-BINARY</option>
              </select>      
            </p>
          
            <label for="comments">comment on student</label></br>
            <textarea cols="46" rows="4" name="comments" required></textarea>
        
        </br>
            <input class="btn btn-primary" type="submit" value="Submit" name="submit"/>
          
        </ul>
      </form>  
    </div>
  </div>

</br>

	';
	include "admin.html";
}
else{
	header("Location:connections/login.php");
}
?>