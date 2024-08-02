<?php
  include("include/connection.php");
  if(isset($_POST['submit']))
  {
	 $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
   $skills=$_POST['skills'];
   $message=$_POST['message'];
   $myFile=$_POST['myFile'];
$sql=mysqli_query($con,"insert into career(name,email,contact,skills,message,myFile)values(
'$name','$email','$contact','$skills','$message','$myFile')");	
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ARISE-SOFT TECH</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css" media="all" />
	<!-- owl carousel css (for welcome section) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- flexSlider css (for testimonials) -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="index.html">
					<img src="images/145.png" alt=" " class="img-fluid">
				</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="about.html">About</a>
					</li>
					
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="services.html">Services</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="portfolio.html">Portfolio</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="event.html">Event</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="career.html">Career</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-2">
		<div class="container">
		<center><h3 class="aa text-white">ARISE-SOFT TECH</h3></center>
		</div>
	</div>
	<!-- //banner -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Career</li>
    </ol>
<!--career-->
<div class="title-heading text-center mb-sm-5 mb-4">
	<h3 class="title text-capitalize text-dark">Career</h3>
	<p class="title-text font-weight-light font-italic mt-2">Grow your career with us ..</p>
</div>
   <!--/w3l-join-main-->
   <section class="w3l-join-main2 py-5" style="width:100%; height:100%;">
	<div class="container py-md-5 py-4">
		<div class="w3l-project-in">
			<div class="bottom-info">
				<div class="header-section">
					<h2 class="title-subhny two text-white mt-4">.</h2><br>
					<h5 class="title-w3l two mb-2 text-white">.</h5>
					<p class="mb-3">.</p>
					<p class="mb-3">.</p>
					<div class="w3banner-content-btns">

						<a href="" class=" mt-4 text-white" >cs</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--//w3l-join-main-->

<div class="container py-lg-5 py-md-2 py-1 ">
		<div class="title-content text-center">
			<h2 class="title-subhny">Grow Your Career With Arise-Soft Tech. 😊</h2>
			<p class="title-text font-weight-light font-italic">make the bright future with us ..</p>
		</div>
	<!-- contact -->
	<div class="contact-main  w3layouts-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="inner_contact">
				
				<div class="contact-right-grid">
					<div class="wthree-contact-form">
						<form name="contact" netlify>
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" class="email" name="email" placeholder="Email" required="">
							<input type="text"  class="integer" name="contact" placeholder="Contact" required="">
							<input type="text" name="skills" placeholder="skills" required="">
							<textarea name="message" placeholder="Why you want to work with us.?" required=""></textarea>
							<input type="file" id="myFile" name="myFile" placeholder="Upload Your CV" class="text-align:right" >
							<center><input type="submit" value="SUBMIT" id="cc" name="submit"></center>
						</form>
					</div>
				</div>

				
				
			</div>
		</div>
	</div>
</div>
<!-- //contact -->
    	<!-- footer -->
	<div class="mkl_footer text-center py-4">
		<div class="container py-xl-5 py-4">
			<div class="mkls_footer_grid">
				<h2 class="text-white text-capitalize mb-5">Arise-Soft Tech</h2>
				<p>The Ideas That Are Not Afraid To Be Different, Let's Start Work With Arise-Soft Tech Today</p>
				<!-- social icons -->
				
			<!-- //social icons -->
				<!-- footer logo -->
				<div class="logo2 my-sm-5 my-4">
					<a class="" href="index.html">
						<img src="images/145.png" alt=" " class="img-fluid">
					</a>
				</div>
				
				<!-- //footer logo -->
			</div>

			<!-- address -->
			
			<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
				<h2 class="text-white text-capitalize text-center mb-5">Locate US</h2>
				<ul>
					<li>
						<p class="text-white">
							<i class="fas fa-location-arrow mr-2"></i>12 B, 12 B, 5 street 32 BLock-D</p>
					</li>
					<li class="mx-4">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i>+(91) 987654321</p>
					</li>
					<li>
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com" class="text-white mr-3">arisesofttech@gmail.com</a>
						</p>
					</li>
					<li>
						<p class="text-white">
							<i class="fas fa-globe mr-1"></i>
							<a href="mailto:info@example.com" class="text-white">www.arisesofttech.com</a>
						</p>
					</li>
				</ul>
				<div class="footer-social mt-4">
					<div class="copyrighttop">
										
						<ul class="social_list1 text-left"><center>
		
							<li>
								<a href="#" class="facebook1 mx-2 ">
									<i class="fab fa-facebook-f"></i>
		
								</a>
							</li>
							<li>
								<a href="#" class="twitter2 mx-1">
									<i class="fab fa-twitter"></i>
		
								</a>
							</li>
							<li>
								<a href="#" class="instagram mx-2">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#" class="skype  mx-2">
									<i class="fab fa-skype"></i>
								</a>
							</li>
							<li>
								<a href="#" class="linkedin">
									<i class="fab fa-linkedin"></i>
								</a>
							</li>
		
						</center></ul>
		</div>
					</div>
			</div>
			
			<!-- //address -->
		</div>
	</div>
	<!-- //footer -->

	<!-- copyright -->
	<div class="w3l-copy text-center py-4">
		<p class="text-white">© 2023 Arise-Soft Tech. All rights reserved. This Design is Made With the love by
			<a href="http://w3layouts.com/">Tanishq 💗</a>
		</p>
	</div>
	<!-- //copyright -->



	<!-- Js files -->

	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- Owl-Carousel-JavaScript (for welcome section) -->
	<script src="js/owl.carousel.js"></script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
		});
	</script>
	<!-- //Owl-Carousel-JavaScript (for welcome section) -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>
