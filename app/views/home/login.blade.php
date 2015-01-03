@extends('layout.admin')
@section('title')
Autoservice
@stop
@section('body')
class="page-body login-page login-form-fall"
@stop
@section('content')
<div class="login-container">
	<div class="login-header login-caret">
		<div class="login-content">
			<a href="index.html" class="logo">
				{{ HTML::image('src/logo.png', '', array('style' => 'width:220px'))}}
			</a>
			<p class="description">Inicia sesión para accesar!</p>
			<!-- progress bar indicator -->
		</div>
	</div>
	<div class="login-progressbar">
		<div></div>
	</div>
	<div class="login-form">
		<div class="login-content">
			<form method="post" role="form" id="form_login" action="{{ URL::to('loged')}}">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						<input type="text" class="form-control" name="username" id="username" placeholder="Usuario" autocomplete="off" />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off" />
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Ingresar
					</button>
				</div>
				<div class="form-group">
					<a href="{{ URL::to('/') }}">
						<i class="entypo-reply"></i>
						Regresar
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
{{ HTML::script('js/jquery.validate.min.js') }}
{{ HTML::script('js/neon-login.js') }}
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function($)
	{
	});
</script>
@stop
