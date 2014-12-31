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
			<li><a href="{{ URL::to('/servicios') }}">Servicios</a></li>
			<li><a href="{{ URL::to('/nosotros') }}">Nosotros</a></li>
			<li><a href="{{ URL::to('/contacto') }}">Contacto</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::to('/login') }}">Login</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
@if(Session::has('alert-success'))
<script>
	$(document).ready(function() {
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		toastr.success("{{ Session::get('alert-success') }}", "¡Correcto!",opts);
	});
</script>
@endif
@if(Session::has('alert-warning'))
	<script>
	$(document).ready(function() {
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		toastr.warning("{{ Session::get('alert-warning') }}", "¡Atención!",opts);
	});
</script>
@endif
@if(Session::has('alert-danger'))
<script>
	$(document).ready(function() {
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		toastr.error("{{ Session::get('alert-danger') }}", "¡Alerta!",opts);
	});
</script>
@endif