@extends('layouts.app')

@section('title')
	YOUR  APPLICATION
@endsection

@section('content')
    @include('layouts.navbar')
    <style>
    .push-top {
        margin-top: 30px;
    }
    .header {
        padding: 20px;
        text-align: center;
    }
    .td {
        align: center;
    }
    </style>
    <div class="header">
        <h1>STUDENT APPLICATION DETAILS</h1>
    </div>
    <div class="push-top">
        @if(session()->post('success'))
            <div class="alert alert-success">
            {{ session()->post('success') }}  
            </div><br />
        @endif
        <table class="table">
            <thead>
                @foreach ($applications as $row)
                    <tr>
                        NO
                        <td>{{$row->id}}</td>
                    </tr>
                    <td>Level
                        <td>{{$row->level}}</td>
                    </td>
                    <td>Nationality
                        <td>{{$row->nationality}}</td>
                    </td>
                    <td>Campus
                        <td>{{$row->campus}}</td>
                    </td>
                    <td>Programme 1
                        <td>{{$row->programme1}}</td>
                    </td>
                    <td>Programme 2
                        <td>{{$row->programme2}}</td>
                    </td>
                    <td>Programme 3
                        <td>{{$row->programme3}}</td>
                    </td>
                    <td>Full Name
                        <td>{{$row->fullname}}</td>
                    </td>
                    <td>NRIC
                        <td>{{$row->nric}}</td>
                    </td>
                    <td>Contact Number
                        <td>{{$row->phone}}</td>
                    </td>
                    <td>Email
                        <td>{{$row->email}}</td>
                    </td>
                    <td>Document
                        <td>{{$row->files}}</td>
                    </td>
                    <td>Guardian Name
                        <td>{{$row->guardianname}}</td>
                    </td>
                    <tr>Guardian Contact Number
                        <td>{{$row->guardianphone}}</td>
                    </tr>
                    <tr>Guardian NRIC
                        <td>{{$row->guardiannric}}</td>
                    </tr>
                    <tr>Guardian Email
                        <td>{{$row->guardianemail}}</td>
                    </tr>
                    <tr>
                        <td>
							<a href="/edit_application/{{ $row->id }}/edit" class="btn btn-secondary" target="_blank">Update</a>
                            <a href="/show_application/{{ $row->id }}/destroy" class="btn btn-danger" title="Delete Application" onclick="return confirm('Confirm to delete?')">Delete</a>
						</td>						
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
    @include('layouts.footer')
@endsection