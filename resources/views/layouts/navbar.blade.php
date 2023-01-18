<nav class="navbar navbar-expand-lg sticky-top bg-white">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">Laravel College</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/faqdata">FAQs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact_us">Contact Us</a>
				</li>
				<div class="d-flex align-items-center">
					@guest
						@if (Route::has('login'))
							@auth
								<li class="nav-item">
									<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
								</li>
							@else
								<li class="nav-item me-2">
									<a href="{{ route('login') }}" class="btn btn-outline-minor"><b>Login</b></a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a href="{{ route('register') }}" class="btn btn-primary"><b>Apply Now</b></a>
								</li>
							@endif
						@endauth
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</div>
			</ul>
		</div>
	</div>
</nav>
