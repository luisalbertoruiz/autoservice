<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		<title>@yield('title')</title>
		<!-- CSS -->
		{{ HTML::style('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}
		{{ HTML::style('css/font-icons/entypo/css/entypo.css') }}
		{{ HTML::style('css/font-icons/font-awesome/css/font-awesome.min.css') }}
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/neon-core.css') }}
		{{ HTML::style('css/neon-theme.css') }}
		{{ HTML::style('css/neon-forms.css') }}
		{{ HTML::style('css/custom.css') }}
		<!-- JS -->
		{{ HTML::script('js/jquery-1.11.0.min.js') }}
		<script>$.noConflict();</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body @yield('body') >
		@yield('content')
		@yield('css')
		{{ HTML::script('js/gsap/main-gsap.js') }}
		{{ HTML::script('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}
		{{ HTML::script('js/bootstrap.js') }}
		{{ HTML::script('js/joinable.js') }}
		{{ HTML::script('js/resizeable.js') }}
		{{ HTML::script('js/neon-api.js') }}
		{{ HTML::script('js/toastr.js') }}
		@include('layout.alertas')
		@yield('js')
		{{ HTML::script('js/neon-custom.js') }}
		@yield('script')
	</body>
</html>