<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		<title>@yield('title')</title>
		<!-- CSS -->
		{{ HTML::style('css/jquery-ui.css',array('id'=>'style-resource-1')) }}
		{{ HTML::style('css/font-icons/entypo/css/entypo.css',array('id'=>'style-resource-2')) }}
		{{ HTML::style('css/font-icons/entypo/css/animation.css',array('id'=>'style-resource-3')) }}
		{{ HTML::style('css/neon.css',array('id'=>'style-resource-5')) }}
		{{ HTML::style('css/custom.css',array('id'=>'style-resource-6')) }}
		{{ HTML::style('css/font-icons/font-awesome/css/font-awesome.min.css',array('id'=>'style-resource-7')) }}
		<!-- JS -->
		{{ HTML::script('js/jquery-1.10.2.min.js') }}
		{{ HTML::script('js/gsap/main-gsap.js',array('id'=>'script-resource-1')) }}
		{{ HTML::script('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',array('id'=>'script-resource-2')) }}
		{{ HTML::script('js/bootstrap.min.js',array('id'=>'script-resource-3')) }}
		{{ HTML::script('js/joinable.js',array('id'=>'script-resource-4')) }}
		{{ HTML::script('js/resizeable.js',array('id'=>'script-resource-5')) }}
		{{ HTML::script('js/neon-api.js',array('id'=>'script-resource-6')) }}
		{{ HTML::script('js/toastr.js',array('id'=>'script-resource-7')) }}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body @yield('body') >
		@yield('content')
	</body>
</html>