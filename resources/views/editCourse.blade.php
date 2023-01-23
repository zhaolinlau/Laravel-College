@extends('layouts.app')

@section('title')
	Update Course Information
@endsection

@section('content')
	@include('layouts.navbar')

        @if(session('success'))
        <div class="alert alert-primary" role="alert">
            {{session('success')}}
        </div>
        @endif

        <div class="container">
            <div class="row">
                <b><h3 style="padding:10px; margin-top: 20px; margin-bottom: 40px;">UPDATE COURSE INFORMATION</h3></b>

                <div class="col-6" style="margin:auto;">
                    <form action="/coursedata/{{$data_courseinfo->id}}/updateCourse" method="POST">
                    {{csrf_field()}}
                    <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="CourseID" class="form-control" placeholder="Enter Course ID" id="floatingtextarea" style="min-height:100px;">{{$data_courseinfo->CourseID}}</textarea>
                            <label for="floatingtextarea">Course ID</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="Course Name" class="form-control" placeholder="Enter Course Name" id="floatingtextarea" style="min-height:100px;">{{$data_courseinfo->CourseName}}</textarea>
                            <label for="floatingtextarea">Course Name</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="faculty" class="form-control" placeholder="Enter faculty here" id="floatingtextarea" style="min-height:300px;">{{$data_courseinfo->faculty}}</textarea>
                            <label for="floatingtextarea">Faculty</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="details" class="form-control" placeholder="Enter details here" id="floatingtextarea" style="min-height:300px;">{{$data_courseinfo->details}}</textarea>
                            <label for="floatingtextarea">Details</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #3a9b8c; border:none;">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>

	@include('layouts.footer')
@endsection
