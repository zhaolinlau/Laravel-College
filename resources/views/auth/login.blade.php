@extends('layouts.app')

@section('title')
	Login
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row py-5 justify-content-center">
			<div class="col-8 py-5">

				<div class="card my-5">
					<div class="card-header">{{ __('Login') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
							@csrf

							<div class="row mb-3">
								@if (session('error'))
									<span class="alert alert-danger alert-dismissible fade show" role="alert">
										<strong>{{ session('error') }}</strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</span>
								@endif
								<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email" autofocus required>
									<div class="invalid-feedback">
										Please enter an email.
									</div>
								</div>
							</div>

							<div class="row mb-3">
								<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
										name="password" required autocomplete="current-password" required>
									<div class="invalid-feedback">
										Please fill out this field.
									</div>
								</div>
							</div>



							<div class="row mb-3">
								<div class="col-md-6 offset-md-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember"
											{{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
								</div>
							</div>

							<div class="row mb-0">
								<div class="col-md-8 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Login') }}
									</button>

									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif
								</div>
							</div>
						</form>
					</div>
				</div>
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
