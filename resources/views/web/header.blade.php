<nav class="headerNav">
    <div class="flexNav navP" style=" ">

		<div class="">
            <button type="button" class="btn btn-default sr-only" onclick="history.go(-1);" name="button" id="sideBack">
				<i class="glyphicon glyphicon-menu-left" style="font-size:25px;color:white;margin-top:5px"></i>
			</button>
			<button type="button" class="btn btn-default" onclick="openNav()" name="button" id="sideMenu">
				<i class="glyphicon glyphicon-menu-hamburger" style="font-size:25px;color:white;margin-top:5px"></i>
			</button>
		</div>
		<div class="navCenter">
			<form class="form-inline">
			  <div class="form-group formDivHeader">
			    <div class="input-group" style="max-width: 400px;    width: 100%;    margin-top: 7px;">
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Buscar por palabra clave.." style="text-align:center">
			      <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
			    </div>
			  </div>
			</form>
		</div>
		<div class="">
			<button type="button" class="btn btn-default" id="mapButton"  name="button">
				<img src="/img/mapa_blanco.png" alt="" style="width:35px"/>
			</button>
            <button type="button" class="btn btn-default sr-only" id="saveButton"  name="button">
				<i class="glyphicon glyphicon-floppy-saved" style="font-size:25px;color:white;margin-top:5px"></i>
			</button>
		</div>
    </div><!-- /.navbar-collapse -->
</nav>
