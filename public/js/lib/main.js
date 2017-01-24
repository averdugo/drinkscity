google.maps.event.addDomListener(window, 'load', ()=>{
	const user_location = new UserLocation(()=>{
		console.log(user_location);
		const mapOptions = {
			zoom:15,
			center:{
				lat: user_location.latitude,
				lng:user_location.longitud
			}
		}
		const mapa_element = document.getElementById('map');
		const map = new google.maps.Map(mapa_element, mapOptions);
	})
	
})

