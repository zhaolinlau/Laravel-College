@extends('layouts.app')

@section('title')
	Contact Us
@endsection

@section('content')
	@include('layouts.navbar')
<div class="container" style="margin-top: 20px">
    <div class="row">
    @if (session()->has('success'))
		<div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Response List Of Contact Us</h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Modification</th>
               <th>Deletion</th>
                </tr>
            </thead>
            <tbody>
                        @foreach($data_contact as $contacts)
                    <tr>
                    <td>{{$contacts->id}}</td>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->phone_number}}</td>
                        <td>{{$contacts->subject}}</td>
                        <td>{{$contacts->message}}</td>
                        <td>{{$contacts->status}}</td>
                        <td>
							<a href="contactStaff/{{$contacts->id}}/edit" class="btn btn-minor">EDIT</a>
                        </td>  
                        <td>         
                            <a href="contactStaff/{{$contacts->id}}/delete" class="btn btn-danger" title="Delete" onclick="return confirm('Confirm to delete?')">DELETE</a>
						</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('layouts.footer')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
@endsection