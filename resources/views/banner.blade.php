@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row d-flex justify-content-center py-4">
			@if (session('error'))
				<div class="col-7 pb-4">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{ session('error') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			@endif
			<div class="col-7">
				<form action="/staff/banner_list/{{ $banner->id }}/modify" class="row g-3 box rounded-5 shadow p-5"
					method="post" enctype="multipart/form-data">
					@csrf
					<div class="col-12">
						<label for="cimage">Current Image:</label>
						<input type="text" class="form-control" id="cimage" value="{{ $banner->image }}" readonly>
					</div>
					<div class="col-12">
						<label for="image">Replace With:</label>
						<input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png">
					</div>
					<div class="col-6">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $banner->title) }}"
							maxlength="50">
					</div>

					<div class="col-6">
						<label for="publish">Publish</label>
						<select class="form-control" id="publish" name="publish">
							<option value="1" {{ $banner->publish ? 'selected' : '' }}>Yes</option>
							<option value="0" {{ !$banner->publish ? 'selected' : '' }}>No</option>
						</select>
					</div>

					<div class="col-12">
						<label for="description">Description</label>
						<textarea name="description" id="description" class="form-control" rows="4"
						 value="{{ old('description', $banner->description) }}" maxlength="100"></textarea>
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary">Update</button>
						<a class="btn btn-danger" href="{{ route('staff.banner_list') }}">Cancel</a>
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
