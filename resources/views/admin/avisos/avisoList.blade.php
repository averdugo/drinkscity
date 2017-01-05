@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<p>Lista de Avisos</p>

					<div class="table-responsive">
						<table class="table table-striped jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">Titulo</th>
									<th class="column-title">Descripcion</th>
									<th class="column-title">Stock</th>
									<th class="column-title">fecha_inicio</th>
									<th class="column-title">fecha_termino</th>

									<th class="column-title "><span class="nobr">Acciones</span></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($avisos as $aviso)
									<tr class="even pointer">
									    <td class=" ">{{ $aviso->titulo }}</td>
										<td class=" ">{{ $aviso->descripcion }} </td>
										<td class=" ">{{ $aviso->stock }}</td>
										<td class=" ">{{ $aviso->fecha_inicio }}</td>
										<td class=" ">{{ $aviso->fecha_termino }}</td>


										<td data-id="{{ $aviso->id }}">
											<button type="button" title="Ver Producto" class="btn btn-default"><i class="fa fa-building"></i></button>
											<button type="button" title="Editar Tienda" class="btn btn-default editStore"><i class="fa fa-pencil"></i></button>
											<button type="button" title="Eliminar Producto" class="btn btn-default deleteStore"><i class="fa fa-minus"></i></button>
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
