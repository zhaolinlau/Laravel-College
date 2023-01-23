@extends('layouts.app')

@section('title')
	Staff Access
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<div class="row g-3">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#courseform">
							Add Course Information
						</button>
					</div>

					<div class="col-12">
						<table class="table table-striped full-width" id="course_list">
							<thead>
								<tr>
									<th>No</th>
									<th>Course ID</th>
									<th>Course Name</th>
									<th>Faculty</th>
									<th>Details</th>
									<th>View</th>
									<th>Deletion</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($staffs as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $row->course_id }}</td>
										<td>{{ $row->course_name }}</td>
										<td>{{ $row->faculty }}</td>
										<td>{{ $row->details}}</td>
										<td>
											<a href="/staff/course_list/{{ $row->id }}/reset_form" class="btn btn-minor">Reset</a>
										</td>
										<td>
											<a href="/staff/course_list/{{ $row->id }}/delete" class="btn btn-danger" title="Delete Course"
												onclick="return confirm('Confirm to delete?')">Delete</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="staffform" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form action="/staff/staffAddinfo/create" class="needs-validation" method="POST" novalidate>
					@csrf
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="Label">Course Information</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<div class="row g-3">
							<div class="col-6">
								<label class="form-label" for="staff_id">Course ID</label>
								<input type="text" id="course_id" class="form-control" name="course_id" required>
								<div class="invalid-feedback">
									Please fill out this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="name">Course Name</label>
								<input type="text" id="name" class="form-control" name="name" required>
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
								<input type="details" id="details" class="form-control" name="details" required>
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