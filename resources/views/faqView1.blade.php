@extends('layouts.app')

@section('title')
	FAQ Programme
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
                <div class="spacing" style="padding: 40px;"></div>

                <div class="col-6" style="margin:auto;">
                    <table class="table table-hover" style="margin-bottom:40px;">
                        <tr>
                            <td><b>Q :</b></td>
                        </tr>
                        <tr style="background-color: #f8f7f5; border: 4px solid white; margin-bottom:20px; height:80px;">
                            <td>{{$data_faqprogramme->Question}}</td>
                        </tr>
                        <tr>
                            <td><b>A :</b></td>
                        </tr>
                        <tr style="background-color: #f8f7f5; border: 4px solid white; height:200px;">
                            <td>{{$data_faqprogramme->Answer}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

	@include('layouts.footer')
@endsection
