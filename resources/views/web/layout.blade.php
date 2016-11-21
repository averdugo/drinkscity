<html>
    <head>
        <title>DrinksCity</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="generator" content="Mobirise v3.6.5, mobirise.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="assets/images/logo-146x128-23.png" type="image/x-icon">
		<meta name="description" content="">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
		<link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
		<link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
		<link rel="stylesheet" href="assets/tether/tether.min.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
		<link rel="stylesheet" href="assets/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/dropdown/css/style.css">
		<link rel="stylesheet" href="assets/theme/css/style.css">
		<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    </head>
    <body>
		<section id="index-menu-0">
			@include('web.nav')
		</section>


        <div class="pageContent">
            @yield('content')
        </div>

		<div class="pageFoo">
			@include('web.footer')
		</div>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
