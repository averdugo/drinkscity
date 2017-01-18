'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var UserLocation = function UserLocation(callback) {
	var _this = this;

	_classCallCheck(this, UserLocation);

	if (navigator.geolocation) {

		navigator.geolocation.getCurrentPosition(function (localizacion) {
			_this.latitud = localizacion.coords.latitude;
			_this.longitude = localizacion.coords.longitude;
			callback();
		});
	} else {
		alert('asdasda');
	}
};
