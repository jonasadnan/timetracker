<header class="header navbar" style="padding: 0; overflow: visible;">
	<div class="container">
		<h1>
			<a class="logo" href="{{ route('root') }}">
				<svg viewbox="0 0 64 64" class="logo-icon"><use xlink:href="#logo_icon"></use></svg>
				<span class="logo-name">Time Tracker</span>
			</a>
		</h1>

		@guest
			<ul class="nav">
				<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
			</ul>

			@else
				<ul class="nav">
					<li class="nav-item tasks"><a class="nav-link" href="{{ route('tasks.index') }}">
							<i class="fa fa-tasks"></i>
							Tasks
						</a>
					</li>
					<li class="nav-item projects"><a class="nav-link" href="{{ route('projects.index') }}">
							<i class="fa fa-folder-open"></i>
							Projects
						</a>
					</li>
					<li class="nav-item projects"><a class="nav-link" href="{{ route('categories.index') }}">
							<i class="fa fa-bookmark"></i>
							Categories
						</a>
					</li>
					<li class="nav-item reports"><a class="nav-link" href="{{ route('reports.index') }}">
							<i class="fa fa-book"></i>
							Reports
						</a>
					</li>
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<i class="fa fa-user"></i>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('users.index') }}">
								<i class="fa fa-users"></i>
								Users
							</a>
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out-alt"></i>
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
				</ul>
			@endguest
	</div>
</header>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
	<div class="col-container">
		<div class="navbar-brand">
			@yield('title')
		</div>
	</div>
</nav>