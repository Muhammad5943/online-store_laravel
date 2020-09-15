<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="/BahanStudy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/font-awesome.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/prettyPhoto.css" rel="stylesheet">
    <link href="/BahanStudy/css/price-range.css" rel="stylesheet">
    <link href="/BahanStudy/css/animate.css" rel="stylesheet">
	<link href="/BahanStudy/css/main.css" rel="stylesheet">
	<link href="/BahanStudy/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/BahanStudy/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/BahanStudy/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/BahanStudy/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/BahanStudy/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/BahanStudy/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="/login"><img src="/BahanStudy/images/home/logo.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li><a href="https://api.whatsapp.com/send?phone=62081318397781&text=Halo%20Muhammad%20Aji%20Putra%20disini%20silahkan%20bertanya">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="/enter" method="POST">
							<input type="email" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="/register" method="POST">
							<input type="text" placeholder="Name" name="nama" value=""/>
							<input type="email" placeholder="Email Address" name="email" value=""/>
							<input type="password" placeholder="Password" name="password" value=""/>
							<button type="submit" class="btn btn-default">Sign Up</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://resum-aji.000webhostapp.com/">Muhammad Aji Putra</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
  
    <script src="/BahanStudy/js/jquery.js"></script>
	<script src="/BahanStudy/js/price-range.js"></script>
    <script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
	<script src="/BahanStudy/js/bootstrap.min.js"></script>
    <script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
    <script src="/BahanStudy/js/main.js"></script>
</body>
</html>