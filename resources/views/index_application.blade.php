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
        <h1>STUDENT APPLICATION</h1>
    </div>
    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div><br />
        @endif
        <table class="table">
            <thead>
                <tr class="table-warning">
                <td>ID</td>
                <td>Full Name</td>
                <td>NRIC</td>
                <td>Contact Number</td>
                <td>Email</td>
                <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($application as $applications)
                <tr>
                    <td>{{$applications->id}}</td>   
                    <td>{{$applications->fullname}}</td>
                    <td>{{$applications->nric}}</td>
                    <td>{{$applications->phone}}</td>
                    <td>{{$applications->email}}</td>
                    <td class="text-center">
                        <a href="{{ route('applications.show', $applications->id)}}" class="btn btn-primary btn-sm" style="background-color: #3a9b8c;">View</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
@endsection
