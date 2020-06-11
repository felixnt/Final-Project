<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Tuahesss</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				
				<a class="navbar-brand" href="/">
					<img src="{{url('images/tuahesss.png')}}" width="180" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="col-lg-9">
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Food</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('/menu')}}">Menu</a>
								<a class="dropdown-item" href="{{url('/restaurant')}}">Restaurant</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{url('/dietplan')}}">Diet Plan</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</div>
				</div>
			<div class="col-lg-3">
			<form class="" action="{{url('/menu/search')}}" method="get">
					
				<input name="search" placeholder="Search here!!!" type="text" value="{{old('search')}}">
					
				<button class="search-btn" action="">		
					<i class="fa fa-search" aria-hidden="true"></i>	
				</button>
				
			</form>
			</div>

			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					@yield('title')
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start blog details -->
	<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Blog</h2>
						<p>RECIPE</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
					<div class="blog-inner-details-page">
						<div class="blog-inner-box">
							<div class="side-blog-img">
								@yield('picture')						
							</div>
							<div class="inner-blog-detail details-page">
								<h3>Ingredients</h3>

								@yield('ingredient')
								<blockquote>
								<h3>Step by Step</h3>

								@yield('step')
								</blockquote>
							</div>
						</div>
						
						<div class="comment-respond-box">
							@yield('comment')
						</div>
					</div>
				</div>
			
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="right-side-blog">
						<h3>Search Menu</h3>
						<form class="" action="{{url('/menu/search')}}" method="get">
						<div class="blog-search-form">
							<input name="search" placeholder="Search your menu here!!!" type="text" value="{{old('search')}}">
							<button class="search-btn" action="">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						</form>
						<h3>Categories</h3>
						<div class="blog-categories">
							<ul>
								<li><a href="/menu#food"><span>Food</span></a></li>
								<li><a href="/menu"><span>Drink</span></a></li>
								<li><a href="/menu"><span>Snack</span></a></li>
							</ul>
						</div>
						<h3>Diet</h3>
						<div class="blog-categories">
							<ul>
								<li><a href="/dietplan/monday"><span>Monday</span></a></li>
								<li><a href="/dietplan/tuesday"><span>Tuesday</span></a></li>
								<li><a href="/dietplan/wednesday"><span>Wednesday</span></a></li>
								<li><a href="/dietplan/thursday"><span>Thursday</span></a></li>
								<li><a href="/dietplan/friday"><span>Friday</span></a></li>
								<li><a href="/dietplan/saturday"><span>Saturday</span></a></li>
								<li><a href="/dietplan/sunday"><span>Sunday</span></a></li>

							</ul>
						</div>
						<h3>Interested?</h3>
						<div class="blog-categories">
							<ul>
								<li><a href="/menubuy" class="btn btn-success"><span>Click Here</span></a></li>

							</ul>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- End details -->
	
	<!-- Start Contact info -->
<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							085852311888
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							cumangetesdoang@gmail.com
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<h3>About Us</h3>
					<p>Pendiri dan admin dari website ini adalah 4 mahasiswa Bina Nusantara Malang yang sedang menjalani kuliahnya di semester 4. Sebenarnya alasan dari terciptanya website ini adalah karena tugas proyek akhir semester 4 jurusan IT. Tugas proyek akhirnya adalah membuat website, sehingga para mahasiswa ini menciptakan website sebagai tugas proyek akhir mereka. Karena website ini adalah sebagai bahan pembelajaran para mahasiswa maka ada kemungkinan website masih jauh dari sempurna, tetapi kami akan melakukan sebaik mungkin untuk menciptakan website yang baik.</p>
				</div>

				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">085852311888</p>
					<p class="lead">Or</p>
					<p><a href="/contact"> Click Here to Contact Us</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Social</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Tuahesss</a> Design By : Kelompok 4
					</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="/js/jquery.superslides.min.js"></script>
	<script src="/js/images-loded.min.js"></script>
	<script src="/js/isotope.min.js"></script>
	<script src="/js/baguetteBox.min.js"></script>
	<script src="/js/form-validator.min.js"></script>
    <script src="/js/contact-form-script.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>