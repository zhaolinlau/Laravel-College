@extends('layouts.app')

@section('title')
	Change Password
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container p-md-5 my-5">
		<div class="row d-flex justify-content-center p-5">
			<div class="col-8">
				<form action="/staff/{{ auth()->user()->id }}/change_password"
					class="row py-5 g-3 shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					<h1 class="text-center">Change Password</h1>
					<div class="col-6 offset-3">
						<label class="form-label" for="email">Staff Email</label>
						<input type="email" id="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required disabled>
						<div class="invalid-feedback">
							Please enter an email.
						</div>
					</div>
					<div class="col-6 offset-3">
						<label class="form-label" for="password">Password</label>
						<input type="password" id="password" class="form-control" name="password" minlength="8" required>
						<div class="invalid-feedback">
							The password must be at least 8 characters.
						</div>
					</div>

					<div class="col-6 offset-3">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Confirm to change?')">Change
							Password</button>
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
