<header class="header">
	<div class="col-container">
		<h1 class="navbar-brand logo-name">
			Time Tracker
		</h1>

		@guest
			<ul class="nav">
				<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
			</ul>
			@else
				<ul class="nav">
					<li class="nav-item tasks"><a class="nav-link" href="task_list.php">Tasks</a></li>
					<li class="nav-item projects"><a class="nav-link" href="project_list.php">Projects</a></li>
					<li class="nav-item projects"><a class="nav-link" href="category_list.php">Categories</a></li>
					<li class="nav-item reports"><a class="nav-link" href="reports.php">Reports</a></li>
				</ul>
				@endguest
	</div>
</header>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
	<div class="col-container">
		<a class="navbar-brand" href="#">
			@yield('title')
		</a>
	</div>
</nav>