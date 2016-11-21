@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<!-- top tiles -->
		<div class="row tile_count">
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"> Tiendas</span>
				<div class="count">2500</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top">Productos</span>
				<div class="count">123.50</div>
				<span class="count_bottom">Activos</span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top">Tiendas Pendientes</span>
				<div class="count green">2,500</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top">Canjeados</span>
				<div class="count">4,567</div>
				<span class="count_bottom"> Esta Semana</span>
			</div>
		</div>
		<!-- /top tiles -->

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="dashboard_graph">

					<div class="row x_title">
						<div class="col-md-6">
							<h3>Tiendas <small>con mayor Actividad</small></h3>
						</div>
						<div class="col-md-6">
							<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
								<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
							</div>
						</div>
					</div>

					<div class="col-md-9 col-sm-9 col-xs-12">
						<div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
						<div style="width: 100%;">
							<div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
						<div class="x_title">
							<h2>Tiendas</h2>
							<div class="clearfix"></div>
						</div>

						<div class="col-md-12 col-sm-12 col-xs-6">
							<div>
								<p>Drinkscity 1</p>
								<div class="">
									<div class="progress progress_sm" style="width: 76%;">
										<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
									</div>
								</div>
							</div>
							<div>
								<p>Drinkscity 2</p>
								<div class="">
									<div class="progress progress_sm" style="width: 76%;">
										<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-6">
							<div>
								<p>Drinkscity 3</p>
								<div class="">
									<div class="progress progress_sm" style="width: 76%;">
										<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
									</div>
								</div>
							</div>
							<div>
								<p>Drinkscity 4</p>
								<div class="">
									<div class="progress progress_sm" style="width: 76%;">
										<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<br />

		<div class="row">
			<div class="col-md-12">
				<!-- Start to do list -->
				<div class="col-md-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Lista de Que Haceres</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
								<li><a class="collapse-link"><i class="fa fa-plus"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">

							<div class="">
								<ul class="to_do">
									<li>
										<p><input type="checkbox" class="flat"> Crear Tiendas </p>
									</li>
									<li>
										<p><input type="checkbox" class="flat">Conseguir Soporte</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End to do list -->
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<!-- Flot -->
	<script>
	$(document).ready(function() {
	  var data1 = [
		[gd(2012, 1, 1), 17],
		[gd(2012, 1, 2), 74],
		[gd(2012, 1, 3), 6],
		[gd(2012, 1, 4), 39],
		[gd(2012, 1, 5), 20],
		[gd(2012, 1, 6), 85],
		[gd(2012, 1, 7), 7]
	  ];

	  var data2 = [
		[gd(2012, 1, 1), 82],
		[gd(2012, 1, 2), 23],
		[gd(2012, 1, 3), 66],
		[gd(2012, 1, 4), 9],
		[gd(2012, 1, 5), 119],
		[gd(2012, 1, 6), 6],
		[gd(2012, 1, 7), 9]
	  ];
	  $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
		data1, data2
	  ], {
		series: {
		  lines: {
			show: false,
			fill: true
		  },
		  splines: {
			show: true,
			tension: 0.4,
			lineWidth: 1,
			fill: 0.4
		  },
		  points: {
			radius: 0,
			show: true
		  },
		  shadowSize: 2
		},
		grid: {
		  verticalLines: true,
		  hoverable: true,
		  clickable: true,
		  tickColor: "#d5d5d5",
		  borderWidth: 1,
		  color: '#fff'
		},
		colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
		xaxis: {
		  tickColor: "rgba(51, 51, 51, 0.06)",
		  mode: "time",
		  tickSize: [1, "day"],
		  //tickLength: 10,
		  axisLabel: "Date",
		  axisLabelUseCanvas: true,
		  axisLabelFontSizePixels: 12,
		  axisLabelFontFamily: 'Verdana, Arial',
		  axisLabelPadding: 10
		},
		yaxis: {
		  ticks: 8,
		  tickColor: "rgba(51, 51, 51, 0.06)",
		},
		tooltip: false
	  });

	  function gd(year, month, day) {
		return new Date(year, month - 1, day).getTime();
	  }
	});
	</script>
	<!-- /Flot -->

	<!-- bootstrap-daterangepicker -->
	<script>
	$(document).ready(function() {

	  var cb = function(start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
		$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	  };

	  var optionSet1 = {
		startDate: moment().subtract(29, 'days'),
		endDate: moment(),
		minDate: '01/01/2012',
		maxDate: '12/31/2015',
		dateLimit: {
		  days: 60
		},
		showDropdowns: true,
		showWeekNumbers: true,
		timePicker: false,
		timePickerIncrement: 1,
		timePicker12Hour: true,
		ranges: {
		  'Today': [moment(), moment()],
		  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		  'This Month': [moment().startOf('month'), moment().endOf('month')],
		  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		opens: 'left',
		buttonClasses: ['btn btn-default'],
		applyClass: 'btn-small btn-primary',
		cancelClass: 'btn-small',
		format: 'MM/DD/YYYY',
		separator: ' to ',
		locale: {
		  applyLabel: 'Submit',
		  cancelLabel: 'Clear',
		  fromLabel: 'From',
		  toLabel: 'To',
		  customRangeLabel: 'Custom',
		  daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		  monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		  firstDay: 1
		}
	  };
	  $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
	  $('#reportrange').daterangepicker(optionSet1, cb);
	  $('#reportrange').on('show.daterangepicker', function() {
		console.log("show event fired");
	  });
	  $('#reportrange').on('hide.daterangepicker', function() {
		console.log("hide event fired");
	  });
	  $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
		console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
	  });
	  $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
		console.log("cancel event fired");
	  });
	  $('#options1').click(function() {
		$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
	  });
	  $('#options2').click(function() {
		$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
	  });
	  $('#destroy').click(function() {
		$('#reportrange').data('daterangepicker').remove();
	  });
	});
	</script>
	<!-- /bootstrap-daterangepicker -->
@endsection
