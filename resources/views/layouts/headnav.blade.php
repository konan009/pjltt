	<!doctype html>
<html>
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PJL Travel and Tours</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
		<!-- Slider
		================================================== -->
		<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" media="screen">
		<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" media="screen">
		<link href="{{asset('css/animate.css')}}" rel="stylesheet" media="screen">
		<!-- Stylesheet
		================================================== -->
		<link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

		<body class="page">
		<!-- Navigation
		==========================================-->
		<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
					<a class="navbar-brand" href="{{url('')}}"><img src="{{asset('img/logo.png')}}" width="53" height="54" class="img-responsive"><span>PJL Travel and Tours</span></a> </div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<!--nav icon-->
						<a id="nav-icon"> <span></span> <span></span> <span></span> </a>
						<!--nav icon end-->
						
						<ul id="nav-top" class="nav navbar-nav navbar-right">
							<li><a href="{{url('')}}" class="page-scroll">Home</a></li>
							<li><a href="page.html" class="page-scroll">About</a></li>
							<li><a href="faqs.html" class="page-scroll">FAQs</a></li>
							<li><a href="contact.html" class="page-scroll">Contact</a></li>
							<li><a href="{{url('offerpage')}}" class="page-scroll">Offers</a></li>

							@if(!Auth::check())
							<li><a data-toggle="modal" data-target="#register" class="page-scroll">Register</a></li>
							<li><a data-toggle="modal" data-target="#login" class="page-scroll">LogIn</a></li>
							@else
							@if( Auth::user()->position == 1)
							<li><a href="{{url('admin')}}" class="page-scroll">Backoffice</a></li>
							@endif
							<li><a href="#" class="page-scroll">Hello, {{ Auth::user()->name }}</a></li>
							<li><a href="{{url('bookrequests')}}" class="page-scroll">Book</a></li>
							<li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
							@endif

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>


@yield('content')