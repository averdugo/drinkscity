<div id="userCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Registrate como Usuario</h4>
			</div>
			{!! Form::open(['url' => 'userss']) !!}
				<div class="modal-body">
					<div class="form-group">
						<button type="button" class="btn btn-primary btn-block" name="button">Ingresa con Facebook</button>
					</div>
					<div class="form-group">
						<label for="">Nombre de Usuario</label>
						<input name="username" type="text" class="form-control" placeholder="Nombre de Usuario" required="" />
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password" required="" />
					</div>
					<div class="form-group">
						<label for="">Email</label>
					   <input name="email" type="email" class="form-control" placeholder="Email" required="required" />
				   </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary newUser">Guardar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
