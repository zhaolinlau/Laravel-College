@extends('layouts.app')

@section('title')
	Staff List
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staffform">
							Add Staff
						</button>
					</div>

					<div class="col-12 table-responsive">
						<table class="table full-width table-hover" id="staff_list">
							<thead class="table-light">
								<tr>
									<th>No</th>
									<th>Staff ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone Number</th>
									<th>Faculty</th>
									<th>View</th>
									<th>Password</th>
									<th>Deletion</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($staffs as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $row->staff_id }}</td>
										<td>{{ $row->name }}</td>
										<td>{{ $row->email }}</td>
										<td>{{ $row->phone_number }}</td>
										<td>{{ $row->faculty }}</td>
										<td>
											<a href="/admin/staff_list/{{ $row->id }}/profile" class="btn btn-info">Profile</a>
										</td>
										<td>
											<a href="/admin/staff_list/{{ $row->id }}/reset_form" class="btn btn-minor">Reset</a>
										</td>
										<td>
											<a href="/admin/staff_list/{{ $row->id }}/delete" class="btn btn-danger" title="Delete Lecturer"
												onclick="return confirm('Confirm to delete?')">Delete</a>
										</td>
									</tr>
								@endforeach
							</tbody>

							<tfoot>
								<tr>
									<th>No</th>
									<th>Staff ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone Number</th>
									<th>Faculty</th>
									<th>View</th>
									<th>Reset</th>
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
				<form action="/admin/staff_list/create" class="needs-validation" method="POST" novalidate>
					@csrf
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="Label">Staff Account Registration</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<div class="row g-3">
							<div class="col-6">
								<label class="form-label" for="staff_id">Staff ID</label>
								<input type="text" id="staff_id" class="form-control" name="staff_id" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="name">Name</label>
								<input type="text" id="name" class="form-control" name="name" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="email">Email</label>
								<input type="email" id="email" class="form-control" name="email" required>
								<div class="invalid-feedback">
									Please enter an email.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="password">Password</label>
								<input type="password" id="password" class="form-control" name="password" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="phone_number">Phone Number</label>
								<input type="tel" id="phone_number" class="form-control" name="phone_number" required>
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
		$('#staff_list').DataTable({
			language: {
				searchPlaceholder: "Search by a field..."
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
