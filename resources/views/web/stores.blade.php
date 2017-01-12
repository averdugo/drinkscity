@extends('web.layout')

@section('content')
	<section id="storesView" class="text-center" style="width:100%;">

		<header class="text-center" style="margin-top:80px">
			<h2 class="KR">TIENDAS</h2>
			<img src="/img/linea.png" alt="" height="2" />
		</header>
		@for ($i = 0; $i < 10; $i++)
			<article class="">
				<div class="media" style="height: 170px;margin-top:30px">
					<div class="media-left">
						<a href="#" style="position:relative">
							<img class="" src="/img/stores/cuadro.jpg" alt="..." style="    width: 200px;">
							<img class="claStores" src="/img/calificacion.png" alt="" />
						</a>
					</div>
					<div class="media-body text-left" style="position:relative;    padding-top: 2px;">
						<h4 class="media-heading KR" style="text-transform:uppercase">Titulo Tienda</h4>
						<h5 class="media-heading KL">Media heading</h5>
						<p class="KR">Abierto hasta las 4</p>
						<small class="pull-right KL distStores">Distancia 4km</small>
					</div>
				</div>
			</article>
			<img src="/img/linea.png" alt="" height="2" />
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
