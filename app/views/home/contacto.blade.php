@extends('layout.main')
@section('title')
Autoservice
@stop
@section('content')
<div class="wrap">
@include('layout.nav')
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize()
{
	var mapDiv = document.getElementById('map');
	var map = new google.maps.Map(mapDiv, {
		center: new google.maps.LatLng(19.386658, -99.077847),
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	});
	new google.maps.Marker({
		position: new google.maps.LatLng(19.386658, -99.077847),
		map: map
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<section class="contact-map" id="map"></section>
<section class="contact-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 sep">
				<h4>Contactanos, escribenos un eMail!</h4>
				<p>
					To shewing another demands to. Marianne property cheerful informed at striking at. <br />
					Clothes parlors however by cottage on.
				</p>
				<form class="contact-form" role="form" method="post" action="" enctype="application/x-www-form-urlencoded">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Nombre:" />
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="E-mail:" />
					</div>
					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Mensage:" rows="6"></textarea>
					</div>
					<div class="form-group text-right">
						<button class="btn btn-primary" name="send">Enviar</button>
					</div>
				</form>
			</div>
			<div class="col-sm-offset-1 col-sm-4">
				<div class="info-entry">
					<h4>Dirección</h4>
					<p>
						Plaza Mayor, No. 120 <br />
						Dr. Alfonso Ortiz Tirado<br />
						Iztapalapa, Cd de México, D.F. <br>
						C.P. 57896
					</p>
				</div>
				<div class="info-entry">
					<h4>Horarios:</h4>
					<p>
						09:00 - 18:00 <br />
						Lunes a Viernes<br />
						<br />
						10:00 - 16:00 <br />
						Sábados 
					</p>
				</div>
				<div class="info-entry">
					<h4>Teléfonos</h4>
					<p>
						3329-89-02<br />
						3870-83-71
					</p>
				</div>
				<div class="info-entry">
					<h4>eMail</h4>
					<p>
						autoservice-@hotmail.com
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
@include('layout.footer')
@stop

