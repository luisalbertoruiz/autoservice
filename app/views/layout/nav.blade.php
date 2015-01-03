<div class="site-header-container container">
	<div class="row">
		<div class="col-md-12">
			<header class="site-header">
				<section class="site-logo">
					<a href="index.html">
						{{ HTML::image('src/logo.png', '', array('style' => 'width:140px'))}}
					</a>
				</section>
				<nav class="site-nav">
					<ul class="main-menu hidden-xs" id="main-menu">
						<li class="active">
							<a href="{{URL::to('/')}}">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="{{URL::to('servicios')}}">
								<span>Servicios</span>
							</a>
							<ul>
								<li>
									<a href="about.html">
										<span>About Us</span>
									</a>
								</li>
								<li class="active">
									<a href="#">
										<span>Active Menu Item</span>
									</a>
								</li>
								<li>
									<a href="gallery.html">
										<span>Gallery</span>
									</a>
								</li>
								<li>
									<a href="blog-post.html">
										<span>Blog Post</span>
									</a>
								</li>
								<li>
									<a href="portfolio-single.html">
										<span>Portfolio Item</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{URL::to('nosotros')}}">
								<span>Nosotros</span>
							</a>
						</li>
						<li>
							<a href="{{URL::to('contacto')}}">
								<span>Contacto</span>
							</a>
						</li>
						<li>
							<a href="{{URL::to('login')}}">
								<span>Login</span>
							</a>
						</li>
					</ul>
					<div class="visible-xs">
						<a href="#" class="menu-trigger">
							<i class="entypo-menu"></i>
						</a>
					</div>
				</nav>
			</header>
		</div>
	</div>
</div>