'use strict';

google.maps.event.addDomListener(window, "load", function () {
	var mapOptions = {
		zoom: 15,
		center: {
			lat: 0,
			lng: 0
		}
	};
	var mapa_element = document.getElementById('map');
	const map = new google.maps.Map(mapa_element, mapOptions);
});
var user_location = new UserLocation(function () {
	console.log(user_location);
});
