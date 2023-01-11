@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')
	@include('layouts.navbar')
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
	@include('layouts.footer')
@endsection
