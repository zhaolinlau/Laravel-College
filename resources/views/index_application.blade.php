@extends('layouts.app')

@section('title')
	YOUR  APPLICATION
@endsection

@section('content')
    @include('layouts.navbar')
    <style>
    .push-top {
        margin-top: 50px;
    }
    </style>
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
                <td>Level</td>
                <td>Nationality</td>
                <td>Campus</td>
                <td>Programme 1</td>
                <td>Programme 2</td>
                <td>Programme 3</td>
                <td>Full Name</td>
                <td>NRIC</td>
                <td>Contact Number</td>
                <td>Email</td>
                <td>Guardian Name</td>
                <td>Guardian Contact Number</td>
                <td>Guardian NRIC</td>
                <td>Guardian Email</td>
                <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($application as $applications)
                <tr>
                    <td>{{$applications->id}}</td>
                    <td>{{$applications->level}}</td>
                    <td>{{$applications->nationality}}</td>
                    <td>{{$applications->campus}}</td>
                    <td>{{$applications->programme1}}</td>
                    <td>{{$applications->programme2}}</td>
                    <td>{{$applications->programme3}}</td>
                    <td>{{$applications->fullname}}</td>
                    <td>{{$applications->nric}}</td>
                    <td>{{$applications->phone}}</td>
                    <td>{{$applications->email}}</td>
                    <td>{{$applications->guardianname}}</td>
                    <td>{{$applications->guardianphone}}</td>
                    <td>{{$applications->guardiannric}}</td>
                    <td>{{$applications->gaurdianemail}}</td>
                    <td class="text-center">
                        <a href="{{ route('applications.edit', $applications->id)}}" class="btn btn-primary btn-sm"">Update</a>
                        <form action="{{ route('applications.destroy', $applications->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"" type="submit">Cancel</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
@endsection