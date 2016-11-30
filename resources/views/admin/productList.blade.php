@extends('admin.layout')

@section('content')
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<p>Lista de Products</p>

					<div class="table-responsive">
						<table class="table table-striped jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">Titulo</th>
									<th class="column-title">Description</th>
									<th class="column-title">Precio</th>
									<th class="column-title">Tienda</th>
									<th class="column-title "><span class="nobr">Acciones</span></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
									<tr class="even pointer">
									    <td class=" ">{{ $product->title }}</td>
										<td class=" ">{{ $product->description }} </td>
										<td class=" ">{{ $product->price }}</td>
										<td class=" ">{{ $product->store_id }}</td>

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
