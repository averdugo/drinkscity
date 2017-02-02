<div id="mySidenav" class="sidenav" style="padding-top:70px;border-right:1px solid white">
	<?php $user = Auth::user() ?>

	@if ($user)
		<div class="">
			<div class="flexFilter">
				<div class="" style="width: 25px;"></div>
				<div class="text-center">
					<img src="{{isset($user->imagen) ? $user->imagen : '/img/user.png'}}" alt="" width="40" style="margin-bottom:10px" /><br>
					<span class="KR">{{$user->username}}</span><br>
					<span class="KL">{{$user->email}}</span>
				</div>
				<div class="text-center">
					<img src="/img/not.png" alt="" width="25"style="margin-top: -10px;margin-bottom:20px"/><br>
					<img src="/img/rueda.png" alt=""width="20" />
				</div>
			</div>

			<a href="#" class="KL sideNavItem" style="padding: 5px!important;">Inicio</a>
			<a href="#" class="KL sideNavItem">Mis Compras</a>
			<a href="#" class="KL sideNavItem">Favoritos</a>
			<a href="#" class="KL sideNavItem">Contactanos</a>
			<a href="#" class="KL sideNavItem">Bases Legales</a>
			<a href="/logout" class="KL sideNavItem">Cerrar Sesion</a>
			<div class="text-center" style="margin-top:20px">
				<img src="/img/drinkscity.png" alt="" width="90px"/><br><br>
				<p class="KL" style="font-size:14px">www.drinkscity.cl</p>
				<p class="KL" style="font-size:14px">Todos los derechos reservados</p>
			</div>
		</div>
	@else
		<div class="">
			<div class="text-center" style="margin-top:5px">
				<img src="/img/drinkscity.png" alt="" width="90px"/><br><br>

			</div>
			<a href="#" class="KL sideNavItem sr-only" data-toggle="modal" data-target="#userCreate">Nuevo Usuario</a>
			<a href="/storeCreate" class="KL sideNavItem">Registra tu Tienda</a>
			
			<br><br><br><br>
			<div class="text-center">
				<p class="KL" style="font-size:14px">www.drinkscity.cl</p>
				<p class="KL" style="font-size:14px">Todos los derechos reservados</p>
			</div>

		</div>
	@endif




</div>
