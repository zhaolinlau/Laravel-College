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
					<div class="col-12">
						<table class="table table-striped full-width" id="main_application">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>NRIC</th>
									<th>Programme 1</th>
                                    <th>Programme 2</th>
                                    <th>Programme 3</th>
                                    <th>Preview</th>
                                    <th>Action</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($applications as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->id }}</td>
										<td>{{ $row->fullname }}</td>
										<td>{{ $row->nric }}</td>
                                        <td>{{ $row->programme1 }}</td>
                                        <td>{{ $row->programme2 }}</td>
                                        <td>{{ $row->programme3 }}</td>
                                        <td>
											<a href="/application/{{ $row->id }}/show" class="btn btn-secondary" target="_blank">View</a>
										</td>
										<td>
											<a href="/application/{{ $row->id }}/destroy" class="btn btn-danger" title="Delete Application"
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

	@include('layouts.footer')
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript"
		src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.js">
	</script>

@endsection