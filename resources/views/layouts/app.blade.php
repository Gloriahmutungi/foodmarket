<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    @livewireStyles
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
	<title>{{ isset($title) ? config('app.name').'-'.$title  : config('app.name') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('dinner/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('dinner/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dinner/css/bootstrap.min.css') }}">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('dinner/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dinner/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dinner/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">



</head>

<body>
    {!! Toastr::message() !!}
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ route('homepage') }}">
					<img src="{{ asset('dinner/images.png') }}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{ route('homepage')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('menu')}}">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about')}}">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Reservation</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{ route('reservation')}}">Reservation</a>
								<a class="dropdown-item" href="{{ route('stuff')}}">Stuff</a>
								<a class="dropdown-item" href="{ route('gallery')}}">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{ route('blog')}}">blog</a>
								<a class="dropdown-item" href="{{ route('blogdetails')}}">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>
						@if(Auth::check('user'))
						<li><a class="nav-item nav-link" href="#">Hi, {{ Auth::user()->firstname }}</a></li>
						<li><a class="nav-item nav-link" href="/logout">Logout</a></li>
						@else
						<li class="nav-item"><a class="nav-link" href="{{ route('login')}}">Login</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    @yield('content')


			<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
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
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Nairobi, Kenya</p>
					<p class="lead"><a href="#">+254795-621-287</a></p>
					<p><a href="#"> gloriamutungi16@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; <?php echo date('Y') ?> <a href="#">Alphasolutions</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->
    @include('layouts.scripts')

    </body>
</html>
