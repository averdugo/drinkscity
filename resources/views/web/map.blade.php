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

				for (var i = 0; i < r.length; i++) {
				    var location = r[i];
				    var marker = new google.maps.Marker({
				      position: {lat: location[1], lng: location[2]},
				      map: map,
				      title: location[0]
				    });

				    marker.addListener('click', function(){
				    	location.href="tienda/"+location[3]
				    });
				  }


			})

		
			$('#sideBack').removeClass('sr-only');
			
		})
	</script>

@endsection
