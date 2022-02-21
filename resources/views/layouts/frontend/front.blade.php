<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('frontend/img/favicon.png')}}" type="image/png">
	<title>Antarip Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>

<body>



	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{route('home')}}"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									<li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->
    @yield('front_content')


	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="#" target="_blank"><i class="fa  fa-linkedin"></i></a>
							<a href="#" target="_blank"><i class="fa  fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-buysellads" aria-hidden="true"></i> by <a href="https://antarip.xyz" target="_blank">Antarip</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/stellar.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('frontend/js/gmaps.min.js')}}"></script>
	<script src="{{asset('frontend/js/theme.js')}}"></script>
</body>

</html>