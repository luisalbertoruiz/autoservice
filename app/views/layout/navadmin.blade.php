<nav class="navbar navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ URL::to('/') }}"><span class="glyphicon glyphicon-home"> Home</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('/admin/usuario') }}">Usuarios</a></li>
			<li><a href="{{ URL::to('/admin/cliente') }}">Clientes</a></li>
			<li><a href="{{ URL::to('/contacto') }}">Automoviles</a></li>
			<li><a href="{{ URL::to('/contacto') }}">Servicios</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::to('/login') }}">Salir</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Desplegable <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
@if(Session::has('flash_warning'))
	<div id="notice" class="alert alert-warning" role="alert">{{ Session::get('flash_warning') }}</div>
@endif
@if(Session::has('flash_error'))
	<div id="notice" class="alert alert-danger" role="alert">{{ Session::get('flash_error') }}</div>
@endif
@if(Session::has('flash_notice'))
	<div id="notice" class="alert alert-success" role="alert">{{ Session::get('flash_notice') }}</div>
@endif