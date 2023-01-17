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
                        LARAVEL-COLLEGE ONLINE APPLICATION FORM
                    </div>
                    <div class="card-body">
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level</label>
                                <input type="text" id="level" name="level" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nationality</label>
                                <textarea name="nationality" class="form-control" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NRIC</label>
                                <input type="text" id="nric" name="nric" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Campus</label>
                                <textarea name="campus" class="form-control" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level Of Study</label>
                                <input type="text" id="levelofstudy" name="levelofstudy" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Programme 1:</label>
                                <textarea name="nationality" class="form-control" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
	@include('layouts.footer')

@endsection