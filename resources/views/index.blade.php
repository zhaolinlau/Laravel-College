<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel College</title>
	@vite(['resources/js/app.js'])
</head>

<body>
	<nav class="navbar navbar-expand-lg sticky-top bg-white">
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
						<a class="nav-link" href="/contactUs">Contact Us</a>
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

	<div id="carousel" class="carousel slide carousel-fade" data-mdb-ride="carousel">

		<div class="carousel-indicators">
			<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="0" class="active"></button>
			<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="1"></button>
			<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="2"></button>
			<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="3"></button>
			<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="4"></button>
		</div>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(1).webp" class="d-block w-100" />
			</div>

			<div class="carousel-item">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(2).webp" class="d-block w-100" />
			</div>

			<div class="carousel-item">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(3).webp" class="d-block w-100" />
			</div>

			<div class="carousel-item">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(4).webp" class="d-block w-100" />
			</div>

			<div class="carousel-item">
				<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(5).webp" class="d-block w-100" />
			</div>
		</div>

		<button class="carousel-control-prev" type="button" data-mdb-target="#carousel" data-mdb-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-mdb-target="#carousel" data-mdb-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Footer -->
	<footer class="text-center text-lg-start bg-white text-muted">
		<!-- Section: Social media -->
		<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
			<!-- Left -->
			<div class="me-5 d-none d-lg-block">
				<span>Get connected with us on social networks:</span>
			</div>
			<!-- Left -->

			<!-- Right -->
			<div>
				<a href="" class="me-4 link-secondary">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="" class="me-4 link-secondary">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="" class="me-4 link-secondary">
					<i class="fab fa-youtube"></i>
				</a>
				<a href="" class="me-4 link-secondary">
					<i class="fab fa-linkedin"></i>
				</a>
				<a href="" class="me-4 link-secondary">
					<i class="fab fa-google"></i>
				</a>
			</div>

		</section>

		<section class="">
			<div class="container text-center text-md-start mt-5">

				<div class="row mt-3">

					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

						<h6 class="text-uppercase fw-bold mb-4">
							<i class="fas fa-graduation-cap me-3 text-secondary"></i>Laravel College
						</h6>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero maxime deleniti natus. Nihil corporis, quod distinctio, recusandae culpa dolore voluptatem tempore vitae laborum tempora accusantium, voluptates hic doloribus modi fuga.
						</p>
					</div>

					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

						<h6 class="text-uppercase fw-bold mb-4">
							Useful links
						</h6>
						<div>
							<a href="#!">About</a>
						</div>
						<div>
							<a href="#!">Courses</a>
						</div>
						<div>
							<a href="#!">FAQs</a>
						</div>
						<div>
							<a href="#!">Contact Us</a>
						</div>
						<div>
							<a href="#!">Login</a>
						</div>
						<div>
							<a href="#!">Apply Now</a>
						</div>

					</div>

					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

						<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
						<p class=""><i class="fas fa-home me-3 text-secondary"></i> Laravel College, Wangsa Maju, 51000 Kuala Lumpur, Malaysia.</p>
						<p>
							<i class="fas fa-envelope me-3 text-secondary"></i>
							laravelcollege@gmail.com
						</p>
						<p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
						<p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
					</div>
				</div>

			</div>
		</section>

		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
			Copyright &copy; <span id="year"></span> <span class="fw-bold">Laravel College</span>. All rights reserved.
		</div>

	</footer>

	<script>
		const year = new Date().getFullYear()
		document.getElementById('year').innerHTML = year;
	</script>
</body>

</html>
