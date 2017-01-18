class UserLocation{
	constructor(callback){
		if (navigator.geolocation) {

			navigator.geolocation.getCurrentPosition((localizacion)=>{
				this.latitud = localizacion.coords.latitude;
				this.longitude = localizacion.coords.longitude;
				callback()
			})
		}else{
			alert('asdasda')
		}
	}
}
