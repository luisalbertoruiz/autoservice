@extends('layout.admin')
@section('title')
Autoservice
@stop
@section('body')
class="page-body page-fade-only"
@stop
@section('content')
<div class="page-container">	
	@include('layout.sidebarMenu')
	<div class="main-content">
		@include('layout.profilebar')
		<hr>
		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ URL::to('/')}}"><i class="entypo-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>Administración</strong>
			</li>
		</ol>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1><?php echo date('F d') ?>, <?php echo date('Y') ?></h1>
					<h3>Welcome to the site <strong>Art Ramadani</strong></h3>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		
	});
</script>
@stop