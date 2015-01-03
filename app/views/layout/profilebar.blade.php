<div class="row"><?php $user = Sentry::getUser() ?>
	<!-- Profile Info and Notifications -->
	<div class="col-md-10 col-sm-10 clearfix">
		<ul class="user-info pull-left pull-none-xsm">
			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					{{ HTML::image('src/'.$user->picture, '', array('class' => 'img-circle', 'style' => 'width:45px'))}}
					{{ $user->first_name.' '.$user->last_name}}
				</a>
				<ul class="dropdown-menu">
					<!-- Reverse Caret -->
					<li class="caret"></li>
					<!-- Profile sub-links -->
					<li>
						<a href="#">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="user-info pull-left pull-right-xs pull-none-xsm">
			<!-- Raw Notifications -->
			<li class="notifications dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-attention"></i>
					<span class="badge badge-info">6</span>
				</a>
				<ul class="dropdown-menu">
					<li class="top">
						<p class="small">
							<a href="#" class="pull-right">Mark all Read</a>
							You have <strong>3</strong> new notifications.
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller">
							<li class="unread notification-success">
								<a href="#">
									<i class="entypo-user-add pull-right"></i>
									<span class="line">
										<strong>New user registered</strong>
									</span>
									<span class="line small">
										30 seconds ago
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">View all notifications</a>
					</li>
				</ul>
			</li>
			<!-- Message Notifications -->
			<li class="notifications dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-mail"></i>
					<span class="badge badge-secondary">10</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<ul class="dropdown-menu-list scroller">
							<li class="active">
								<a href="#">
									<span class="image pull-right">
										<img src="../../../neon-x/assets/images/thumb-1.png" alt="" class="img-circle" />
									</span>
									<span class="line">
										<strong>Luc Chartier</strong>
										- yesterday
									</span>
									<span class="line desc small">
										This ain’t our first item, it is the best of the rest.
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="image pull-right">
										<img src="../../../neon-x/assets/images/thumb-3.png" alt="" class="img-circle" />
									</span>
									<span class="line">
										Hayden Cartwright
										- a week ago
									</span>
									<span class="line desc small">
										Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="../../../neon-x/mailbox/main/index.html">All Messages</a>
					</li>
				</ul>
			</li>
			<!-- Task Notifications -->
			<li class="notifications dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-list"></i>
					<span class="badge badge-warning">1</span>
				</a>
				<ul class="dropdown-menu">
					<li class="top">
						<p>You have 6 pending tasks</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller">
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">Procurement</span>
										<span class="percent">27%</span>
									</span>
									<span class="progress">
										<span style="width: 27%;" class="progress-bar progress-bar-success">
											<span class="sr-only">27% Complete</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">App Development</span>
										<span class="percent">83%</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 83%;" class="progress-bar progress-bar-danger">
											<span class="sr-only">83% Complete</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">HTML Slicing</span>
										<span class="percent">91%</span>
									</span>
									<span class="progress">
										<span style="width: 91%;" class="progress-bar progress-bar-success">
											<span class="sr-only">91% Complete</span>
										</span>
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- Raw Links -->
	<div class="col-md-2 col-sm-2 clearfix pull-right">
		<ul class="list-inline links-list pull-right">
			<li>
				<a href="{{ URL::to('/logout') }}">
					Cerrar Sesión <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>
</div>

