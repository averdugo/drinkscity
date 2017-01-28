@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<h2>{{$store->tienda_Nombre}}</h2>

					<div class="col-xs-12 col-md-6">
						<ul>
							<li>Tipo Tienda:  <strong>{{$store->id_tipo_tienda}}</strong></li>
							<li>Rut Tienda: <strong>{{$store->tienda_rut}}</strong></li>
							<li>Telefono Tienda: <strong>{{$store->tienda_fono}}</strong></li>
							<li>Direccion: <strong>{{$store->tienda_direccion}}</strong></li>
							<li>Comuna: <strong>{{$store->comuna_id}}</strong></li>
							<li>Region: <strong>{{$store->region_id}}</strong></li>
							<li>Nombre Representante: <strong>{{$store->Repres_nombre}}</strong></li>
							<li>Rut Representante: <strong>{{$store->Repres_rut}}</strong></li>
							<li>Telefono Representante: <strong>{{$store->Repres_Fono}}</strong></li>
							<li>Email Representante: <strong>{{$store->Repres_email}}</strong></li>
							<li>Horario: <strong>{{$store->desde}} - {{$store->hasta}}</strong></li>
							<li>Estado: <strong>{{$store->status}}</strong></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="">
							<img src="/img/stores/{{$store->imagen}}" alt="" style="width:100%" />
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection
