<nav class="navbar navbar-expand-lg bg-white fixed-top">
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
					<a class="nav-link" href="/about_us">About Us</a>
				</li>

				{{-- start course links --}}
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
						data-mdb-toggle="dropdown" aria-expanded="false">
						Courses
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li>
							<a class="dropdown-item" href="/diploma">Diploma</a>
						</li>
						<li>
							<a class="dropdown-item" href="/degree">Bachelor Degree</a>
						</li>
					</ul>
				</li>
				{{-- end course links --}}

				<li class="nav-item">
					<a class="nav-link" href="/faqdata">FAQs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contactStaff">Contact Us</a>
				</li>
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
						@endauth
					@endif

					<li class="nav-item">
						<a href="/create_application" class="btn btn-primary"><b>Apply Now</b></a>
					</li>
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" role="button"
							data-mdb-toggle="dropdown" aria-expanded="false">
							{{ auth()->user()->name }}
						</a>

						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							@if (auth()->user()->role == 'admin')
								<li>
									<a class="dropdown-item" href="/admin">
										{{ __('Dashboard') }}
									</a>
								</li>

								<li>
									<a class="dropdown-item" href="/admin/profile">
										{{ __('My Profile') }}
									</a>
								</li>
							@endif

							@if (auth()->user()->role == 'staff')
								<li>
									<a class="dropdown-item" href="/staff">
										{{ __('Dashboard') }}
									</a>
								</li>

								<li>
									<a class="dropdown-item" href="/staff/profile">
										{{ __('My Profile') }}
									</a>
								</li>
							@endif

							@if (auth()->user()->role == 'student')
								<li>
									<a class="dropdown-item" href="/student">
										{{ __('Dashboard') }}
									</a>
								</li>

								<li>
									<a class="dropdown-item" href="/student/profile">
										{{ __('My Profile') }}
									</a>
								</li>
							@endif

							<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
							</li>

						</ul>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>
