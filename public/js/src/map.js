'use strict';

google.maps.event.addDomListener(window, 'load', function () {
	var user_location = new UserLocation(function () {
		var myLatlng = new google.maps.LatLng(user_location.latitud,user_location.longitud);
		var mapOptions = {
			zoom: 15,
			center: myLatlng
		};
		
		var mapa_element = document.getElementById('map');
		var map = new google.maps.Map(mapa_element, mapOptions);

		var searchInput = document.getElementById('searchInput');
		var autocomplete = new google.maps.places.Autocomplete(searchInput);

		var marker = new google.maps.Marker({
			map: map,
			position: myLatlng,
		});

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
	});
});
