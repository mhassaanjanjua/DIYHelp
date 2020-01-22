<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>DIY-Help</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.js') }}" defer></script>
	<script src="{{ asset('js/slick.js') }}" defer></script>
	<script src="{{ asset('js/lightgallery-all.min.js') }}" defer></script>
	<script src="{{ asset('js/main.js') }}" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body>
	<footer class="footer-global">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="copy-right">
						<p>Copyright © 2019 DIY-Help. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="develop">
						<p><span>Small Masters Project.</span></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>