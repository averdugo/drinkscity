<div id="notiCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear Notificacion</h4>
			</div>
			{!! Form::open(['url' => 'notification', 'id'=> 'notiCreateForm']) !!}
				<div class="form-group">
					<label for="">Seleccione Usuario</label>
					<select class="form-control" id="userSelect2" name="user_id">

					</select>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input name="title" type="text" class="form-control" placeholder="Titulo" required="" />
					</div>

					<div class="form-group">
					   <textarea name="description" rows="2" cols="40" class="form-control"></textarea>
				   </div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary newNoti">Guardar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
