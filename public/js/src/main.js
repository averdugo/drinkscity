'use strict';

google.maps.event.addDomListener(window, 'load', function () {
	var user_location = new UserLocation(function () {
		console.log(user_location);
		var mapOptions = {
			zoom: 15,
			center: {
				lat: user_location.latitude,
				lng: user_location.longitud
			}
		};
		var mapa_element = document.getElementById('map');
		var map = new google.maps.Map(mapa_element, mapOptions);
	});
});
