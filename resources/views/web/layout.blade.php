<!DOCTYPE html>
<html class="" lang="es">
	<head>

	<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no">
	<meta name="google-site-verification" content="_Nx9VoDf1IrowexttiCl6JxqfkcUDmNSSIv3HEpOdbA" />
	<title>Drinkscity</title>
	<!-- CSS -->
		<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/swiper.min.css">
		<link href="/css/web.css" rel="stylesheet">
		<link href="/css/sweetalert.css" rel="stylesheet">
	<!-- IE-only CSS -->
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-master2.css?crc=99591004"/>
	<link rel="stylesheet" type="text/css" href="css/nomq_index.css?crc=450901666" id="nomq_pagesheet"/>
	<![endif]-->
	<!-- JS includes -->
	<!--[if lt IE 9]>
	<script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
	<![endif]-->
	<!-- jQuery -->
	<script src="/vendors/jquery/dist/jquery.min.js"></script>
	<script src="/js/sweetalert.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCXaC0E0vrBC-XX0PNlEl8V8NlHeKFm-o4&libraries=places" type="text/javascript"></script>
		<script src="/js/src/user_location.js"></script>
		<script src="/js/src/web_main.js"></script>
	</head>
	<script type="text/javascript">
	/* Set the width of the side navigation to 250px */
	function openNav() {
		document.getElementById("mySidenav").style.width = "200px";
		$('#sideMenu').attr('onclick','closeNav()')
	}

	/* Set the width of the side navigation to 0 */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		$('#sideMenu').attr('onclick','openNav()')
	}
	</script>

	<body>
			@include('web.sidenav')

			<div id="main">

				<header id="navHeader">
					@include('web.header')
    			</header>


				<div class="" >
					<!-- page content -->
					@yield('content')
				</div>
				<div style="height:103px"></div>
				<!-- /page content -->
				@include('web.nav')
			</div>

		<!-- Bootstrap -->
		<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="/js/web.js"></script>

		@include('web.partials.userCreateModal')
		@include('web.partials.storeData')
		
		@yield('scripts')

	</body>
</html>
