<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Drinkscity Admin</title>

		<!-- Bootstrap -->
		<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
		<!-- bootstrap-progressbar -->
		<link href="/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

		<!-- bootstrap-daterangepicker -->
		<link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="/css/custom.min.css" rel="stylesheet">
		<link href="/css/sweetalert.css" rel="stylesheet">
	</head>
  	<body class="nav-md">
    	<div class="container body">
  			<div class="main_container">

				@include('admin.side-menu')

				@include('admin.top-menu')

		  	  <!-- page content -->
			  	@yield('content')

		  	  <!-- /page content -->
		  	  <!-- footer content -->
		  	  <footer>
		  		<div class="pull-right">
		  			<a href="mailto:aldo.vc.1985@gmail.com">Development</a>
		  		</div>
		  		<div class="clearfix"></div>
		  	  </footer>
		  	  <!-- /footer content -->
		  	</div>
    	</div>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">

	    <!-- jQuery -->
	    <script src="/vendors/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap -->
	    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="/vendors/nprogress/nprogress.js"></script>
	    <!-- Chart.js -->
	    <script src="/vendors/Chart.js/dist/Chart.min.js"></script>
	    <!-- gauge.js -->
	    <script src="/vendors/gauge.js/dist/gauge.min.js"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- iCheck -->
	    <script src="/vendors/iCheck/icheck.min.js"></script>
	    <!-- Skycons -->
	    <script src="/vendors/skycons/skycons.js"></script>
	    <!-- Flot -->
	    <script src="/vendors/Flot/jquery.flot.js"></script>
	    <script src="/vendors/Flot/jquery.flot.pie.js"></script>
	    <script src="/vendors/Flot/jquery.flot.time.js"></script>
	    <script src="/vendors/Flot/jquery.flot.stack.js"></script>
	    <script src="/vendors/Flot/jquery.flot.resize.js"></script>
	    <!-- Flot plugins -->
	    <script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	    <script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	    <script src="/vendors/flot.curvedlines/curvedLines.js"></script>
	    <!-- DateJS -->
	    <script src="/vendors/DateJS/build/date.js"></script>
	    <!-- JQVMap -->
	    <script src="/vendors/jqvmap/dist/jquery.vmap.js"></script>
	    <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	    <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="/vendors/moment/min/moment.min.js"></script>
	    <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="/js/sweetalert.min.js"></script>
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyCXaC0E0vrBC-XX0PNlEl8V8NlHeKFm-o4&libraries=places" type="text/javascript"></script>
	    <!-- Custom Theme Scripts -->
	    <script src="/js/custom.min.js"></script>
		<script src="/js/jquery.serialize-object.min.js"></script>
		<script src="/js/main.js"></script>

		@include('admin.partials.storeCreateModal')
		@include('admin.partials.userCreateModal')
		@include('admin.partials.userCreate2Modal')
		@include('admin.partials.avisoC')
		@include('admin.partials.avisoV')
		@include('admin.partials.notiCreateModal')
		@include('admin.partials.userEditModal')

		@yield('modals')

		@yield('scripts')

	</body>
</html>
