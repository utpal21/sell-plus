<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="MediaCenter, Template, eCommerce">
		<meta name="robots" content="all">
		<title>SellPlus | @yield('title')</title>
	  <!-- Bootstrap Core CSS -->	    
		<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">	    
		<!-- Customizable CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/blue.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/owl.transitions.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/rateit.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap-select.min.css') }}">     

		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.css') }}">   		

		<!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		@yield('stylesheets')
	</head>
	<body class="cnt-home">
		@include('front.layouts.header')
		<div class="body-content outer-top-xs" id="top-banner-and-menu">
			<div class="container">
				<div class="row">
					@include('front.layouts.sidebar') 
					@yield('content')
				</div><!-- /.row -->
				@include('front.layouts.brand')
				<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
			</div><!-- /.container -->
		</div><!-- /#top-banner-and-menu --> 
		@include('front.layouts.footer')

  
	<!-- JavaScripts placed at the end of the document so the pages load faster -->	
	<script src="{{ asset('front/assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/echo.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/jquery.easing-1.3.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/bootstrap-slider.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/jquery.rateit.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/lightbox.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('front/assets/js/scripts.js') }}"></script>
</body>
</html>



