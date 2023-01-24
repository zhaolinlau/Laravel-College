@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row">
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of banner.</p>
								<a class="btn btn-primary" href="{{route('staff.banner_list')}}">Banner List</a>
							</div>
						</div>
						
						<br>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of student application.</p>
								<a class="btn btn-primary" href="/index_application">Student Application</a>
							</div>
						</div>
						
						<br>
						{{-- start course links --}}
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
						     data-mdb-toggle="dropdown" aria-expanded="false">
							Courses
							</a>
						</li>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of Course Information.</p>
								<a class="btn btn-primary" href="/staffAddinfo">Course Information</a>
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
@endsection
