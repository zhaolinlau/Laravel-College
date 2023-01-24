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
						<table class="table table-striped full-width" id="staff_list">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>NRIC</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Preview</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($application as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $row->fullname }}</td>
										<td>{{ $row->nric }}</td>
										<td>{{ $row->phone }}</td>
										<td>{{ $row->email }}</td>
										<td>
											<a href="/show_application" class="btn btn-secondary" target="_blank">View</a>
										</td>
									</tr>
								@endforeach
							</tbody>

							<tfoot>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>NRIC</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Preview</th>
								</tr>
							</tfoot>
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
					buttons: ['excel', 'pdf'],
				},
				'print',
			]
		});
	</script>
@endsection