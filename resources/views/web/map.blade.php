@extends('web.layout')

@section('content')
	<style type="text/css">
		#map{
			height: 350px;
			width: : 100%;
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
		function showDetails(a)
		{
			var url="getDataStore/"+a;
			$.get(url,function(result){
				$('#dataModalStore').html(result);
				$('#storeData').modal('show');
			})
			
		}
	
		$(function(){

			$.get('/getStoresforMap',function(r){
				
				var user_location = new UserLocation(function () {
					var myLatlng = new google.maps.LatLng(user_location.latitud,user_location.longitud);
					var mapOptions = {
						zoom: 13,
						center: myLatlng
					};
					
					var mapa_element = document.getElementById('map');
					var map = new google.maps.Map(mapa_element, mapOptions);

					var searchInput = document.getElementById('searchInput');
					var autocomplete = new google.maps.places.Autocomplete(searchInput);

					

					autocomplete.bindTo('bounds', map);
					google.maps.event.addListener(autocomplete, "place_changed", function () {
						var place = autocomplete.getPlace();

						
						if (place.geometry.viewport) {
							map.fitBounds(place.geometry.viewport);
						} else {
							map.setCenter(place.geometry.location);
							map.setZoom(5);
						}
						
					});

					var data = JSON.parse(r);
					var image = '/img/marcador.png';
					var infowindow = new google.maps.InfoWindow();
					for (var i = 0; i < data.length; i++) {
					    var location = data[i];
						console.log(location);
					    var marker = new google.maps.Marker({
					      position: {lat:location[1], lng:location[2]},
					      map: map,
					      icon: image,
					      url:"/tienda/"+location[3],
					      animation:google.maps.Animation.DROP,
					      title: location[0]
					    });
					    (function (marker, location) {
		                    google.maps.event.addListener(marker, "click", function (e) {
		                        showDetails(location[3])
		                    });
		                })(marker, location);

					}
					
				})
			})

		
			$('#sideBack').removeClass('sr-only');
			
		})
	</script>

@endsection
