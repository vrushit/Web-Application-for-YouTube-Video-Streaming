<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">MS University</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#top">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials">Tutorials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">About Us</a>
      </li>
      
      <li class="nav-item">
      	<a href="Login.php"><button type="button" class="btn btn-primary btn-lg">login</button></a>
      </li>
    </ul>
  </div>
</nav>
	
</section>
<!---------------------Banner Section---------------------->
<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="promo-title">MS University</p>
				<p>Aquire Knowledge of B.ed and M.ed
				</p>
				<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> 
			</div>
			<div class="col-md-6 text-center">
				<img src="https://cdn.uconnectlabs.com/wp-content/uploads/sites/5/2017/12/20170301155447.jpg" class="img-fluid">
			</div>
		</div>
	</div>

</section>
<!------------Services Section--------------------->

<!------------About Us-------------------->

<!--------------------Testimonials----------------------->
							<?php 
$mysqli = new mysqli("127.0.0.1:3307","root","","facultydetails") or die (mysqli_error($mysqli));

$result =  $mysqli->query("SELECT * FROM facultyData") or die ($mysqli->error);

//pre_r($result->fetch_assoc());

?>
<section id="testimonials">
	<div class="container">
		<h1 class="title text-center">Faculty Members</h1>
		<div class="row offset-2">


			<a href="studentenglish.php" style="margin-left: 30px;">
			<div class="col-md-9 testimonials" onmouseover="onmouse()">


				<img src="Image.png" style="width: 100px;height: 80px;">
				<p class="user-details"><b>English</b></p>
				
			</div>
			</a>
			
		
		


			<a href="studentmath.php">
			<div class="col-md-9 testimonials" onmouseover="onmouse()">


				<img src="Image.png" style="width: 100px;height: 80px;">
				<p class="user-details"><b>Maths</b></p>
				
			</div>
			</a>
			
		
		</div>
	</div>
	
</section>
<!-------------------------Social Media------------------>
<section id="socialmedia">
	<div class="container text-center">
		<h4>FIND US ON SOCIAL MEDIA</h4>
<div class="social-icons row offset-3">
	<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

	</div>
	
</section>

<!-----------------Footer Section--------->
<section id="footer">
<div class="container">
<div class="row">
	<div class="col-md-4 footer-box">
		
</div>
<div class="col-md-4 footer-box">
		<p><b>CONTACT US</b></p>
		<p><i class="fa fa-map-marker" aria-hidden="true"></i>MS University, Vadodara</p>
		<p><i class="fa fa-mobile" aria-hidden="true"></i>`11123456789</p>
		<p><i class="fa fa-envelope" aria-hidden="true"></i>msu@ac.in</p>

</div>
<div class="col-md-4 footer-box">
		<p><b>REVIEW-US</b></p>
		
		Content:<br>
		Excellent:<input type="checkbox" name="Excellent"><br>
		Very Good:<input type="checkbox" name="VeryGood"><br>
		Average:<input type="checkbox" name="Average"><br>
		Bad:<input type="checkbox" name="Bad"><br>
		<input type="email" class="form-control" placeholder="Your Email"><br>
		<button type="button" class="btn btn-primary">Submit</button>
		
</div>
	</div>
	<hr>
<p class="copyright">@Copyright 2019</p>

</section>



<!--------------------Smooth Scroll------------------------>
<script src="smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>


</body>
</html>