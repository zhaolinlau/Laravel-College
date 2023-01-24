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
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of student application.</p>
								<a class="btn btn-primary" href="{{route('staff.banner_list')}}">Student Application</a>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of Course Information.</p>
								<a class="btn btn-primary" href="{{route('staff.banner_list')}}">Student Application</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
@endsection
