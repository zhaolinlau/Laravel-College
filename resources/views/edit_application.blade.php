@extends('layouts.app')

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Student Application</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>

@section('title')
	UPDATE STUDENT APPLICATION
@endsection

@section('content')
    @include('layouts.navbar')
    <style>
        .container {
        max-width: 450px;
        }
        .push-top {
        margin-top: 50px;
        }
        form {
            position: center;
        }
    </style>
    <div class="card push-top">
        <div class="card-header">
            Update Student Application
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
            <form method="post" action="{{ route('applications.update', $application->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="description">Level</label><br/>
                    <label class="radio-inline"><input type="radio" name="level" value="{{ $application->level }}"> Postgraduate</label>
                    <label class="radio-inline"><input type="radio" name="level" value="{{ $application->level }}"> Undergraduate</label>
                </div>
                <div class="form-group">
                    <label for="description">Nationality</label><br/>
                    <label class="radio-inline"><input type="radio" name="nationality" value="{{ $application->nationality }}"> Malaysian</label>
                    <label class="radio-inline"><input type="radio" name="nationality" value="{{ $application->nationality }}"> Non-Malaysian</label>
                </div>
                <div class="form-group">
                    <label for="description">Campus</label><br/>
                    <label class="radio-inline"><input type="radio" name="campus" value="{{ $application->campus }}"> Cyberjaya</label>
                    <label class="radio-inline"><input type="radio" name="campus" value="{{ $application->campus }}"> Penang</label>
                </div>
                <div class="form-group">
                    <label for="description">Choose Programme 1:</label>
                    <select class="form-control" name="programme1" value="{{ $application->programme1 }}">
                        <option>- Choose One -</option>
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
                    <label for="description">Choose Programme 2:</label>
                    <select class="form-control" name="programme2" value="{{ $application->programme2 }}"> 
                        <option>- Choose One -</option>
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
                    <label for="description">Choose Programme 3:</label>
                    <select class="form-control" name="programme3" value="{{ $application->programme3 }}">
                        <option>- Choose One -</option>
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
                    <input type="text" class="form-control" name="fullname" value="{{ $application->fullname }}"/>
                </div>
                <div class="form-group">
                    <label for="nric">NRIC</label>
                    <input type="text" class="form-control" name="nric" value="{{ $application->nric }}"/>
                </div>
                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $application->phone }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" value="{{ $application->email }}"/>
                </div>
                <div class="form-group">
                    <label for="guardianname">Guardian Full Name</label>
                    <input type="text" class="form-control" name="guardianname" value="{{ $application->guardianname }}"/>
                </div>
                <div class="form-group">
                    <label for="gaurdianphone">Guardian Contact Number</label>
                    <input type="tel" class="form-control" name="guardianphone" value="{{ $application->guardianphone }}"/>
                </div>
                <div class="form-group">
                    <label for="guardiannric">Guardian NRIC</label>
                    <input type="text" class="form-control" name="guardiannric" value="{{ $application->guardiannric }}"/>
                </div>
                <div class="form-group">
                    <label for="guardianemail">Email Address</label>
                    <input type="email" class="form-control" name="guardianemail" value="{{ $application->guardianemail }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger mx-auto d-block" style="max-width:200px;background-color: #3a9b8c;">UPDATE APPLICATION</button>
            </form>
        </div>
    </div>

@endsection