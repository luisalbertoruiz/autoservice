<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<title>@yield('title')</title>
		<!-- Bootstrap CSS -->
		{{ HTML::style('css/bootstrap.css') }}
		<!-- jQuery -->
		{{ HTML::script('js/jquery.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('js/bootstrap.js') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			<script type="text/javascript">
			$(document).ready(function() {
			    setTimeout(function() {
			        $("#notice").fadeOut(750);
			    },2500);
			});
		</script>
		</script>
	</head>
	<body>
		<div class="container">
			@yield('header')
			@yield('navbar')
			@yield('content')
			@yield('footer')
		</div>
	</body>
</html>