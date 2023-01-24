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
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div><br />
        @endif
        <table class="table">
            <thead>
                foreach ($applications as $applications)
                <tr>
                    NO
                    <td>{{$applications->id}}</td>
                </tr>
                <td>Level
                    <td>{{$applications->level}}</td>
                </td>
                <td>Nationality
                    <td>{{$applications->nationality}}</td>
                </td>
                <td>Campus
                    <td>{{$applications->campus}}</td>
                </td>
                <td>Programme 1
                    <td>{{$applications->programme1}}</td>
                </td>
                <td>Programme 2
                    <td>{{$applications->programme2}}</td>
                </td>
                <td>Programme 3
                    <td>{{$applications->programme3}}</td>
                </td>
                <td>Full Name
                    <td>{{$applications->fullname}}</td>
                </td>
                <td>NRIC
                    <td>{{$applications->nric}}</td>
                </td>
                <td>Contact Number
                    <td>{{$applications->phone}}</td>
                </td>
                <td>Email
                    <td>{{$applications->email}}</td>
                </td>
                <td>Document
                    <td>{{$applications->files}}</td>
                </td>
                <td>Guardian Name
                    <td>{{$applications->guardianname}}</td>
                </td>
                <tr>Guardian Contact Number
                    <td>{{$applications->guardianphone}}</td>
                </tr>
                <tr>Guardian NRIC
                    <td>{{$applications->guardiannric}}</td>
                </tr>
                <tr>Guardian Email
                    <td>{{$applications->guardianemail}}</td>
                </tr>
            </thead>
        </table>
    </div>
    @include('layouts.footer')
@endsection