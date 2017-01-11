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
									<th class="column-title">Imagen</th>
									<th class="column-title">Titulo</th>
									<th class="column-title">Descripcion</th>
									<th class="column-title">Stock</th>
									<th class="column-title">Fecha</th>


									<th class="column-title "><span class="nobr">Acciones</span></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($avisos as $aviso)
									<tr class="even pointer">
										<td class=" "><img src="/img/avisos/{{$aviso->imagen}}" style="max-width:130px"/></td>
									    <td class=" ">{{ $aviso->titulo }}</td>
										<td class=" ">{{ $aviso->descripcion }} </td>
										<td class=" ">{{ $aviso->stock }}</td>
										<td class=" ">{{ $aviso->rango_fecha }}</td>

										<td data-id="{{ $aviso->id }}">
											<a href="/avisos/{{ $aviso->id }}"  title="Ver Aviso" class="btn btn-default" ><i class="fa fa-eye"></i></a>
											<a href="/avisos/{{ $aviso->id }}/edit"  title="Editar Aviso" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
											<button type="button" title="Eliminar Producto" class="btn btn-default deleteAviso"><i class="fa fa-minus"></i></button>
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
