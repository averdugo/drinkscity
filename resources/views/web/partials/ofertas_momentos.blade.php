<div class="text-center" style="padding-top:8px">
	<h3>OFERTAS DEL MOMENTO</h3>
</div>
<div class="swiper-container">
	<div class="swiper-wrapper">
		@for ($i = 0; $i < 10; $i++)

			<div class="swiper-slide" style="width: 255px">
				<div class="" style="margin-bottom:7px">
					<img src="/img/crono.png" alt="" />
					<span>18:00</span>
				</div>

				<div class="" style="position:relative;height: 180px;">
					
					<img src="/img/avisos/rec1.jpg" alt="" class="avisoImg" />
				</div>
				<div class="">
					<span class="tituloHomeShow">Vodka Absolut 1lt</span><br>
					<span class="tiendaHomeShow">Drinkscity.cl</span><br>
					<span class="precioHomeShow">$10.000</span><br>
					<span class="distanciaHomeShow">3km</span>
				</div>

			</div>

		@endfor
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>
