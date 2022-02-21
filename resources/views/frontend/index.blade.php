@extends('layouts.frontend.front')
@section('front_content')
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">{{$main->title}}</h1>
							<h5 class="text-uppercase">{{$main->sub_title}}</h5>
							<div class="d-flex align-items-center">
								{{-- <a class="primary_btn" href="#"><span>Hire Me</span></a> --}}
								<a class="primary_btn tr-bg" href="{{url($main->resume)}}"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="{{asset('frontend/img/banner/home-right.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================ End Home Banner Area =================-->


		<!--================ Start About Us Area =================-->
		<section class="about_area section_gap">
			<div class="container">
				<div class="row justify-content-start align-items-center">
					<div class="col-lg-5">
						<div class="about_img">
							<img class="" src="{{asset('frontend/img/about-us.png')}}" alt="">
						</div>
					</div>
	
					<div class="offset-lg-1 col-lg-5">
						<div class="main_title text-left">
							<h2>let’s <br>
								Introduce about <br>
								myself</h2>
							<p>
								Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven 
								midst their. Beast creepeth. Fish days.
							</p>
							<p>
								Is give may shall likeness made yielding spirit a itself together created after sea 
								is in beast beginning signs open god you're gathering whose gathered cattle let. 
								Creature whales fruit unto meat the life beginning all in under give two.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End About Us Area =================-->
	
		<!--================ Start Resume Area =================-->
		<section class="portfolio_details_area section_gap">
			<div class="container">
				<div class="portfolio_details_inner">
					<div class="row">
						<div class="offset-lg-1 col-lg-5">
							<div class="main_title text-left">
								<h2>Jobs</h2>
									<div class="portfolio_right_text mt-30">
										<h3 class="text">Jr. Software Developer</h3>
										<ul class="list">
											<li><span>Company</span>: Zaman IT</li>
											<li><span>Status</span>: Sep 2021, Present</li>
										</ul>
									</div>
								
									<div class="portfolio_right_text mt-30">
										<h3 class="text">Jr. Software Developer</h3>
										<ul class="list">
											<li><span>Company</span>: Micro Asia Ltd.</li>
											<li><span>Status</span>: Nov 2020, Feb 2021</li>
										</ul>
									</div>
							</div>
						</div>
					   
						<div class="main_title text-left">
							<h2>Education</h2>
								<div class="portfolio_right_text mt-30">
									<h3 class="text">B.Sc in CSE</h3>
									<ul class="list">
										<li><span>Instituation</span>: Bangladesh Army University of Engineering & Technology</li>
										<li><span>Duration</span>: 2016 - 2019</li>
									</ul>
								</div>
								<div class="portfolio_right_text mt-30">
									<h3 class="text">HSC in Science</h3>
									<ul class="list">
										<li><span>Instituation</span>: Rajshahi Government City College</li>
										<li><span>Duration</span>: 2012 - 2014</li>
									</ul>
								</div>
								<div class="portfolio_right_text mt-30">
									<h3 class="text">SSC in Science</h3>
									<ul class="list">
										<li><span>Instituation</span>: Rajshahi B. B. Hindu Academy</li>
										<li><span>Duration</span>: 2010 - 2012</li>
									</ul>
								</div>
						</div>
						<a class="primary_btn" href="{{url($main->resume)}}" style="margin-left:40%; margin-top:40px"><span>Download CV</span></a>
	
	
					</div>
				</div>
			</div>
	
		</section>
		<!--================ End Resume Area =================-->
	
		<!--================ Start Features Area =================-->
		<section class="features_area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 text-center">
						<div class="main_title">
							<h2>service offers </h2>
							<p>
								Is give may shall likeness made yielding spirit a itself togeth created 
								after sea <br> is in beast beginning signs open god you're gathering ithe
							</p>
						</div>
					</div>
				</div>
				<div class="row feature_inner">
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="{{asset('frontend/img/services/s1.png')}}" alt="">
							<h4>Wp developing</h4>
							<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="{{asset('frontend/img/services/s2.png')}}" alt="">
							<h4>UI/ux design</h4>
							<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="{{asset('frontend/img/services/s3.png')}}" alt="">
							<h4>Web design</h4>
							<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="{{asset('frontend/img/services/s4.png')}}" alt="">
							<h4>seo optimize</h4>
							<p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Features Area =================-->
	
		<!--================Start Portfolio Area =================-->
		<section class="portfolio_area" id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="main_title text-left">
							<h2>quality work <br>
								Recently done project </h2>
						</div>
					</div>
				</div>
				<div class="filters portfolio-filter">
					<ul>
						<li class="active" data-filter="*">all</li>
						<li data-filter=".popular">popular</li>
						<li data-filter=".latest"> latest</li>
						<li data-filter=".following">following</li>
						<li data-filter=".upcoming">upcoming</li>
					</ul>
				</div>
		
				<div class="filters-content">
					<div class="row portfolio-grid justify-content-center">
						<div class="col-lg-4 col-md-6 all latest">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p1.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p1.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">minimal design</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all popular">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p2.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p2.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">Paint wall</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all latest">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p3.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p3.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">female light</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all popular">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p4.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p4.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">fourth air</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all following">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p6.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p5.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">together sign</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all upcoming">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p5.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p6.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">multiply fowl</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all upcoming following">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p7.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p7.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">green heaven</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all following">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p8.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p8.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4>fly male</h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 all upcoming">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="{{asset('frontend/img/portfolio/p9.jpg')}}" alt="">
									<div class="overlay"></div>
									<a href="{{asset('frontend/img/portfolio/p9.jpg')}}" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="portfolio-details.html">season face</a></h4>
									<p>Animated, portfolio</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Portfolio Area =================-->
	
	
		<!--================ Start Newsletter Area =================-->
		<section class="newsletter_area">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-12">
						<div class="subscription_box text-center">
							<h2 class="text-uppercase text-white">get update from anywhere</h2>
							<p class="text-white">
								Bearing Void gathering light light his eavening unto dont afraid. 
							</p>
							<div class="subcribe-form" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
									<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
									<button class="primary-btn hover d-inline">Get Started</button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Newsletter Area =================-->
	

@endsection