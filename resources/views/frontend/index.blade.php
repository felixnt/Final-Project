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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="{{url('images/blueberry-peach-mojito.jpg')}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Tuahesss</strong></h1>
							<p class="m-b-40">Kata siapa healhty food tidak enak dan hambar? Buktinya dari gambar ini aja kamu pasti sudah pengen minum minuman segar kan???.   <br> 
							</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="{{url('images/Webp.net-resizeimage (1).jpg')}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Tuahesss</strong></h1>
							<p class="m-b-40"> Jaga dan atur pola makan dan tidurmu, jangan lupa olahraga secara teratur untuk menjalani pola hidup sehat.<br> 
							</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="{{url('images/Webp.net-resizeimage.jpg')}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Tuahesss</strong></h1>
							<p class="m-b-40">Sebuah website penyedia resep healthy food dan tips agar kamu bisa berpola hidup sehat.<br> 
							</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="inner-column col-lg-7">
			<div class="col">
				<h1>Subscribe to our <span>Update!!!</span></h1>
			</div>
			</div>

			<div class="col">
				<div class="subscribe_form">								
					<span class="error emailError"></span>
					<input name="name" id="email" class="form_input" placeholder="Email Address..." type="email">
									
					<button id="sendSubscribe" type="submit" class="submit">SUBSCRIBE</button> <span id="loader"> <img src="{{url('images/spinner.gif')}}" width="60"></span>
									
					<div class="form-group" id="success-message"></div>
									
					<div class="clearfix"></div>								
				</div>
			</div>
			
		</div>
	</div>
	</div>
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="{{url('images/about.jpg')}}" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Tuahesss</span></h1>
						<h4>Little Story</h4>
						<p>Tuahesss adalah website yang berisikan resep-resep makanan sehat dan tips-tips untuk menajalani pola hidup sehat... </p>

						<a class="btn btn-lg btn-circle btn-outline-new-white" href="{{url('/about')}}">Learn More</a>

					</div>
				</div>
		

			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" Eating healthy is not an option, it's a way of life. "
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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
				@foreach ($posts as $post)
				<div class="col-lg-4 col-md-6 special-grid {{$post->category}}">
					<div class="gallery-single fix">
						<img src="/images/{{$post->picture}}" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>{{$post->title}}</h4>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
				<h1><a class="btn btn-lg btn-circle btn-outline-success" href="{{url('/menu')}}">Learn More</a></h1>
				</div>
			</div>
		</div>


		
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/beverages-with-healthy-twist.jpg')}}">
							<img class="img-fluid" src="{{url('images/beverages-with-healthy-twist.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/https___specials-images.forbesimg.com_imageserve_963011668_0x0.jpg')}}" alt="Gallery Images">
							<img class="img-fluid" src="{{url('images/https___specials-images.forbesimg.com_imageserve_963011668_0x0.jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/Webp.net-resizeimage (12).jpg')}}" alt="Gallery Images">
							<img class="img-fluid" src="{{url('images/Webp.net-resizeimage (12).jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/Webp.net-resizeimage (3).jpg')}}" alt="Gallery Images">
							<img class="img-fluid" src="{{url('images/Webp.net-resizeimage (3).jpg')}}" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/Webp.net-resizeimage (6).jpg')}}">
							<img class="img-fluid" src="{{url('images/Webp.net-resizeimage (6).jpg')}}" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="{{url('images/Webp.net-resizeimage (13).jpg')}}" alt="Gallery Images">
							<img class="img-fluid" src="{{url('images/Webp.net-resizeimage (13).jpg')}}" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Team</h2>
						<p>Hard working, Content dedicated team</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('login/images/icons/guest.png')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Felix Tjukipto</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('login/images/icons/guest.png')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Rayhan Hugo</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('login/images/icons/guest.png')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Kenny Jonathan</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="{{url('login/images/icons/guest.png')}}" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Aurelio Rayvaldi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
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
					<p><a href="{{url('/contact')}}"> Click Here to Contact Us</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Social</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/explore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
	<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('js/popper.min.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{url('js/jquery.superslides.min.js')}}"></script>
	<script src="{{url('js/images-loded.min.js')}}"></script>
	<script src="{{url('js/isotope.min.js')}}"></script>
	<script src="{{url('js/baguetteBox.min.js')}}"></script>
	<script src="{{url('js/form-validator.min.js')}}"></script>
    <script src="{{url('js/contact-form-script.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>

     <style>
    	.error{font-weight: bold;}
    	#loader{display: none;}
    	#success-message{margin-top: 10px;}
    </style>
	<script>
		$('#sendSubscribe').click(function(){
			checkEmail();

			if(emailError == false){

				$.ajax({
					type : "get",
					url : "{{url('sendSubscribe')}}",
					data : {email:email},
					beforeSend : function(){
						$('#loader').show();
					},
					success : function(data){
						$("#success-message").html(data);
						setTimeout(function(){
							$("#success-message").fadeOut(slow);
						},10000);
						$("#email").val('');
					},
					complete : function(data){
						$('#loader').hide();
					}
				})

			}else{
				return false;
			}
		})
		$('#email').focusout(function(){
			checkEmail();
		})

		function checkEmail(){
			email = $('#email').val();
			apos = email.indexOf('@');
			dotpos = email.lastIndexOf('.');
			lastpos = email.length-1;

			if(email.length < 5 || apos < 2 || dotpos - apos < 2 || lastpos - dotpos < 2 || lastpos - dotpos > 3){
				emailError = true;
				$('.emailError').html('<p>Invalid Email</p>');
			}else{
				emailError = false;
				$('.emailError').html('');
			}
		}
	</script>
</body>
</html>