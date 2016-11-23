$(function(){
	$('.newUser').click(function(e){
		e.preventDefault();
		var data = $('#userCreateForm').serializeObject();
		var url = "/user"
		$.post(url,data,function(r){
			if (r == 'ok') {
				$('#userCreate').modal('hide');
				swal({   title: "Usuario Creado",  timer: 2000,   showConfirmButton: false });
			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})
});
