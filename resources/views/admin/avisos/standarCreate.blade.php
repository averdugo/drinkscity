@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					
					<h2>Crear Aviso Estandar</h2>

					<form class="" action="/avisos" method="post" enctype="multipart/form-data">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_tipo_aviso" value="{{$type}}">

						<div class="col-xs-12 col-md-6">

							<div class="form-group">
								<label for="">Titulo</label>
								<?= Form::text('titulo',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Tipo de Familia</label>
								<?= Form::select('id_tipo_familia', $tfamilia,null,['class' => 'form-control','placeholder' => 'Familia']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Tipo de Producto</label>
								<?= Form::select('id_tipo_producto', $tproducto, null, ['class' => 'form-control','placeholder' => 'Producto']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Marca</label>
								<?= Form::select('id_marca', $tmarca, null, ['class' => 'form-control','placeholder' => 'Marca']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Forma</label>
								<?= Form::select('id_tipo_forma', $tforma, null, ['class' => 'form-control','placeholder' => 'Forma']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione Grados</label>
								<?= Form::select('id_tipo_grados', $tgrados, null, ['class' => 'form-control','placeholder' => 'Grados']); ?>
							</div>
							<div class="form-group">
								<label for="">Seleccione CC</label>
								<?= Form::select('id_tipo_cc', $tcc, null, ['class' => 'form-control','placeholder' => 'CC']); ?>
							</div>


						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="">Imagen Aviso</label>
								{!! Form::file('image', null) !!}
							</div>
							<div class="form-group">
								<label for="">Descripcion</label>
								<?= Form::textarea('descripcion',null ,['class' => 'form-control','rows'=>4]); ?>
							</div>
							<div class="form-group">
								<label for="">Stock</label>
								<?= Form::text('stock',null ,['class' => 'form-control']); ?>
							</div>
							<div class="form-group sr-only">
								<label for="">Fecha de Inicio</label>
								<?= Form::text('fecha_inicio',null ,['class' => 'date-picker form-control']); ?>
							</div>
							<div class="form-group sr-only">
								<label for="">Fecha de Termino</label>
								<?= Form::text('fecha_termino',null ,['class' => 'date-picker form-control']); ?>
							</div>
							<div class="form-group sr-only">
								<label for="">Fecha de Termino</label>
								<?= Form::text('fecha_termino',null ,['class' => 'date-picker form-control']); ?>
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

@endsection
