<div class="text-center" style="padding-top:8px">
	<h3>Destacados</h3>
</div>
<div class="swiper-container">
	<div class="swiper-wrapper">
		@foreach ($destacados as $destacado)
			<div class="swiper-slide anuncioBox" >
				<div class="anuncioImgbox">
					<img src="/img/avisos/{{$destacado->imagen}}" alt="" class="avisoImg" />
				</div>
				<div class="">
					<span class="tituloHomeShow">{{$destacado->titulo}}</span><br>
					<span class="tiendaHomeShow">{{$destacado->store_id}}</span><br>
					<span class="precioHomeShow">{{$destacado->precio}}</span><br>
					<span class="distanciaHomeShow"></span>
				</div>
			</div>
		@endforeach
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>

</div>
<div class="text-center bannerBox">
	<img src="/img/slide2.jpg" class="bannerImg" alt="" /><br>
	<span class="tituloHomeShow">Vodka Absolut 1lt</span><br>
	<span class="tiendaHomeShow">Drinkscity.cl</span><br>
	<span class="precioHomeShow">$10.000</span><br>
	<span class="distanciaHomeShow">3km</span>
</div>
