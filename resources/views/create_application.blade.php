@extends('layouts.app')

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Student Application</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>

@section('title')
	STUDENT APPLICATION
@endsection

@section('content')
    @include('layouts.navbar')
    <style>

        .push-top {
        margin-top: 20px;
        }
        .header {
        padding: 20px;
        text-align: center;
        }
    </style>
    <div class="header">
        <h1>YOUR APPLICATION</h1>
    </div>
    <div class="card push-top">
    <div class="card-header">
        Fill in the information below to send your application.
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="">
            <div class="form-group">
                @csrf
                <label for="description">Level</label><br/>
                <label class="radio-inline"><input type="radio" name="level"> Postgraduate</label>
                <label class="radio-inline"><input type="radio" name="level"> Undergraduate</label>
            </div>
            <div class="form-group">
                <label for="description">Nationality</label><br/>
                <label class="radio-inline"><input type="radio" name="nationality"> Malaysian</label>
                <label class="radio-inline"><input type="radio" name="nationality"> Non-Malaysian</label>
            </div>
            <div class="form-group">
                <label for="description">Campus</label><br/>
                <label class="radio-inline"><input type="radio" name="campus"> Cyberjaya</label>
                <label class="radio-inline"><input type="radio" name="campus"> Penang</label>
            </div>
            <div class="form-group">
                <label for="description">Choose Programme 1:</label>
                <select class="form-control" name="programme1">
                    <option>Diploma in Creative Multimedia</option>
                    <option>Diploma in Finance</option>
                    <option>Diploma in Information Technology</option>
                    <option>Diploma in Accounting</option>
                    <option>Degree in Financial Engineering (Hons.)</option>
                    <option>Degree in Engineering (Hons.) Electronics Majoring in Computer</option>
                    <option>Degree in Computer Science (Hons.)</option>
                    <option>Degree in Information Technology (Hons.) Information System</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Choose Programme 1:</label>
                <select class="form-control" name="programme2">
                    <option>Diploma in Creative Multimedia</option>
                    <option>Diploma in Finance</option>
                    <option>Diploma in Information Technology</option>
                    <option>Diploma in Accounting</option>
                    <option>Degree in Financial Engineering (Hons.)</option>
                    <option>Degree in Engineering (Hons.) Electronics Majoring in Computer</option>
                    <option>Degree in Computer Science (Hons.)</option>
                    <option>Degree in Information Technology (Hons.) Information System</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Choose Programme 1:</label>
                <select class="form-control" name="programme3">
                    <option>Diploma in Creative Multimedia</option>
                    <option>Diploma in Finance</option>
                    <option>Diploma in Information Technology</option>
                    <option>Diploma in Accounting</option>
                    <option>Degree in Financial Engineering (Hons.)</option>
                    <option>Degree in Engineering (Hons.) Electronics Majoring in Computer</option>
                    <option>Degree in Computer Science (Hons.)</option>
                    <option>Degree in Information Technology (Hons.) Information System</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="fullname"/>
            </div>
            <div class="form-group">
                <label for="nric">NRIC</label>
                <input type="text" class="form-control" name="nric"/>
            </div>
            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="tel" class="form-control" name="phone"/>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="guardianname">Guardian Full Name</label>
                <input type="text" class="form-control" name="guardianname"/>
            </div>
            <div class="form-group">
                <label for="gaurdianphone">Guardian Contact Number</label>
                <input type="tel" class="form-control" name="guardianphone"/>
            </div>
            <div class="form-group">
                <label for="guardiannric">Guardian NRIC</label>
                <input type="text" class="form-control" name="guardiannric"/>
            </div>
            <div class="form-group">
                <label for="guardianemail">Email Address</label>
                <input type="email" class="form-control" name="guardianemail"/>
            </div>
            <button type="submit" class="btn btn-block btn-danger mx-auto d-block" style="max-width:200px;background-color: #3a9b8c;">SUBMIT APPLICATION</button>
        </form>
    </div>

    @include('layouts.footer')
@endsection