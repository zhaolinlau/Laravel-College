@extends('layouts.app')

@section('title')
        Update Course Information
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container p-5">
		<div class="row d-flex justify-content-center p-5">
			<div class="col p-5">
				<form action="/staffAddinfo/{{ auth()->user()->id }}/update" class="row p-5 g-3 shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					<div class="col-6">
						<label class="form-label" for="courseID">Course ID</label>
						<input type="text" id="courseID" class="form-control" name="courseID" value="{{ auth()->user()->courseID }}" required>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="courseName">Course Name</label>
						<input type="text" id="courseName" class="form-control" name="courseName" value="{{ auth()->user()->courseName }}" required>
						<div class="invalid-feedback">
							Please fill out this field.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="faculty">Faculty</label>
						<input type="text" id="faculty" class="form-control" name="faculty" value="{{ auth()->user()->faculty }}" required>
						<div class="invalid-feedback">
							Please enter an email.
						</div>
					</div>

					<div class="col-6">
						<label class="form-label" for="details">Details</label>
						<input type="text" id="details" class="form-control" name="details" value="{{ auth()->user()->details }}" required>
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
