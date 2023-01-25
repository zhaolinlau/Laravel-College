@extends('layouts.app')

@section('title')
	My Profile
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container p-5">
		<div class="row d-flex justify-content-center p-5">
			@if (session('error'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>{{ session('error') }}</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			<div class="col p-5">
				<form action="/admin/{{ auth()->user()->id }}/update" class="row p-5 g-3 shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					<div class="col-6">
						<label class="form-label" for="admin_id">Admin ID</label>
						<input type="text" id="admin_id" class="form-control" name="admin_id" value="{{ auth()->user()->admin_id }}" required>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="name">Name</label>
						<input type="text" id="name" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="email">Email</label>
						<input type="email" id="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
						<div class="invalid-feedback">
							Please enter an email.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="phone_number">Phone Number</label>
						<input type="tel" id="phone_number" class="form-control" name="phone_number" value="{{ auth()->user()->phone_number }}" required>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Confirm to update?')">Update</button>
						<button class="btn btn-danger" onclick="history.back()">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@include('layouts.footer')

	<script>
		(() => {
			'use strict'

			const forms = document.querySelectorAll('.needs-validation')
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
		})()
	</script>
@endsection
