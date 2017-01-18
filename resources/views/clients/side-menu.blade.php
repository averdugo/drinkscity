<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="/" class="site_title">
				<img src="/img/logo2.png" alt="" style="    width: 50px;" />
				<span>DrinksCity</span>
			</a>
		</div>

		<div class="clearfix"></div><br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">

				<ul class="nav side-menu">
					<li>
						<a href="/clients/{{ $user->id }}"><i class="fa fa-home"></i> Inicio</a>
					</li>

					<li><a><i class="fa fa-map-pin"></i> Tiendas <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="/getStoresById/{{ $user->id }}">Mis Tiendas</a></li>
							<li><a href="/stores/create?id={{ $user->id }}" >Crear Tienda</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-briefcase"></i> Avisos <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="/avisos/create?id={{ $user->id }}">Crear Avisos</a></li>
							<li><a href="/avisos">Ver Avisos</a></li>
						</ul>
					</li>
					<li class="sr-only"><a><i class="fa fa-newspaper-o"></i> Registros <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="">Productos</a></li>
							<li><a href="">Canjeados</a></li>
							<li><a href="">Ranking</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	<!-- /sidebar menu -->

	</div>
</div>
