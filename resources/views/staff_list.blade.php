@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col py-5">
				<a href="" class="btn btn-primary">Add Staff</a>
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Staff ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Faculty</th>
							<th colspan="2">Actions</th>
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
									<a href="/admin/{{ $row->id }}/profile" class="btn btn-info">Profile</a>
									<a href="/admin/{{ $row->id }}/delete" class="btn btn-danger" title="Delete Lecturer"
										onclick="return confirm('Confirm delete?')">Delete</a>
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
							<th colspan="3">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	@include('layouts.footer')
@endsection
