google.maps.event.addDomListener(window, 'load', ()=>{
	const user_location = new UserLocation(()=>{
		console.log(user_location);
		const mapOptions = {
			zoom:15,
			center:{
				lat: user_location.latitud,
				lng: user_location.longitud
			}
		}
		const mapa_element = document.getElementById('map');
		const map = new google.maps.Map(mapa_element, mapOptions);

		const searchInput = document.getElementById('searchInput');
		const autocomplete = new google.maps.places.Autocomplete(searchInput);

		const marker = new google.maps.Marker({
			map:map
		})

		autocomplete.bindTo('bounds',map);
		google.maps.event.addListener(autocomplete,"place_changed",()=>{
			const place = autocomplete.getPlace();
			console.log(place.geometry.location);

			if (place.geometry.viewport) {
				map.fitBounds(place.geometry.viewport);
			}else{
				map.setCenter(place.geometry.location);
				map.setZoom(13)
			}
			marker.setPlace({
				placeId: place.place_id,
				location: place.geometry.location
			});

			marker.setVisible(true);

		})


	})
	
})

