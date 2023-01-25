@extends('layouts.app')

@section('title')
	Reset Password
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container p-5">
		<div class="row d-flex justify-content-center p-5">
			<div class="col p-5">
				<form action="/admin/staff_list/{{ $staff->id }}/reset_password"
					class="row p-5 g-3 shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					<h1 class="text-center">Reset Password</h1>
					<div class="col-6 offset-3">
						<label class="form-label" for="staff_id">Staff Email</label>
						<input type="email" id="email" class="form-control" name="staff_email" value="{{ $staff->email }}" required disabled>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>
					<div class="col-6 offset-3">
						<label class="form-label" for="password">Password</label>
						<input type="password" id="password" class="form-control" minlength="8" name="password" required>
						<div class="invalid-feedback">
							The password must be at least 8 characters.
						</div>
					</div>

					<div class="col-6 offset-3">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Confirm to reset?')">Reset
							Password</button>
						<a class="btn btn-danger" href="{{route('admin.staff_list')}}">Cancel</a>
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
