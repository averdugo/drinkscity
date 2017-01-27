var user_location = new UserLocation(function () {
	console.log(user_location)
})

$('body').on('click','#saveButton', function(){
	var data = $('#formStoreCreate').serializeObject();
	var url = "/storesss"
	console.log(data);

	$.post(url,data,function(r){
		console.log(r);
	})
})