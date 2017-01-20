<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('page-title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content="/images/logo.png"/>
	<meta property="og:url" content="http:/drfix.com.ng"/>
	<meta property="og:site_name" content="Dr Fix"/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/style.css">
	@if (isset($page_title))
		<style type="text/css">
			.fh5co-cover{
				height: 500px;
			}
		</style>
	@else 
		<style type="text/css">
			.fh5co-cover{
				height: 100px;
			}
		</style>
	@endif

		@yield('more-styles')
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>

	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Bow.</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="/">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="/contact">Contact</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						 @if (Auth::guest())
	                        <li><a href="{{ url('/login') }}">Login</a></li>
	                        <li><a href="{{ url('/register') }}">Register</a></li>
	                    @else
	                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
	                    @endif
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/images/drfix-3.jpg); !important;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            @if(isset($page_title))
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="display-t" style="height: 600px">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 600px">
                            <h1>We are Creative Studio</h1>
                            <h2>Free html5 templates Made by</h2>

                            <div class="col-md-12" id="banner-form">
                                
                                    <div class="col-xs-3">
                                        <select class="form-control" list="devicetype" id="dev-type" name="device_type" style="border: none;padding: 10px 5px;background: #f5f5f5;color: #333333;">
                                            <option value="" style="opacity:0.8;">--Device Type--</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <select class="form-control" list="device_brand" id="dev-brand" name="brand" style="border: none;padding: 10px 5px;background: #f5f5f5;color: #333333;">
                                            <option value="0">Select Device Brand</option>
                                        </select>
                                    </div>
                                <form method="get" action="/request_fix" class="form-group">
                                    <div class="col-xs-3">
                                        <select id="dev-model" name="model" class="form-control" style="border: none;background: #f5f5f5;color: #333333;padding: 10px 5px;">
                                            <option value="0">Device Model</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <p><button type="submit" class="btn btn-default">Request A Fix</button></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>

        </div>
    </header>
	 
	@yield('content')

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>The Company</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Dr Fix. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://dervalconsulting" target="_blank">Derval Consulting</a></small>
					</p>
					<p>
						<span class="text-center">Join the Conversation</span>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/drfix"><i class="icon-twitter"></i></a></li>
							<li><a href="https://facbook.com/drfix"><i class="icon-facebook"></i></a></li>
							<li><a href="https://linked.com/drfix"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/magnific-popup-options.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
	<!-- Main -->
	@yield('more-scripts')
	<script src="/js/main.js"></script>
	
	</body>
</html>

