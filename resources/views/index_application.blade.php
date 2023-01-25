@extends('layouts.app')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('layouts.navbar')
    <style>
        .header {
        padding: 30px;
        text-align: center;
        }

    </style>
    <div class="bg-image" style="background-image: url('https://w0.peakpx.com/wallpaper/262/173/HD-wallpaper-samsung-background-blue-edge-gradient-gray-plain-purple-simple-sky.jpg');height: 220vh">
        <div class="header text-white">
            <h1><b> STUDENT APPLICATION</b></h1>
        </div> 
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col py-5">
                    <div class="row g-3">
                        <div class="col-12">
                            <table class="table table-striped full-width" id="index_application">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NRIC</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Programme 1</th>
                                        <th>Programme 2</th>
                                        <th>Programme 3</th>
                                        <th>Documents</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($applications as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->fullname }}</td>
                                            <td>{{ $row->nric }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->programme1 }}</td>
                                            <td>{{ $row->programme2 }}</td>
                                            <td>{{ $row->programme3 }}</td>
                                            <td>{{ $row->files }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
		$('#index_application').DataTable({
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
