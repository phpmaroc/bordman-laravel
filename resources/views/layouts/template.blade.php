<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>BordMan - @yield('title')</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">
	
</head>
<body>

	<div class="site-wrapper">

		<!-- Header -->
		<header class="header header-menu-fullw">

			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<ul class="social-links-header">
							<li><a href="#" class="btn btn-sm"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					<div class="header-top-right">
						<a href="login.php" class="btn btn-sm"><i class="fa fa-sign-in"></i> <span>Login</span> </a>
						<a href="register.php" class="btn btn-sm"><i class="fa fa-unlock"></i> <span>Register</span> </a>
					</div>
				</div>
			</div>
			
			<div class="header-main">
				<div class="container">
					<!-- Logo -->
					<div class="logo">
						<a href="index.php"><img src="{{ asset('images/logo.png') }}" alt="Handyman"></a>
						<!-- <h1><a href="index.html"><span>Handy</span>Man</a></h1> -->
					</div>
					<!-- Logo / End -->

					<button type="button" class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Navigation -->
					<nav class="nav-main">
						<div class="nav-main-inner">
							<ul data-breakpoint="992" class="flexnav">
								<li class="active"><a href="#">our jobvacancies</a></li>
								<li><a href="#">Articles</a></li>
								<li><a href="#">Contactez-nous</a></li>
							</ul>
						</div>
					</nav>
					<!-- Navigation / End -->

				</div>
			</div>
			
		</header>
		<!-- Header / End -->
		<!-- Main -->
		<div class="main" role="main">     
            @yield('content')      	
            <!-- Footer -->
            <footer class="footer" id="footer">
                
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                Copyright &copy; 2015  <a href="index.html">BordMan</a> &nbsp;| &nbsp;All Rights Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer / End -->
        <!-- Main / End -->
        </div>
    <script type="text-javascript" href="{{ mix('js/app.js') }}">
	
</body>
</html>