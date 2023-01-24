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
            <form action="{{route('applications.update', $application->id)}}" class="needs-validation" method="POST" novalidate>
					@csrf
					<div class="modal-header">
						<h1 class="modal-title fs-" id="Label">Student Application</h1>
					</div>
					<div class="modal-body">

						<div class="row g-3">
                            <div class="col-6">
								<label class="form-label" for="fullname">LEVEL</label>
								    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="level1"/>
                                        <label class="form-check-label" for="level1"> Postgraduate </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="level1"/>
                                        <label class="form-check-label" for="level1"> Undergraduate </label>
                                    </div>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="fullname">NATIONALITY</label>
								    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nationality" id="nationality1"/>
                                        <label class="form-check-label" for="nationality1"> Malaysian </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nationality" id="nationality2"/>
                                        <label class="form-check-label" for="nationality2"> Non-Malaysian </label>
                                    </div>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="campus">CAMPUS</label>
                                <div class="form-group">
                                    <select class="form-control" id="campus" name="campus">
                                        <option disabled selected> - Choose One -</option>
                                        <option>Cyberjaya</option>
                                        <option>Penang</option>
                                    </select>
                                </div>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="programme1">PROGRAMME 1</label>
                                <div class="form-group">
                                    <select class="form-control" id="programme1" name="programme1">
                                        <option disabled selected> - Choose Programme -</option>
                                        <option>Diploma in Creative Multimedia</option>
                                        <option>Diploma in Finance</option>
                                        <option>Diploma in Accounting</option>
                                        <option>Diploma in Information Technology</option>
                                        <option>Bachelor of Financial Engineering</option>
                                        <option>Bachelor of Engineering (Hons.) Electronics Majoring in Computer</option>
                                        <option>Bachelor of Computer Science (Hons.)</option>
                                        <option>Bachelor of Information Technology (Hons.) Information Systems</option>
                                    </select>
                                </div>
								<div class="invalid-feedback">
                                    Please choose one programme in this field.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="programme2">PROGRAMME 2</label>
                                <div class="form-group">
                                    <select class="form-control" id="programme2" name="programme2">
                                        <option disabled selected> - Choose Programme -</option>
                                        <option>Diploma in Creative Multimedia</option>
                                        <option>Diploma in Finance</option>
                                        <option>Diploma in Accounting</option>
                                        <option>Diploma in Information Technology</option>
                                        <option>Bachelor of Financial Engineering</option>
                                        <option>Bachelor of Engineering (Hons.) Electronics Majoring in Computer</option>
                                        <option>Bachelor of Computer Science (Hons.)</option>
                                        <option>Bachelor of Information Technology (Hons.) Information Systems</option>
                                    </select>
                                </div>
								<div class="invalid-feedback">
                                    Please choose one programme in this field.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="programme3">PROGRAMME 3</label>
                                <div class="form-group">
                                    <select class="form-control" id="programme3" name="programme3">
                                        <option disabled selected> - Choose Programme -</option>
                                        <option>Diploma in Creative Multimedia</option>
                                        <option>Diploma in Finance</option>
                                        <option>Diploma in Accounting</option>
                                        <option>Diploma in Information Technology</option>
                                        <option>Bachelor of Financial Engineering</option>
                                        <option>Bachelor of Engineering (Hons.) Electronics Majoring in Computer</option>
                                        <option>Bachelor of Computer Science (Hons.)</option>
                                        <option>Bachelor of Information Technology (Hons.) Information Systems</option>
                                    </select>
                                </div>
								<div class="invalid-feedback">
                                    Please choose one programme in this field.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="fullname">FULL NAME</label>
								<input type="text" id="fullname" class="form-control" name="fullname" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="nric">NRIC</label>
								<input type="text" id="nric" class="form-control" name="nric" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="phone">CONTACT NUMBER</label>
								<input type="tel" id="phone" class="form-control" name="phone" required>
								<div class="invalid-feedback">
									This field is required.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="email">EMAIL</label>
								<input type="email" id="email" class="form-control" name="email" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="files">DOCUMENTS</label>
								<input type="file" id="files" class="form-control" name="files" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

							<div class="col-6">
								<label class="form-label" for="guardianname">GUARDIAN NAME</label>
								<input type="text" id="guardianname" class="form-control" name="guardianname" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="guardiannric">GUARDIAN NRIC</label>
								<input type="text" id="guardiannric" class="form-control" name="guardiannric" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="guardianemail">GUARDIAN EMAIL</label>
								<input type="email" id="guardianemail" class="form-control" name="guardianemail" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>

                            <div class="col-6">
								<label class="form-label" for="guardianphone">GUARDIAN CONTACT NUMBER</label>
								<input type="tel" id="guardianphone" class="form-control" name="guardianphone" required>
								<div class="invalid-feedback">
                                    This field is required.
								</div>
							</div>


						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Update</button>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
					</div>
				</form>
        </div>
    </div>

@endsection