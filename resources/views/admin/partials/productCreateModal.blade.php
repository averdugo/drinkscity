<div id="productCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear Tienda</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'product', 'id' => 'productCreateForm']) !!}

					<div class="form-group">
						<label for="">Seleccione Usuario</label>
						<select class="form-control" id="storeSelect" name="store_id">

						</select>
					</div>

					<div class="form-group">
						<input name="photo" type="hidden" class="form-control"  />
					</div>
					<div class="form-group">
						<input name="title" type="text" class="form-control" placeholder="Titulo" required="required" />
					</div>
					<div class="form-group">
					   <textarea name="description" rows="2" cols="40"  class="form-control" ></textarea>
				    </div>
					<div class="form-group">
					   <input name="price" type="number" class="form-control" placeholder="Precio" required="" />
				    </div>
					<div class="form-group">
					   <input name="schedules" type="text" class="form-control" placeholder="Horarios" required="" />
				    </div>


				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary newProduct">Guardar</button>
			</div>

		</div>
	</div>
</div>
