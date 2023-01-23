@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffform">
							Upload Banner
						</button>
					</div>

					<div class="col-12">
						<table class="table table-striped full-width" id="staff_list">
							<thead>
								<tr>
									<th>No</th>
									<th>Title</th>
									<th>Image</th>
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
										<td>{{ $row->title }}</td>
										<td>{{ $row->image }}</td>
										<td>{{ $row->publish }}</td>
										<td>
											<a href="/staff/banner_list/{{ $row->id }}/banner" class="btn btn-info">Modify</a>
										</td>
										<td>
											<a href="{{asset('storage/images/'.$row->image)}}" class="btn btn-secondary" target="_blank">View</a>
										</td>
										<td>
											<a href="/staff/banner_list/{{ $row->id }}/delete" class="btn btn-danger" title="Delete Lecturer"
												onclick="return confirm('Confirm to delete?')">Delete</a>
										</td>
									</tr>
								@endforeach
							</tbody>

							<tfoot>
								<tr>
									<th>No</th>
									<th>Title</th>
									<th>Image</th>
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
							<div class="col-8">
								<label class="form-label" for="title">Title</label>
								<input type="text" id="title" class="form-control" name="title" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-4">
								<label class="form-label" for="publish">Publish</label>
								<select name="publish" id="publish" class="form-select" required>
									<option value="" selected hidden disabled>Yes / No</option>
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
								<div class="invalid-feedback">
									Please select Yes or No to publish.
								</div>
							</div>
							<div class="col-12">
								<label class="form-label" for="image">Image</label>
								<input type="file" id="image" class="form-control" name="image" required>
								<div class="invalid-feedback">
									Please select an image.
								</div>
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
		$.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-primary';
		$('#staff_list').DataTable({
			language: {
				searchPlaceholder: "Search by a field..."
			},
			dom: 'Bfrtip',
			buttons: [
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
