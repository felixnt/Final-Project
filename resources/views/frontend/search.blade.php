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
					<img src="/images/tuahesss.png" width="180" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="col-lg-9">
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Food</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('menu')}}">Menu</a>
								<a class="dropdown-item" href="{{url('restaurant')}}">Restaurant</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{url('dietplan')}}">Diet Plan</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('gallery')}}">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
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
					<h1>Search Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Search Results</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							@foreach($cats as $cat)
							<button data-filter=".{{$cat->title}}">{{$cat->title}}</button>
							@endforeach
						</div>
					</div>
				</div>
			</div>
				
				<div class="row special-list">
				@foreach ($menus as $menu)
				<div class="col-lg-4 col-md-6 special-grid {{$menu->category}}">
					<div class="gallery-single fix">
						<a href="/menu/{{$menu->slug}}">
						<img src="/images/{{$menu->picture}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Recipe</h4>
							<p>{{$menu->title}}</p>
							<h5>Click to learn more</h5>
						</div></a>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	
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