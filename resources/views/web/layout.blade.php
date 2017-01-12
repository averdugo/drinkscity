<!DOCTYPE html>
<html class="" lang="es">
	<head>

	<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Drinkscity</title>
	<!-- CSS -->
		<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/swiper.min.css">
		<link href="/css/web.css" rel="stylesheet">
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
			@include('web.partials.sidenav')

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

		@yield('scripts')

	</body>
</html>
