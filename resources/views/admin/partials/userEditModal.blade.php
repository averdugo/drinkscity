<div id="userUpdateModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
			</div>
			{!! Form::open(['url' => 'user', 'id'=> 'userUpdateForm']) !!}
				<div class="modal-body">
					<div class="form-group">
						<label for="">Nombre de Usuario</label>
						<input name="username" id="usernameEdit" type="text" class="form-control" placeholder="Nombre de Usuario" required="" />
					</div>

					<div class="form-group">
						<label for="">Email</label>
					   <input name="email" type="email" id="emailEdit" class="form-control" placeholder="Email" required="" />
				   </div>
					<div class="form-group">
						<label for="">Tipo de Usuario</label>
					   <select class="form-control" name="type" id="UserTypeEdit">
						   <option value="0">Selecciona Tipo de Usuario</option>
						   <option value="1">Admin</option>
						   <option value="2">Cliente</option>
					   </select>
				   </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary newUser">Guardar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
