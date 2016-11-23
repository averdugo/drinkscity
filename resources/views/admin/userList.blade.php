@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<p>Lista de Usuarios</p>

					<div class="table-responsive">
						<table class="table table-striped jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">Nombre de Usuario</th>
									<th class="column-title">Email</th>
									<th class="column-title">Tipo</th>
									<th class="column-title">Creado el </th>
									<th class="column-title "><span class="nobr">Acciones</span></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
									<tr class="even pointer">
									    <td class=" ">{{ $user->username }}</td>
										<td class=" ">{{ $user->email }} </td>
										<td class=" ">{{ $user->type }}</td>
										<td class=" ">{{ $user->created_at }}</td>
										<td>
											<button type="button" title="Ver Tiendas" class="btn btn-default"><i class="fa fa-building"></i></button>
											<button type="button" title="Eliminar Usuario" class="btn btn-default"><i class="fa fa-minus"></i></button>
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
