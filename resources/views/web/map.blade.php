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
	
	
	<script type="text/javascript">
		
	
		$(function(){

			$.get('/getStoresforMap',function(r){

				
				var data = JSON.parse(r);
				
				var map = new google.maps.Map(document.getElementById('map'), {
					    zoom: 10,
					    center: {lat: -33.9, lng: 151.2}
				  });
				for (var i = 0; i < data.length; i++) {
				    var location = data[i];
					console.log(location);
				    var marker = new google.maps.Marker({
				      position: {lat:location[1], lng:location[2]},
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
