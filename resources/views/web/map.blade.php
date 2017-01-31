@extends('web.layout')

@section('content')
	<style type="text/css">
		#map{
			height: 350px;
		}
	</style>
	<section id="mapView" class="" style="max-width:800px;margin:0 auto;margin-top:80px">
	<input id="searchInput" type="text" name="" class="form-control" placeholder="Direccion de la Tienda">
		<div id="map"></div>
	</section>
@endsection

@section('scripts')
	<script src="/js/src/user_location.js" ></script>
	<script src="/js/src/map.js" ></script>
	
	<script type="text/javascript">
		
		console.log(locations);
		$(function(){

			$.get('/getStoresforMap',function(r){
				
				console.log(r);
			})

		
			$('#sideBack').removeClass('sr-only');
			
		})
	</script>

@endsection
