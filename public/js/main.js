var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(function(){

	$('.newUser').click(function(e){
		e.preventDefault();
		var data = $('#userCreateForm').serializeObject();
		var url = "/user"
		$.post(url,data,function(r){
			if (r.id > 0) {
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
						if (isConfirm) {
							location.href="/stores/create?id="+r.id;
						} else {
							location.href="/users";
						}
					};
				});
			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})


    $('.newUser2').click(function(e){
		e.preventDefault();
		var data = $('#userCreateForm2').serializeObject();
		var url = "/userFromStore"
		$.post(url,data,function(r){
			if (r) {
				$('#userCreate2').modal('hide');
				swal({   title: "Usuario Creado",  timer: 2000,   showConfirmButton: false });
                setTimeout(function(){
                    location.reload();
                }, 2000);

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
	$('.newProduct').click(function(e){
		e.preventDefault();
		var data = $('#productCreateForm').serializeObject();
		var url = "/product"
		$.post(url,data,function(r){
			if (r == 'ok') {
				$('#productCreate').modal('hide');
				swal({   title: "Producto Creado",  timer: 2000,   showConfirmButton: false });

			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})

	$('.newNoti').click(function(e){
		e.preventDefault();
		var data = $('#notiCreateForm').serializeObject();
		var url = "/notification"
		$.post(url,data,function(r){
			if (r == 'ok') {
				$('#notiCreate').modal('hide');
				swal({   title: "Notificacion Creada",  timer: 2000,   showConfirmButton: false });

			}else{
				swal({   title: "Error",  timer: 2000,   showConfirmButton: false });
			}
		});
	})

	$('#selectRegion').on('change', function() {

		var url ="/getProvincias/"+ this.value;
		$.get(url,function(r){
			$('#selectProvincia').html('');
			select = document.getElementById('selectProvincia');
			$.each( r, function( key, value ) {
			  	var opt = document.createElement('option');
			    opt.value = value.provincia_id;
			    opt.innerHTML = value.provincia_nombre;
			    select.appendChild(opt);
			});

			$('#selectProvinciaDiv').removeClass('sr-only');

		})
	})

	$('#selectProvincia').on('change', function() {

		var url ="/getComunas/"+ this.value;
		$.get(url,function(r){
			$('#selectComuna').html('');
			select = document.getElementById('selectComuna');
			$.each( r, function( key, value ) {
			  	var opt = document.createElement('option');
			    opt.value = value.comuna_id;
			    opt.innerHTML = value.comuna_nombre;
			    select.appendChild(opt);
			});

			$('#selectComunaDiv').removeClass('sr-only');

		})
	})

	$('.seeStores').click(function(e){
		e.preventDefault();
		var userId = $(this).parent().data('id');
		location.href="/stores/"+userId;
	})
	$('.adminLogout').click(function(e){
		e.preventDefault();
		var url ="/adminlogout"
		$.get(url,function(){
			location.href="/login";
		})
	})

	$('.editUser').click(function(e){
		e.preventDefault();
		var userId = $(this).parent().data('id');
		var url = "/user/"+userId;
		$.get(url,function(r){
			console.log(r);
			$('#usernameEdit').val(r.username);

			$('#emailEdit').val(r.email);
			$('#userUpdateModal select').val(r.type);
			$('#userUpdateModal').modal('show');
		})

	})

	$('.editStore').click(function(){
		var storeId = $(this).parent().data('id');
		location.href="/stores/"+storeId+"/edit";
	})

	$('.deleteUser').click(function(e){
		e.preventDefault();
		var _token = $('input[name="_token"]').val();
		var userId = $(this).parent().data('id');
		$.ajax({
		    url: '/user/'+userId,
		    type: 'DELETE',
			data: { _token : _token },
		    success: function(r) {
					location.reload();
		    }
		});
	})
	$('.deleteAviso').click(function(e){
		e.preventDefault();
		var _token = $('input[name="_token"]').val();
		var aviso = $(this).parent().data('id');
		$.ajax({
		    url: '/avisos/'+aviso,
		    type: 'DELETE',
			data: { _token : _token },
		    success: function(r) {
					location.reload();
		    }
		});
	})

	$('.deleteStore').click(function(e){
		e.preventDefault();
		var _token = $('input[name="_token"]').val();
		var storeId = $(this).parent().data('id');
		$.ajax({
		    url: '/stores/'+storeId,
		    type: 'DELETE',
			data: { _token : _token },
		    success: function(r) {
					location.reload();
		    }
		});
	})

	$('.btnCrearNoti').click(function(e){
		e.preventDefault();
		var url = "getUsers"
		$.get(url,function(r){
			$('#userSelect2').html(r);
			$('#notiCreate').modal('show');
		})
	})

	$('.btnCrearProducto').click(function(e){
		e.preventDefault();

		var url = "getStores";
		$.get(url,function(r){

		})
	})

    $('body').on('click','.acceptStore', function(e){
        e.preventDefault();
        var storeId = $(this).parent().data('id');
		var url = "statusStore/"+storeId
        $.get(url,function(r){
            if (r) {
                swal({
                    title: "Tienda Activa",
                    text: "Ahora Crear Usuario",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok",
                    closeOnConfirm: true,

                }, function(isConfirm){
                    if (isConfirm) {
                        $('#storeIdUser').val(r);
                        $('#userCreate2').modal('show');
                    };
                });
            }

		})
    })


});
