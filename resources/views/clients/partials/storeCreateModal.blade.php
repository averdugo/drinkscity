<div id="storeCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear Tienda</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'stores']) !!}
					<input id="userIdStoreCreate" type="hidden" name="user_id" value="{{ $user->id }}">
					<div class="form-group">
						<input name="r_name" type="text" class="form-control" placeholder="Nombre de Representante" required="" />
					</div>
					<div class="form-group">
						<input name="r_phone" type="text" class="form-control" placeholder="Telefono de Representante" required="" />
					</div>
					<div class="form-group">
					   <input name="email" type="email" class="form-control" placeholder="Email" required="" />
				    </div>
					<div class="form-group">
					   <input name="name" type="text" class="form-control" placeholder="Nombre de Comercio" required="" />
				    </div>
					<div class="form-group">
					   <input name="address" type="text" class="form-control" placeholder="Direccion" required="" />
				    </div>
					<div class="form-group">
					   <select class="form-control" name="city">
						   <option value="0">Selecciona ciudad</option>
						   <option value="1">Stgo</option>
						   <option value="2">Viña</option>
					   </select>
				   </div>
					<div class="form-group">
					   <select class="form-control" name="commune">
						   <option value="0">Selecciona comuna</option>

					   </select>
				   	</div>
					<div class="form-group">
					   <select class="form-control" name="type">
						   <option value="0">Tipo de Local</option>
						   <option value="1">Botillería</option>
						   <option value="2">Bar/Pub</option>
						   <option value="3">Discoteque</option>
						   <option value="4">Club nocturno</option>
						   <option value="5">Restobar</option>
						   <option value="6">Distribuidora</option>
						   <option value="7">Delivery</option>
						   <option value="8">Evento</option>
						   <option value="9">Hotel</option>
						   <option value="10">Motel</option>
						   <option value="11">Otro</option>

					   </select>
				   	</div>
					<div class="form-group">
					   <input name="schedule" type="text" class="form-control" placeholder="Horarios de atención" required="" />
				    </div>

				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Guardar</button>
			</div>

		</div>
	</div>
</div>
