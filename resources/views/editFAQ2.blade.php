@extends('layouts.app')

@section('title')
	Update FAQ Admissions
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
            <b><h3 style="padding:10px; margin-top: 20px; margin-bottom: 40px;">UPDATE FAQ FOR ADMISSIONS</h3></b>

                <div class="col-6" style="margin:auto;">
                    <form action="/faqstaff/{{$data_faqadmission->id}}/updateAdmission" method="POST">
                    {{csrf_field()}}
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea" style="min-height:100px;">{{$data_faqadmission->Question}}</textarea>
                            <label for="floatingtextarea">Question</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea" style="min-height:300px;">{{$data_faqadmission->Answer}}</textarea>
                            <label for="floatingtextarea">Answer</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #3a9b8c; border:none;">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>

	@include('layouts.footer')
@endsection
