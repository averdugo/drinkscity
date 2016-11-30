$(function(){

	$('.newUser').click(function(e){
		e.preventDefault();
		var data = $('#userCreateForm').serializeObject();
		var url = "/user"
		$.post(url,data,function(r){
			if (r == 'ok') {
				$('#userCreate').modal('hide');

				swal({
					title: "Usuario Creado",
					text: "Quieres Crear una Tienda para este usuario",
					type: "success",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Si Crear Tienda",
					cancelButtonText: "No, gracias",
					closeOnConfirm: true,
					closeOnCancel: true
				}, function(isConfirm){
					if (isConfirm) {
						$('#storeCreate').modal('show');
					}
				});
			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})

	$('#userSelect').on('change', function() {
	  var val = $(this).val();
	  $('#userIdStoreCreate').val(val);
	});

	$('.newStore').click(function(e){
		e.preventDefault();
		var data = $('#storeCreateForm').serializeObject();
		var url = "/stores"
		$.post(url,data,function(r){
			if (r == 'ok') {
				$('#storeCreate').modal('hide');
				swal({   title: "Tienda Creada",  timer: 2000,   showConfirmButton: false });

			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})

	$('.btnCrearTienda').click(function(e){
		e.preventDefault();
		var url = "getUsers"
		$.get(url,function(r){
			$('#userSelect').html(r);
			$('#storeCreate').modal('show');
		})
	})

});
