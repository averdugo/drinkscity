google.maps.event.addDomListener(window,'load',()=>{
	const mapOptions = {
		zoom:15,
		center:{
			lat: 0,
			lng:0
		}
	}
	const mapa_element = document.getElementById('map');
	const map = new.google.maps.Map(mapa_element, mapOptions);
})
const user_location = new UserLocation(()=>{
	console.log(user_location);

})
