@extends('layout.main')
@section('title')
Autoservice
@stop
@section('content')
@include('layout.nav')
<section class="breadcrumb bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Acerca de Nosotros</h1>
			</div>
		</div>
	</div>
</section>
<section class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3>Historia</h3>
				<br />
				<p>Auto Service cumple 5 años en el mercado, es una empresa dedicada al mantenimiento y reparación automotriz, a través de estos años se ha destacado por ofrecer nuevos e innovadores servicios, contamos con personal altamente calificado para brindarle un servicio completo que cumpla siempre con las expectativas del cliente y con la mejor tecnología disponible, para brindarle mejores resultados en el menor tiempo posible.</p>
				<p>Nuestros servicios, buscan satisfacer las necesidades de nuestros clientes ofreciendo productos originales de la más alta calidad dentro del mercado, asi para brindarles continuidad en los próximos servicios que requiera su unidad, mediante una constante comunicación.</p>
				<p>Nuestra empresa le ofrece la más amplia variedad de soluciones de mantenimiento, reparación y prevención en mecánica automotriz.</p>
			</div>
			<div class="col-sm-5">
				<a href="#">
					{{ HTML::image('src/s03.jpg', '', array('class' => 'img-rounded','style' => 'width:100%'))}}
				</a>
			</div>
		</div>
	</div>
</section>
<section class="content-section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Misión</h3>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Brindar el mejor mantenimiento automotriz, ofreciendo servicios de calidad y vanguardia, que cubran las expectativas y necesidades de nuestros clientes, haciéndolos sentir a gusto y conformes con el servicio recibido.</p>
			</div>
		</div>
	</div>
</section>
<section class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Visión</h3>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Posicionarnos como empresa líder en el mantenimiento correctivo y preventivo en el campo automotriz, siendo nuestra experiencia, profesionalismo y compromiso nuestros estándares más altos para ofrecer el mejor servicio a nuestros clientes con la más alta calidad.</p>
			</div>
		</div>
	</div>
</section>
<section class="content-section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Objetivos Generales</h3>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Ofrecemos mantenimiento y reparación automotriz en la modalidad de gasolina diesel o gas.
		Brindamos cobertura, tanto para la atención de clientes individuales, Pequeñas y Medianas Empresas así como atención de contratos corporativos y gubernamentales.
		Contamos con la más amplia experiencia y con personal técnico capacitado.</p>
			</div>
		</div>
	</div>
</section>
<section class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="staff-member">
					<a class="image" href="#">
						{{ HTML::image('src/thumb-1.png', '', array('class' => 'img-circle','style' => 'width:100px'))}}
					</a>
					<h4>
						<a>John Doe</a>
						<small>CEO / Chief Executive Office</small>
					</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="staff-member">
					<a class="image" href="#">
						{{ HTML::image('src/thumb-2.png', '', array('class' => 'img-circle','style' => 'width:100px'))}}
					</a>
					<h4>
						<a>Mia Blunt</a>
						<small>Secretaria</small>
					</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="staff-member">
					<a class="image" href="#">
						{{ HTML::image('src/thumb-4.png', '', array('class' => 'img-circle','style' => 'width:100px'))}}
					</a>
					<h4>
						<a>Bob Ashton</a>
						<small>Directora Creativa</small>
					</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Valores</h3>
		  </div>
		  <div class="panel-body">
		  <ul>
		  	<li>Responsabilidad</li>
		  	<li>Compromiso</li>
		  	<li>Excelencia</li>
		  	<li>Liderazgo </li>
		  	<li>Creatividad</li>
		  	<li>Ética Profesional </li>
		  </ul>
		  </div>
	</div>	
</div>
@include('layout.footer')
@stop
