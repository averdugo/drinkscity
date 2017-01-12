@extends('web.layout')

@section('content')
	@include('web.partials.ofertas_momentos')
	@include('web.partials.destacados')
	@include('web.partials.mas_cercanos')
@endsection

@section('scripts')
	<script src="/js/swiper.min.js"></script>
	<script type="text/javascript">
		$('.carousel').carousel();

		var swiper = new Swiper('.swiper-container', {
			autoplay:2000,
			slidesPerView: 'auto',
			centeredSlides: false,

			spaceBetween: 30
		});

	</script>

@endsection
