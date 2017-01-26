@extends('clients.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<h2>Crear Tienda</h2>

					<form class="" action="/stores" method="post" enctype="multipart/form-data">

						 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						 <input type="hidden" name="user_id" value="{{ $user->id }}">
						 <input type="hidden" name="status" value="1">
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="">Imagen de Tienda</label>
								{!! Form::file('image', null) !!}
							</div>

							<div class="form-group">
								<label for="">Seleccione Tipo de Tienda</label>
								<?= Form::select('id_tipo_tienda', $tipoTienda, null, ['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Nombre Tienda</label>
								<?= Form::text('tienda_Nombre',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Rut Tienda</label>
								<?= Form::text('tienda_rut',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Telefono Tienda</label>
								<?= Form::text('tienda_fono',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Correo Tienda</label>
								<?= Form::text('tienda_correo',null ,['class' => 'form-control']); ?>
							</div>
							<h4>Horarios</h4>
							<div class="form-group">
								<label for="">Dias</label>
								<?= Form::text('desde',null ,['class' => 'form-control','placeholder'=>'Lunes-Viernes']); ?>
							</div>
							<div class="form-group">
								<label for="">Hora</label>
								<?= Form::text('hasta',null ,['class' => 'form-control','placeholder'=>'08:00-12:00']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Region</label>
								<?= Form::select('region_id', $regiones, null, ['class' => 'form-control', 'id'=>'selectRegion']); ?>
							</div>
							<div id="selectProvinciaDiv" class="form-group sr-only">
								<label for="">Seleccione Provincia</label>
								<?= Form::select('provincias', [], null, ['class' => 'form-control', 'id'=>'selectProvincia']); ?>
							</div>
							<div id="selectComunaDiv" class="form-group sr-only">
								<label for="">Seleccione Comuna</label>
								<?= Form::select('comuna_id', [], null, ['class' => 'form-control', 'id'=>'selectComuna']); ?>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="">Direccion Tienda</label>
								<input id="searchInput" type="text" name="" class="form-control" placeholder="Direccion de la Tienda">
								<div id="map"></div>
								<input id="latInput" type="hidden" name="latitude" value="">
								<input id="lonInput" type="hidden" name="longitude" value="">
								
							</div>
							
							<div class="form-group">
								<label for="">Nombre Representante</label>
								<?= Form::text('Repres_nombre',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Rut Representante</label>
								<?= Form::text('Repres_rut',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Telefono Representante</label>
								<?= Form::text('Repres_Fono',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Correo Representante</label>
								<?= Form::email('Repres_email',null ,['class' => 'form-control']); ?>
							</div>

						</div>
						<div class="clearfix "></div>
						<button type="submit" class="btn btn-primary" style="float:right">Guardar</button>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script src="/js/src/user_location.js" ></script>
	<script src="/js/src/main.js" ></script>
	<script type="text/javascript">
	$(function(){
		var userID = getUrlParameter('id');

		$('select[name="user_id"]').val(userID)
	})
	</script>

@endsection
