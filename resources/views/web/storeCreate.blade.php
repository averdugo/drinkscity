@extends('web.layout')

@section('content')
	<section id="storesView" class="" style="max-width:800px;margin:0 auto">

		<header class="text-center" style="margin-top:80px">
			<h2 class="KR">Registra tu Tienda</h2>
			<img src="/img/linea.png" alt="" height="2" />
		</header>
		<form class="" action="/storesss" method="post" enctype="multipart/form-data">

			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			 <input type="hidden" name="status" value="1345">
			<div class="col-xs-12 col-md-6" >
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

			</div>
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<label for="">Direccion Tienda</label>
					<?= Form::text('tienda_direccion',null ,['class' => 'form-control']); ?>
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
			<button type="submit" class="btn btn-primary" >Guardar</button>

		{!! Form::close() !!}

	</section>
<div class="clearfix "></div>

@endsection

@section('scripts')

	<script type="text/javascript">
		$(function(){
			$('#sideBack').removeClass('sr-only');
			$('#saveButton').removeClass('sr-only');
			$('#mapButton').addClass('sr-only');
		})
	</script>

@endsection