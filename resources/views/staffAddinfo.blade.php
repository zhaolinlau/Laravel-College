@extends('layouts.app')

@section('title')
	Staff Course Access
@endsection

@section('content')
	@include('layouts.navbar')
	<style>
        .header {
        padding: 30px;
        text-align: center;
        }
    </style>
	<div class="header text-white">
            <h1><b> COURSE INFORMATION</b></h1>
        </div> 
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#courseform" >
							Add Course Information
						</button>
					</div>

					<div class="col-12">
						<table class="table table-striped full-width" id="courseAddinfo">
							<thead>
								<tr>
									<th><b>No</th>
									<th><b>Course ID</th>
									<th><b>Course Name</th>
									<th><b>Faculty</th>
									<th><b>Details</th>
									<th><b>View</th>
									<th><b>Deletion</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($courses as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $row->courseID}}</td>
										<td>{{ $row->courseName}}</td>
										<td>{{ $row->faculty}}</td>
										<td>{{ $row->details}}</td>
										<td>
											<a href="/staffAddinfo/{{ $row->id }}/edit" class="btn btn-info">Course</a>
										</td>
										
										<td>
											<a href="/staffAddinfo/{{ $row->id }}/delete" class="btn btn-danger" title="Delete Course"
												onclick="return confirm('Confirm to delete?')">Delete</a>
										</td>
									</tr>
								@endforeach
							</tbody>

							<tfoot>
								<tr>
									<th>No</th>
									<th>Course ID</th>
									<th>Course Name</th>
									<th>Faculty</th>
									<th>Details</th>
									<th>View</th>
									<th>Deletion</th>
								</tr>
							</tfoot>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="courseform" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form action="/staffAddinfo/insert" class="needs-validation" method="POST" novalidate>
					@csrf
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="Label">Course Information</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					
						<div class="row g-3">
							<div class="col-6">
								<label class="form-label" for="courseID">Course ID</label>
								<input type="text" id="courseID" class="form-control" name="courseID" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="courseName">Course Name</label>
								<input type="text" id="courseName" class="form-control" name="courseName" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="faculty">Faculty</label>
								<input type="text" id="faculty" class="form-control" name="faculty" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="details">Details</label>
								<input type="text" id="details" class="form-control" name="details" required>
								<div class="invalid-feedback">
									Please fill out this field.
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
					if (!form.checkValidity()){
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
		$('#staffAddinfo').DataTable({
			language: {
				searchPlaceholder: "Search by a course..."
			},
		});
	</script>
@endsection
