<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
  		
.mu-footer-top {
    background-color: #0d101d !important;
    display: inline;
    float: left;
    padding: 55px 0;
    width: 100%;
}

#mu-page-header {
    background-image: url({{ asset('public/aeronauit/assets/images/page-header-bg.jpg')}}) !important;
  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$name}} : blogs ans lots..</title>
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
				<a class="navbar-brand mu-logo" href="#"><span>{{$name}}</span></a>
				<!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="{{ asset('public/aeronauit/assets/images/logo.png')}}" alt="logo"></a> -->
			  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>
 -->
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
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start slider area -->
		<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">{{$name}}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		<!-- Start Blog -->
		<section id="mu-blog" class="mu-blog-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-blog-area">
							<!-- Title -->
							<div class="row">
@foreach($blogs as $blogss)
								<div class="col-md-10">
									<div class="mu-blog-left">
										<!-- start single item -->
										<article class="mu-blog-item">
											<div class="mu-blog-item-content">
												<blockquote>
												{!!$blogss->subheading!!}</blockquote>
											
											</div>
											
							                
										</article>
										<!-- End single item -->
									</div>
@endforeach							</div>
								

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog --> 
	<!-- Start footer -->
	<footer id="mu-footer">
		
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
<form action="" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" name="name"   placeholder="Enter name" id="" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Phone" id="" required>
  </div>
  
  <button type="button" class="btn btn-primary">Submit</button>
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