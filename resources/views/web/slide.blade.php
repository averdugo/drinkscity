<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
			<img src="/img/dc.jpg" alt="" />
		</div>
		@foreach ($slides as $slide)
		    <div class="item">
		    	<a href="/aviso/{{$slide->id}}">
		    		<img src="/img/{{$slide->imagen}}" alt="{{$slide->titulo}}" />
		    	</a>
				
			</div>
		@endforeach
    </div>

</div>
<div class="filterBand flexFilter">
	<div class="">
		<a href="#" >
			<img src="/img/cerv.png" alt="" class="imgFilterBand" />
		</a>
	</div>
	<div class="">
		<a href="#" >
			<img src="/img/bar.png" alt="" class="imgFilterBand" />
		</a>
	</div>
	<div class="">
		<a href="#" >
			<img src="/img/trago.png" alt="" class="imgFilterBand" />
		</a>
	</div>
	<div class="">
		<a href="#" >
			<img src="/img/motel.png" alt="" class="imgFilterBand" />
		</a>
	</div>
	<div class="">
		<a href="#" >
			<img src="/img/trago2.png" alt="" class="imgFilterBand" />
		</a>
	</div>
</div>
