@extends('layouts.app')

@section('title')
	Banner List
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col">
				@if (session('error'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{ session('error') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffform">
							Upload Banner
						</button>
					</div>

					<div class="col-12 table-responsive">
						<table class="table table-hover full-width" id="banner_list">
							<thead class="table-light">
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Title</th>
									<th>Description</th>
									<th>Publish</th>
									<th>Modification</th>
									<th>Preview</th>
									<th>Deletion</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($banners as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $row->image }}</td>
										@if ($row->title)
											<td>{{ $row->title }}</td>
										@else
											<td>No title available.</td>
										@endif

										@if ($row->title)
											<td>
												<textarea class="form-control" cols="30" rows="4" readonly>{{ $row->description }}</textarea>
											</td>
										@else
											<td>No description available.</td>
										@endif

										<td>{{ $row->publish }}</td>
										<td>
											<a href="/staff/banner_list/{{ $row->id }}/banner" class="btn btn-info">Modify</a>
										</td>
										<td>
											<a href="{{ asset('storage/images/' . $row->image) }}" class="btn btn-secondary" target="_blank">View</a>
										</td>
										<td>
											<a href="/staff/banner_list/{{ $row->id }}/delete" class="btn btn-danger"
												onclick="return confirm('Confirm to delete?')">Delete</a>
										</td>
									</tr>
								@endforeach
							</tbody>

							<tfoot>
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Title</th>
									<th>Description</th>
									<th>Publish</th>
									<th>Modification</th>
									<th>Preview</th>
									<th>Deletion</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="staffform" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form action="/staff/banner_list/upload" class="needs-validation" method="POST" enctype="multipart/form-data"
					novalidate>
					@csrf
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="Label">Upload Banner</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<div class="row g-3">
							<div class="col-12">
								<label class="form-label" for="image">Image</label>
								<input type="file" id="image" class="form-control" name="image" accept=".jpg,.jpeg,.png" required>
								<div class="invalid-feedback">
									Please select an image. (Allowed formats: .jpeg, .jpg, .png)
								</div>
							</div>

							<div class="col-8">
								<label class="form-label" for="title">Title</label>
								<input type="text" id="title" class="form-control" name="title" maxlength="50">
							</div>

							<div class="col-4">
								<label class="form-label" for="publish">Publish</label>
								<select name="publish" id="publish" class="form-select" required>
									<option value="" selected hidden disabled>Yes / No</option>
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
								<div class="invalid-feedback">
									Please select Yes / No.
								</div>
							</div>

							<div class="col-12">
								<label class="form-label" for="description">Description</label>
								<textarea name="description" class="form-control" id="description" rows="4" maxlength="100"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Create</button>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@include('layouts.footer')
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript"
		src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.js">
	</script>

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

	<script>
		$.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-link';
		$('#banner_list').DataTable({
			language: {
				searchPlaceholder: "Search by a field...",
				searchInput: ""
			},
			dom: 'Bfrtip',
			buttons: [
				'colvis',
				'pageLength',
				{
					extend: 'collection',
					text: 'Export',
					buttons: ['csv', 'excel', 'pdf'],
				},
				'print',
			]
		});
	</script>
@endsection
