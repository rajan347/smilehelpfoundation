<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
 @media (max-width: 480px){
.slick-next, .slick-prev {
    width: 40px;
    display: none !important;
    height: 40px;

} 	
.hfs{
	font-size:15px !important;
}	
}
.mu-footer-top {
    background-color: #0d101d !important;
    display: inline;
    float: left;
    padding: 55px 0;
    width: 100%;
}

  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AeronauIT : Web Design and Development Company in Bangalore, Web Design Company Bangalore, Web Development Company Bangalore, Web Designing Company Bangalore, Web Design and Development Companies in Bangalore</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('public/aeronauit/assets/aeronauit.png')}}"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="{{ asset('public/aeronauit/assets/css/slick.css')}}" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="{{ asset('public/aeronauit/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    

    <!-- Main Style -->
    <link href="{{ asset('public/aeronauit/assets/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
 
 
	</head>
  <body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="#"><span>AeronauIT</span></a>
				<!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="{{ asset('public/aeronauit/assets/images/logo.png')}}" alt="logo"></a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <!-- <li class="nav-item">
			        <a href="index.html">Home</a>
			      </li>
			      <li class="nav-item active"><a href="about-us.html">About us</a></li>
			      <li class="nav-item"><a href="services.html">Services</a></li>
			      <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
			       <li class="nav-item dropdown">
				        <a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Blog
				        </a>
				       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="blog.html">Blog Archive</a>
				          <a class="dropdown-item" href="blog-single.html">Blog Single</a>
				        </div>
				    </li>
			        <li class="nav-item"><a href="contact.html">Contact us</a></li> -->
			        <li class="nav-item"><a href="#" data-toggle="modal" data-target="#myModal">Enquiry</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{ asset('public/aeronauit/assets/images/web1.jpg')}}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1 class="hfs">Welcome to AeronauIT</h1>
									<p>We are one of the most experienced and trusted Web Design & Web Development Company.We have experienced professional people from designing a simple website to robust web application development, crafting a digital campaign & SEO.</p>
									<a class="mu-primary-btn" href="#">Make Your Website Here<span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{ asset('public/aeronauit/assets/images/web2.jpg')}}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1 class="hfs">We Promote Your Business</h1>
									<p>There's much we can accomplish as a website designers  - from providing unique, high impact and creative website design services our trained web designers also pay attention to cost effective.</p>
									<a class="mu-primary-btn" href="#">Make Your Website Here <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			
		</div>
	</div>
	<!-- End Slider area -->
@if(session()->has('message'))
<script type="text/javascript">
document.getElementById("myModale").openModal();
</script>
    

<!-- The Modal -->
<div class="modal" id="myModale">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
    <!--     <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     -->  </div>

      <!-- Modal body -->
      <div class="modal-body">
   
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

@endif
	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Who we are</h2>
										<p>AeronauIT is a one-stop full-service web design & web Developed company providing website design all.</p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="{{ asset('public/aeronauit/assets/images/about-us.jpg')}}" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Our Mission</h3>
												<p>We strive to deliver value in our service, and to understand with respect all of our clients needs and to provide a partnership that is created when we host our clients web services, develop their site.</p>
											</li>
											<li>
												<h3>Our Vision</h3>
												<p>AeronauIT is to be the largest global mobile/web development company. Focused on constant innovation as our key for achieving the ultimate goal of success and emerge as globally recognized company by providing the superior quality services and solutions.</p>
											</li>
											<!-- <li>
												<h3>Our Valuse</h3>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li> -->
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>This is a simple AeronauIT unit, a simple style</h2>
								<p>  Creating powerful web presence is the popular service.</p>
							</div>
							<a href="#" class="mu-primary-btn mu-quote-btn">Make Your Website Here<i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Our exclusive services</h2>
										
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>E-Commerce</h3>
														<p>Let your product sales go ascent by presenting them in an online platform today with an eCommerce website design that comes with the latest features like fully customizable user-friendly interface and highly secured payment gateway integrations setup.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Social Marketing</h3>
														<p>Let grow your business through social media marketing to promote your product or services on social media platforms like facebook, twitter, linkedin, etc and reach more audiences to build your brand awareness, drive website traffic, increase sales and generate leads.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Web Design</h3>
														<p>It is good to invest in web design for your business as it creates consistency and the first impression about the brand and customer service and builds trust with the audience.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Web Development</h3>
														<p>A business executed with a web application would be well-collaborated and provide sound communication with the customers.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Mobile App</h3>
														<p>We offer a full cycle of application design, integration and management services. Whether it is a consumer oriented app or a transformative enterprise-class solution, the company leads the entire mobile app development process from ideation and concept to delivery, and to ongoing ongoing support.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Always Support</h3>
														<p>You need not go anywhere for different purposes. We are always capable for support you.</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->

		<!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Our Recent Project</h2>
										<p>some project list .</p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									<!-- <div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
							                <li class="active" data-filter="all">All<span>/</span></li>
							                <li data-filter="1">Web design<span>/</span> </li>
							                <li data-filter="2">Mobile Development<span>/</span></li>
							                <li data-filter="3">E-commerces<span>/</span></li>
							                <li data-filter="4"> Others<span>/</span> </li>
							                
							            </ul>
									</div> -->

									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
							                   <a target="_blank" href="https://smilehelpfoundation.com" title="">
								                   	<img class="img-responsive" src="{{ asset('public/aeronauit/assets/images/Capture3.jpg')}}" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">Web Developement / Design </h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>


							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
							                    <a target="_blank" class="" href="http://innovativeideas.org.in" title="">
							                    	<img class="img-responsive" src="{{ asset('public/aeronauit/assets/images/Capture4.jpg')}}" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">Web Design</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                    <a target="_blank" href="https://www.jokesforsmilehehe.com" title="WEB DESIGN">
							                    	<img class="img-responsive" src="{{ asset('public/aeronauit/assets/images/Capture2.jpg')}}" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">Web Developement / Design</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                

							            </div>
									</div>
									<!-- End Portfolio Content -->
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio -->

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-suitcase"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="14">0</div>
												<h5 class="mu-counter-name">Project</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-user"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="17">0</div>
												<h5 class="mu-counter-name">Clients</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-coffee"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="21">0</div>
												<h5 class="mu-counter-name">Stuff</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-clock-o"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="79">0</div>
												<h5 class="mu-counter-name">Day</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->


		<!-- Start Client Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<h2>What Our Client Says</h2>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<!-- <img class="mu-rt-img" src="{{ asset('public/aeronauit/assets/images/traveler-1.jpg')}}" alt="img"> -->
										<p> Thank you for excellent service you provide for our company website. I am amazed at the personal and the prompt attention you give to my requests.
</p>
										<h5 class="mu-rt-name">Pankaj Kumar</h5>
									<!-- 	<span class="mu-rt-title">Web Developer </span> -->
									</li>

									<li>
										<!-- <img class="mu-rt-img" src="{{ asset('public/aeronauit/assets/images/traveler-2.jpg')}}" alt="img"> -->
										<p>

Having worked very closely with smile help foundation, We are able to recommend them as a true industry leader in the world of internet. I recommend AeronauIT.</p>
										<h5 class="mu-rt-name">Raja Kumar / Annie Kumari</h5>
										<!-- <span class="mu-rt-title">UI/UX Designer</span>
 -->									</li>

									<li>
										<!-- <img class="mu-rt-img" src="{{ asset('public/aeronauit/assets/images/traveler-3.jpg')}}" alt="img"> -->
										<p>I recommend AeronauIT. jokes for smile hehe website its looking good.and always support.</p>
										<h5 class="mu-rt-name">yuvika kumari / Rahi kumar</h5>
										<!-- <span class="mu-rt-title">Web Designer </span> -->
									</li>
									

								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Client Testimonials -->

		<!-- Start from blog -->
		<!-- <section id="mu-from-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-from-blog-area"> -->
							<!-- Title -->
							<!-- <div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>From Our Blog</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-from-blog-content">
										<div class="row">
											<div class="col-md-4">
												<article class="mu-blog-item">
													<a href="#"><img src="{{ asset('public/aeronauit/assets/images/blog-img-1.jpg')}}" alt="blgo image"></a>
													<div class="mu-blog-item-content">
														<ul class="mu-blog-meta">
															<li>BY: ADMIN </li>
															<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
															<li><i class="fa fa-heart-o"></i>250</li>
														</ul>
														<h2 class="mu-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
														<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</article>
											</div>
											<div class="col-md-4">
												<article class="mu-blog-item">
													<a href="#"><img src="{{ asset('public/aeronauit/assets/images/blog-img-2.jpg')}}" alt="blgo image"></a>
													<div class="mu-blog-item-content">
														<ul class="mu-blog-meta">
															<li>BY: ADMIN </li>
															<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
															<li><i class="fa fa-heart-o"></i>250</li>
														</ul>
														<h2 class="mu-blog-item-title"><a href="#">Vestibulum lacinia elit sed elit ultrices consequat.</a></h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
														<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</article>
											</div>
											<div class="col-md-4">
												<article class="mu-blog-item">
													<a href="#"><img src="{{ asset('public/aeronauit/assets/images/blog-img-3.jpg')}}" alt="blgo image"></a>
													<div class="mu-blog-item-content">
														<ul class="mu-blog-meta">
															<li>BY: ADMIN </li>
															<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
															<li><i class="fa fa-heart-o"></i>250</li>
														</ul>
														<h2 class="mu-blog-item-title"><a href="#">Aliquam consectetur sem sed ante semper, ut convallis risus ullamcorper.</a></h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
														<a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End from blog -->

		<!-- Start Newsletter -->
<!-- 		<section id="mu-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-newsletter-area">
							 Title -->
							<!-- <div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Subscribe Our newsletter</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-newsletter-content">
										<form class="mu-subscribe-form">
											<input type="email" placeholder="Write your e-mail here">
											<button class="mu-subscribe-btn">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --> 
		<!-- End Newsletter -->

		<!-- Start Clients -->
<!-- 		<div id="mu-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-clients-area">

							Start Clients brand logo -->
<!-- 							<div class="mu-clients-slider">

								<div class="mu-clients-single">
									<img src="{{ asset('public/aeronauit/assets/images/client-brand-1.jpg')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('public/aeronauit/assets/images/client-brand-2.jpg')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-3.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-4.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-5.jpg" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/client-brand-6.jpg" alt="Brand Logo">
								</div>
							</div>
							 End Clients brand logo -->

						<!-- </div>
					</div>
				</div>
			</div>
		</div>
 -->		<!-- End Clients -->
<!-- 
	</main> --> 
	 
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer">
		<div class="mu-footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="mu-single-footer">
							<img class="mu-footer-logo" src="{{ asset('public/aeronauit/assets/aeronauit.png')}}" alt="logo">
							<p>Our highly skilled team of amateur and passionate design architects have made it possible to excel in the venture with their dedicated endeavors to strive through and deliver the output within the deadline and complete satisfaction. </p>
							
						</div>
					</div>
					<div class="col-md-4">
						<div class="mu-single-footer">
							<h3>Follow Social link</h3>
							<div class="mu-social-media">
								<a href="https://www.facebook.com/Aeronauit"><i class="fa fa-facebook"></i></a>
								<a class="mu-youtube" href="https://www.instagram.com/aeronauit/"><i class="fa fa-instagram"></i></a>
								<a class="mu-twitter" href="https://twitter.com/aeronauit"><i class="fa fa-twitter"></i></a>
                                <a class="" href="https://www.linkedin.com/in/aeronauit-63046018b/"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>

					
					<div class="col-md-4">
						<div class="mu-single-footer">
							<h3>Contact Information</h3>
							<ul class="list-unstyled">
							  <li class="media">
							    <span class="fa fa-home"></span>
							    <div class="media-body">
							    	<p>Btm Layout ,Banglore , Karnataka</p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-phone"></span>
							    <div class="media-body">
							       <a href="tel:+918792126994"><p>+91 8792126994</p></a>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-envelope"></span>
							    <div class="media-body">
							     <a href="mailto:aeronauit@smilehelpfoundation.com"><p>aeronauit@smilehelpfoundation.com</p></a>
							     
							    </div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="" target="_blank" style="color: #3dacef;">AeronauIT</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->
	<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enquiry Purpose</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
<form action="{{route('enquiryaeronauit')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"   placeholder="Enter name" id="" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Phone" id="" required>
  </div>
  <div class="form-group">
    <label for="phone">Subject:</label>
    <input type="text" class="form-control" name="subject" placeholder="Enter Subject" id="" required>
  </div>

<div class="form-group">
    <label for="phone">Message:</label>
    <input type="text" class="form-control" name="message" placeholder="Write Your Message" id="" required>
  </div>
  
  <button type="Submit" class="btn btn-primary">Submit</button>
</form>     
 </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>


	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/slick.min.js')}}"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/jquery.filterizr.min.js')}}"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/counter.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/app.js')}}"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ asset('public/aeronauit/assets/js/custom.js')}}"></script>

	<!-- About us Skills Circle progress  -->
	<script type="text/javascript">
	$('#myModale').modal('show');	
	</script>
	<script>
		// First circle
	    new Circlebar({
        element : "#circle-1",
        type : "progress",
	      maxValue:  "90"
	    });
		
		// Second circle
	    new Circlebar({
        element : "#circle-2",
        type : "progress",
	      maxValue:  "84"
	    });

	    // Third circle
	    new Circlebar({
        element : "#circle-3",
        type : "progress",
	      maxValue:  "60"
	    });

	    // Fourth circle
	    new Circlebar({
        element : "#circle-4",
        type : "progress",
	      maxValue:  "74"
	    });

	</script>
    
  </body>
</html>