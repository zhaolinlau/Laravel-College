@extends('layouts.app')

@section('title')
	APPLY NOW
@endsection

@section('content')
	@include('layouts.navbar')
            <div class="container mt-4">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center font-weight-bold">
                        <h2>LARAVEL-COLLEGE ONLINE APPLICATION FORM</h2>
                    </div>
                    <div class="card-body">
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                            @csrf
                            <div class="form-group d-flex">
                                <div class="flex-1" style="margin-right:300px">
                                    {{ Form::label('level', 'LEVEL') }}
                                    <div>
                                        {{ Form::radio('level', 'Undergraduate', true) }} {{ Form::label('undergraduate', 'Undergraduate') }}
                                        {{ Form::radio('level', 'Postgraduate') }} {{ Form::label('postgraduate', 'Postgraduate') }}
                                    </div>
                                </div>
                                <div class="flex-1">
                                    {{ Form::label('nationality', 'NATIONALITY') }}
                                    <div>
                                        {{ Form::radio('nationality', 'Malaysian', true) }} {{ Form::label('malaysian', 'Malaysian') }}
                                        {{ Form::radio('nationality', 'Non-Malaysian', true) }} {{ Form::label('non-malaysian', 'Non-Malaysian') }}
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NRIC</label>
                                <input type="text" id="nric" name="nric" class="form-control" required="">
                                <br>
                            </div>
                            <div class="form-group d-flex">
                                <div class="flex-1" style="margin-right:375px">
                                    {{ Form::label('campus', 'CAMPUS') }}
                                    <div>
                                        {{ Form::radio('campus', 'Cyberjaya', true) }} {{ Form::label('cyberjaya', 'Cyberjaya') }}
                                        {{ Form::radio('campus', 'Penang') }} {{ Form::label('penang', 'Penang') }}
                                    </div>
                                </div>
                                <div class="flex-1">
                                    {{ Form::label('levelofstudy', 'LEVEL OF STUDY') }}
                                    <div>
                                        {{ Form::radio('levelofstudy', 'Diploma', true) }} {{ Form::label('diploma', 'Diploma') }} 
                                        {{ Form::radio('levelofstudy', 'Degree', true) }} {{ Form::label('degree', 'Degree') }}
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                    {{ Form::label('programme1', 'Choose Your Programme 1 :') }}
                                    {{ Form::select('programme1', [
                                        'DPiCM' => 'Diploma in Communication Multimedia',
                                        'DPiF' => 'Diploma in Finance',
                                        'DPiIT' => 'Diploma in Information Technology',
                                        'DPiBA' => 'Diploma in Business Administration',
                                        'DPiA' => 'Diploma in Accounting',
                                        'DGiCM' => 'Degree in Communication Multimedia',
                                        'DGiF' => 'Degree in Finance',
                                        'DGiIT' => 'Degree in Information Technology',
                                        'DGiBA' => 'Degree in Business Administration',
                                        'DGiA' => 'Degree in Accounting'], 
                                        null, ['class' => 'form-control']) }}
                            </div>
                            <br>
                            <div class="form-group">
                                {{ Form::label('faculty1', 'Choose Faculty for Programme 1 :') }}
                                {{ Form::select('faculty1', [
                                    'SJ' => 'Subang Jaya',
                                    'PP' => 'Pulau Pinang'],
                                    null, ['class' => 'form-control']) }}
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Programme 2:</label>
                                <textarea name="nationality" class="form-control" required=""></textarea>
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Faculty for Programme 2:</label>
                                <input type="text" id="level" name="level" class="form-control" required="">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Programme 3:</label>
                                <textarea name="nationality" class="form-control" required=""></textarea>
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Faculty for Programme 3:</label>
                                <input type="text" id="level" name="level" class="form-control" required="">
                                <br>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div> 
    <footer>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            Copyright &copy; <span id="year"></span> <span class="fw-bold">Laravel College</span>. All rights reserved.
        </div>

    </footer>

@endsection