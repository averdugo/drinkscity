'use strict';

google.maps.event.addDomListener(window, 'load', function () {
	var user_location = new UserLocation(function () {
		console.log(user_location);
		var mapOptions = {
			zoom: 15,
			center: {
				lat: user_location.latitud,
				lng: user_location.longitud
			}
		};
		var mapa_element = document.getElementById('map');
		var map = new google.maps.Map(mapa_element, mapOptions);

		var searchInput = document.getElementById('searchInput');
		var autocomplete = new google.maps.places.Autocomplete(searchInput);

		var marker = new google.maps.Marker({
			map: map
		});

		autocomplete.bindTo('bounds', map);
		google.maps.event.addListener(autocomplete, "place_changed", function () {
			var place = autocomplete.getPlace();

			document.getElementById("latInput").value = place.geometry.location.lat();
			document.getElementById("lonInput").value = place.geometry.location.lng();
			document.getElementById("Direccion").value = place.name;
			

			if (place.geometry.viewport) {
				map.fitBounds(place.geometry.viewport);
			} else {
				map.setCenter(place.geometry.location);
				map.setZoom(10);
			}
			marker.setPlace({
				placeId: place.place_id,
				location: place.geometry.location
			});

			marker.setVisible(true);
		});
	});
});
