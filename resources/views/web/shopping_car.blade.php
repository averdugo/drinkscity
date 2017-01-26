@extends('web.layout')

@section('content')
	<section id="storesView" class="text-center" style="width:100%;padding: 0 10px">

		<header class="text-center" style="margin-top:80px">
			<h2 class="KR">MIS COMPRAS</h2>
			<img src="/img/linea.png" alt="" height="2" />
		</header>
		@for ($i = 0; $i < 10; $i++)
			<article class="">
				<div class="media" style="height: 170px;margin-top:30px">
					<div class="media-left">
						<a href="#" style="position:relative">
							<img class="" src="/img/stores/cuadro.jpg" alt="..." style="    width: 200px;">
						</a>
						<small style="float: left;">01/01/2016</small>
					</div>
					<div class="media-body text-left" style="position:relative;    padding-top: 2px;">
						<h4 class="media-heading KR" style="text-transform:uppercase">Producto</h4>
						<h5 class="media-heading KR">Cod:</h5>
						<small>Categoria:</small><br>
						<small>Descripcion:</small><br>
						<small>Direccion:</small><br>
						<small>Valor:</small><br>
						<h4 class="media-heading KR">$40.000</h4>

					</div>
					<div class="media-body text-right" style="position:relative;    padding-top: 2px;width:60px">
						<img src="/img/qrmini.png" alt="" width="40" /><br><br><br>
						<img src="/img/mapa_blanco.png" alt=""width="40" />
					</div>
				</div>
			</article>
			<img src="/img/linea.png" alt="" height="2" style="width: 100%;"/>
		@endfor

	</section>


@endsection

@section('scripts')

	<script type="text/javascript">
		$(function(){
			$('#sideBack').removeClass('sr-only');
		})
	</script>

@endsection
