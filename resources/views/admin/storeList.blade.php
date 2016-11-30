@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<p>Lista de Tiendas</p>

					<div class="table-responsive">
						<table class="table table-striped jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">Nombre</th>
									<th class="column-title">Representante</th>
									<th class="column-title">Telefono Representante</th>
									<th class="column-title">Lugar</th>
									<th class="column-title">Tipo</th>
									<th class="column-title">Estado</th>
									<th class="column-title "><span class="nobr">Acciones</span></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($stores as $store)
									<tr class="even pointer">
									    <td class=" ">{{ $store->name }}</td>
										<td class=" ">{{ $store->r_name }} </td>
										<td class=" ">{{ $store->r_phone }}</td>
										<td class=" ">{{ $store->place }}</td>
										<td class=" ">{{ $store->store_type }}</td>
										<td class=" ">{{ $store->status }}</td>

										<td>
											<button type="button" title="Ver Producto" class="btn btn-default"><i class="fa fa-building"></i></button>
											<button type="button" title="Eliminar Producto" class="btn btn-default"><i class="fa fa-minus"></i></button>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection
