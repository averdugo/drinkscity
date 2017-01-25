'use strict';

google.maps.event.addDomListener(window, 'load', function () {
	var user_location = new UserLocation(function () {
		console.log(user_location);
		var mapOptions = {
			zoom: 15,
			center: {
				lat: -33.382048399999995,
				lng: -70.5562293
			}
		};
		var mapa_element = document.getElementById('map');
		var map = new google.maps.Map(mapa_element, mapOptions);
	});

});
