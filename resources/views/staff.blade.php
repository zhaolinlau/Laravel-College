@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row py-5 my-5">
					<div class="col-4" style="margin-bottom:25px;">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Carousel Management</h5>
								<p class="card-text">Navigate to list of banner.</p>
								<a class="btn btn-primary" href="{{route('staff.banner_list')}}">Banner List</a>
							</div>
						</div>
					</div>

					<div class="col-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Student Application</h5>
								<p class="card-text">Navigate to list of student application.</p>
								<a class="btn btn-primary" href="/index_application">View Application</a>
							</div>
						</div>
					</div>

					<div class="col-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Course list</h5>
								<p class="card-text">Navigate to list of Course Information.</p>
								<a class="btn btn-primary" href="/staffAddinfo">Student Application</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Contact Response</h5>
								<p class="card-text">Navigate to list of Student Response</p>
								<a class="btn btn-primary" href="/contactStaff">Response List</a>
							</div>
						</div>
					</div>
                    <div class="col-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">FAQ Management</h5>
								<p class="card-text">Navigate to list of FAQs.</p>
								<a class="btn btn-primary" href="/faqstaff">FAQ List</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
@endsection
