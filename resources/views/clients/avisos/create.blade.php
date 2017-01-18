@extends('clients.layout')

@section('content')
	    <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<h2>Crear Aviso Estandar</h2>

					<form class="" action="/avisos" method="post" enctype="multipart/form-data">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="">Seleccione Tienda</label>
								<?= Form::select('store_id', $stores,null,['class' => 'form-control','placeholder' => 'Tienda']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Tipo de Aviso</label>
								<?= Form::select('id_tipo_aviso', $type,null,['class' => 'form-control','placeholder' => 'Aviso']); ?>
							</div>
							<div class="form-group">
								<label for="">Titulo</label>
								<?= Form::text('titulo',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Categoria</label>
								<?= Form::select('categoria', $category,null,['id'=>'CategorySelect','class' => 'form-control','placeholder' => 'Categoria']); ?>
							</div>
							<div class="form-group" id="CategoryTypeBox" style="display:none">
								<label for="">Detalles Categoria</label>
								<select id="selectCategoryType" class="form-control" name="">

								</select>
								<input type="hidden" name="tipo_categoria" value="" id="tipo_categoria">
							</div>
							<div class="form-group">
								<label for="">Descripcion</label>
								<?= Form::textarea('descripcion',null ,['class' => 'form-control','rows'=>4]); ?>
							</div>
							<div class="form-group">
								<label for="">Precio</label>
								<?= Form::text('precio',null ,['class' => 'form-control']); ?>
							</div>

						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="">Imagen Aviso</label>
								{!! Form::file('image', null) !!}
							</div>

							<div class="form-group">
								<label for="">Stock</label>
								<?= Form::text('stock',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Rango Fechas</label>
								<?= Form::text('rango_fecha',null ,['class' => 'date-picker form-control']); ?>
							</div>

							<div class="form-group">
								<label for="">Hora de Inicio</label>
								<input type="time" name="hora_inicio" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Hora de Termino</label>
								<input type="time" name="hora_termino" class="form-control">
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
	<!-- bootstrap-daterangepicker -->
    <script src="/vendors/moment/min/moment.min.js"></script>
    <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="/js/aviso.js" charset="utf-8"></script>
@endsection
