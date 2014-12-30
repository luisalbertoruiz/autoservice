<div class="sidebar-menu">
	<header class="logo-env">
		<!-- logo -->
		<div class="logo">
			<a href="../../../neon-x/dashboard/main/index.html">
				{{ HTML::image('img/logo.png', '', array('style' => 'width:150px'))}}
			</a>
		</div>
				<!-- logo collapse icon -->
		<div class="sidebar-collapse">
			<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
				<i class="entypo-menu"></i>
			</a>
		</div>
		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>
	<ul id="main-menu" class="">
		<li>
			<a href="#"><i class="fa fa-user"></i><span>Usuarios</span></a>
		</li>
		<li class="">
			<a href="#"><i class="fa fa-users"></i><span>Clientes</span></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-truck"></i><span>Vehículos</span></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-tachometer"></i><span>Servicios</span></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-archive"></i><span>Almacen</span></a>
			<ul>
				<li>
					<a href="#"><i class="fa fa-shopping-cart"></i><span>Proveedores</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-gears"></i><span>Refacciones</span></a>
				</li>
			</ul>
		</li>
		
		<li>
			<a href="#"><i class="fa fa-tachometer"></i><span>Taller</span></a>
			<ul>
				<li>
					<a href="#"><i class="fa fa-dollar"></i><span>Presupuestos</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-file-text"></i><span>Orden de trabajo</span></a>
				</li>
			</ul>
		</li>
	</ul>
</div>