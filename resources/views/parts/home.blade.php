<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Единое информационное пространство по безопасности производственных процессов</title>
<meta name="description" content="" />
<meta name="Nikolay Grinchar" content="education" />

<!-- mobile settings -->
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<!-- WEB FONTS : use %7C instead of | (pipe) -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

<!-- CORE CSS -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- THEME CSS -->
<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

<!-- PAGE LEVEL SCRIPTS -->
<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
<link href="assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />

</head>


<body class="smoothscroll enable-animation menu-vertical">

<!-- wrapper -->
<div id="wrapper">

	<!-- SIDE MENU -->
	<div id="mainMenu" class="sidebar-vertical">


		<div class="sidebar-nav">
			<div class="navbar navbar-default" role="navigation">

				<a href="index.html" class="logo text-center">
					<img src="assets/images/_smarty/logo.png" alt="">
				</a>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse sidebar-navbar-collapse collapse" aria-expanded="false">

					<!-- MENU -->
					<ul class="nav navbar-nav">
						@include('parts/home_menu');
					</ul>
					<!-- /MENU -->

				</div><!--/.nav-collapse -->

			</div>
		</div>





		<!-- Paragraph -->
		<p class="text-center hidden-xs">office@yourdomain.com</p>
		<!-- /Paragraph -->

	</div>
	<!-- /SIDE MENU -->


	<section class="nopadding">
		@yield('content')
	</section>









	<!-- FOOTER -->
	<footer id="footer">
		@include('parts/footer')
	</footer>			
	<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
	<div class="inner">
		<span class="loader"></span>
	</div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>

<script type="text/javascript">
	@yeild('scripts')
</script>
</body>
</html>