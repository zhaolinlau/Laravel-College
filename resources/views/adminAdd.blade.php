@extends('layouts.app')

@section('title')
	Course Information
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container">
		<section>
			<div class="col-md-6 position-absolute top-50 start-50 translate-middle">
					@if (session()->has('success'))
						<div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
							{{ session('success') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif
					<div class="card">
						<div class="card-body">
							<h3>Drop us a message</h3>
							<p>We are here for you! How can we help?</p>
							<form class="row g-3 needs-validation" method="POST" action="/Contact/insert" novalidate>
								@csrf
								<div class="col-md-6">
									<div class="form-outline">
										<input type="text" id="name" name="name" class="form-control" required>
										<label for="name" class="form-label">Name</label>
										<div class="invalid-feedback">Please fill out this field.</div>
										@error('name')
											<div class="invalid-feedback">Please fill out this field.</div>
										@enderror
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-outline">
										<input type="email" id="email" name="email" class="form-control" required>
										<label for="email" class="form-label">Email</label>
										<div class="invalid-feedback">Please enter an email address.</div>
										@error('email')
											<div class="invalid-feedback">Please enter an email address.</div>
										@enderror
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-outline">
										<input type="tel" id="phone_number" name="phone_number" class="form-control" required>
										<label for="phone_number" class="form-label">Phone Number</label>
										<div class="invalid-feedback">Please fill out this field.</div>
										@error('phone_number')
											<div class="invalid-feedback">Please fill out this field.</div>
										@enderror
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-outline">
										<input type="text" id="subject" name="subject" class="form-control" required>
										<label for="subject" class="form-label">Subject</label>
										<div class="invalid-feedback">Please fill out this field.</div>
										@error('subject')
											<div class="invalid-feedback">Please fill out this field.</div>
										@enderror
									</div>
								</div>

								<div class="col-12">
									<div class="form-outline">
										<textarea id="message" name="message" rows="3" class="form-control" required></textarea>
										<label for="message" class="form-label">Message</label>
										<div class="invalid-feedback">Please fill out this field.</div>
										@error('message')
											<div class="invalid-feedback">Please fill out this field.</div>
										@enderror
									</div>
								</div>

								<div class="col-12">
									<button class="btn btn-primary" type="submit">Send</button>
									<button class="btn btn-outline-danger" data-mdb-ripple-color="danger" type="reset">Reset</button>
								</div>

							</form>
						</div>
					</div>
				</div>
		</section>
	</div>
	@include('layouts.footer')
	<script>
		(() => {
			'use strict';

			const forms = document.querySelectorAll('.needs-validation');

			Array.prototype.slice.call(forms).forEach((form) => {
				form.addEventListener('submit', (event) => {
					if (!form.checkValidity()) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		})();
	</script>
@endsection
