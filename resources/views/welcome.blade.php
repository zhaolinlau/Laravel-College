<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel College</title>
	@vite(['resources/js/app.js'])
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Laravel College</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
						<a class="nav-link" href="#">FAQs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					@if (Route::has('login'))
					<div class="d-flex align-items-center">
						@auth
						<li class="nav-item">
							<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
						</li>

						@else
						<li class="nav-item me-2">
							<a href="{{ route('login') }}" class="btn btn-outline-minor"><b>Login</b></a>
						</li>

						@if (Route::has('register'))
						<li class="nav-item">
							<a href="{{ route('register') }}" class="btn btn-primary"><b>Apply Now</b></a>
						</li>
						@endif
						@endauth
					</div>
					@endif
				</ul>
			</div>
		</div>
	</nav>

</body>

</html>