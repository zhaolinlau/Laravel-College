@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container p-5">
		<div class="row d-flex justify-content-center p-5">
			<div class="col p-5">
				<form action="/staff/banner_list/{{ $banner->id }}/modify" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $banner->title) }}">
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" class="form-control-file" id="image" name="image">
					</div>
					<div class="form-group">
						<label for="publish">Publish</label>
						<select class="form-control" id="publish" name="publish">
							<option value="1" {{ $banner->publish ? 'selected' : '' }}>Yes</option>
							<option value="0" {{ !$banner->publish ? 'selected' : '' }}>No</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
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
