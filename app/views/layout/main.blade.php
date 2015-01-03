<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		<title>@yield('title')</title>
		<!-- CSS -->
		{{ HTML::style('fe/css/bootstrap.css') }}
		{{ HTML::style('fe/css/font-icons/entypo/css/entypo.css') }}
		{{ HTML::style('fe/css/neon.css') }}
		<!-- js -->
		{{ HTML::script('fe/js/jquery-1.11.0.min.js') }}
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
		{{ HTML::script('fe/js/gsap/main-gsap.js') }}
		{{ HTML::script('fe/js/bootstrap.js') }}
		{{ HTML::script('fe/js/joinable.js') }}
		{{ HTML::script('fe/js/resizeable.js') }}
		{{ HTML::script('fe/js/neon-slider.js') }}
		{{ HTML::script('js/toastr.js') }}
		@include('layout.alertas')
		@yield('js')
		{{ HTML::script('fe/js/neon-custom.js') }}
		@yield('script')
	</body>
</html>