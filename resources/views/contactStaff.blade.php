@extends('layouts.app')

@section('title')
	Contact Us
@endsection

@section('content')
	@include('layouts.navbar')
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Contact Data Up</h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
               <th style="width:125px;">Action</p></th>
                </tr>
            </thead>
            <tbody>
                        @foreach($data_contact as $contacts)
                    <tr>
                    <td>{{$contacts->id}}</td>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->Phone_number}}</td>
                        <td>{{$contacts->subject}}</td>
                        <td>{{$contacts->message}}</td>
                        <td>
							<a href="contactStaff/{{$contacts->id}}/edit" class="btn btn-minor">EDIT</a>
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