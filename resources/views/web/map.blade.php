@extends('web.layout')

@section('content')
	<style type="text/css">
		#map{
			height: 350px;
		}
	</style>
	<section id="mapView" class="" style="max-width:800px;margin:0 auto">
		<div id="map"></div>
	</section>
@endsection

@section('scripts')
	<script src="/js/src/user_location.js" ></script>
	<script src="/js/src/map.js" ></script>
	
	<script type="text/javascript">
		$(function(){
			var	locations = '{{$data}}';
			console.log(locations);
			$('#sideBack').removeClass('sr-only');
			
			
	</script>

@endsection
