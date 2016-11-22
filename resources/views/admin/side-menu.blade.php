<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="index.html" class="site_title">
				<img src="img/logo2.png" alt="" style="    width: 50px;" />
				<span>DrinksCity</span>
			</a>
		</div>

		<div class="clearfix"></div><br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">

				<ul class="nav side-menu">
					<li>
						<a><i class="fa fa-home"></i> Inicio</a>
					</li>
					<li><a><i class="fa fa-users"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="" data-toggle="modal" data-target="#userCreate">Crear Usuario</a></li>
							<li><a href="">Ver Usuarios</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-map-pin"></i> Tiendas <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="">Tiendas Pendientes</a></li>
							<li><a href="" data-toggle="modal" data-target="#storeCreate">Crear Tienda</a></li>
							<li><a href="">Ver Tiendas</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-briefcase"></i> Productos <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="">Crear Producto</a></li>
							<li><a href="">Ver Producto</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-newspaper-o"></i> Registros <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="">Tienda</a></li>
							<li><a href="">Productos</a></li>
							<li><a href="">Canjeados</a></li>
							<li><a href="">Ranking</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-comments"></i> Notificaciones <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="">Crear Notificacion</a></li>
							<li><a href="">Ver Notificacion</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	<!-- /sidebar menu -->

	</div>
</div>



<div id="userCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'user.store']) !!}
					<div class="form-group">
						<input name="username" type="text" class="form-control" placeholder="Nombre de Usuario" required="" />
					</div>
					<div class="form-group">
						<input name="password" type="password" class="form-control" placeholder="Password" required="" />
					</div>
					<div class="form-group">
					   <input name="email" type="email" class="form-control" placeholder="Email" required="" />
				   </div>
					<div class="form-group">
					   <select class="form-control" name="type">
						   <option value="0">Selecciona Tipo de Usuario</option>
						   <option value="1">Admin</option>
						   <option value="2">Cliente</option>
					   </select>
				   </div>


				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Guardar</button>
			</div>

		</div>
	</div>
</div>

<div id="storeCreate" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear Tienda</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'stores.store']) !!}
					<div class="form-group">
						<input name="r_name" type="text" class="form-control" placeholder="Nombre de Representante" required="" />
					</div>
					<div class="form-group">
						<input name="r_phone" type="text" class="form-control" placeholder="Telefono de Representante" required="" />
					</div>
					<div class="form-group">
					   <input name="email" type="email" class="form-control" placeholder="Email" required="" />
				    </div>
					<div class="form-group">
					   <input name="name" type="text" class="form-control" placeholder="Nombre de Comercio" required="" />
				    </div>
					<div class="form-group">
					   <input name="address" type="text" class="form-control" placeholder="Direccion" required="" />
				    </div>
					<div class="form-group">
					   <select class="form-control" name="city">
						   <option value="0">Selecciona ciudad</option>
						   <option value="1">Stgo</option>
						   <option value="2">Viña</option>
					   </select>
				   </div>
					<div class="form-group">
					   <select class="form-control" name="commune">
						   <option value="0">Selecciona comuna</option>

					   </select>
				   	</div>
					<div class="form-group">
					   <select class="form-control" name="type">
						   <option value="0">Tipo de Local</option>
						   <option value="1">Botillería</option>
						   <option value="2">Bar/Pub</option>
						   <option value="3">Discoteque</option>
						   <option value="4">Club nocturno</option>
						   <option value="5">Restobar</option>
						   <option value="6">Distribuidora</option>
						   <option value="7">Delivery</option>
						   <option value="8">Evento</option>
						   <option value="9">Hotel</option>
						   <option value="10">Motel</option>
						   <option value="11">Otro</option>

					   </select>
				   	</div>
					<div class="form-group">
					   <input name="schedule" type="text" class="form-control" placeholder="Horarios de atención" required="" />
				    </div>

				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Guardar</button>
			</div>

		</div>
	</div>
</div>
