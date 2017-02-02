<div class="text-center" style="padding-top:8px">
	<h3>MAS CERCANOS</h3>
</div>
<div class="" style="padding-left: 35px;">

		@foreach ($promociones as $pros)
			<div class="col-xs-12 col-sm-6 col-md-3 anuncioBox" style="margin-bottom:20px;">
				<div class="anuncioImgbox">
					<img src="/img/avisos/{{$pros->imagen}}" alt="" class="avisoImg" />
				</div>
				<div class="text-center" style="margin-top: 20px;">
					<span class="tituloHomeShow">{{$pros->titulo}}</span><br>
					<span class="tiendaHomeShow">{{$pros->store_id}}</span><br>
					<span class="precioHomeShow">{{$pros->precio}}</span><br>
					<span class="distanciaHomeShow"></span>
				</div>
			</div>

		@endforeach
		@foreach ($avisos as $avi)
			<div class="col-xs-12 col-sm-6 col-md-3 anuncioBox" style="margin-bottom:20px;">
				<div class="anuncioImgbox">
					<img src="/img/avisos/{{$avi->imagen}}" alt="" class="avisoImg" />
				</div>
				<div class="text-center" style="margin-top: 20px;">
					<span class="tituloHomeShow">{{$avi->titulo}}</span><br>
					<span class="tiendaHomeShow">{{$avi->store_id}}</span><br>
					<span class="precioHomeShow">{{$avi->precio}}</span><br>
					<span class="distanciaHomeShow"></span>
				</div>
			</div>

		@endforeach
		<div class="clearfix">

		</div>

</div>
