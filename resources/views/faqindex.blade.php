@extends('layouts.app')

@section('title')
	FAQs
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

                <div style="margin: auto; width:60%">
                    <!-- PROGRAMME -->
                    <table class="table table-hover" style="margin-bottom:40px;">
                        <tr>
                            <td colspan=2><b>PROGRAMME</b></td>
                            <td colspan=2>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="background-color: #3a9b8c; border:none;">
                                ADD FAQ
                                </button>
                            </td>
                        </tr>
                        @foreach($data_faqprogramme as $faq_programme)
                        <tr style="background-color: #f8f7f5; border: 4px solid white;">
                            <td style="width:60px; padding-top: 15px; padding-bottom:15px;">{{$faq_programme->id}}</td>
                            <td style="width:550px; padding-top: 15px; padding-bottom:15px;">{{$faq_programme->Question}}</td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqdata/{{$faq_programme->id}}/editProgramme"><i class="fa-solid fa-angle-right"></i></a></td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqdata/{{$faq_programme->id}}/deleteProgramme" onclick="return confirm('Confirm delete ?')"><i class="fa-solid fa-trash" style="color: red;"></i></a></td>
                        </tr>
                        @endforeach
                    </table>

                    <!-- ADMISSIONS -->
                    <table class="table table-hover">
                        <tr>
                            <td colspan=2><b>ADMISSIONS</b></td>
                            <td colspan=2>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="background-color: #3a9b8c; border:none;">
                                ADD FAQ
                                </button>
                            </td>
                        </tr>
                        @foreach($data_faqadmission as $faqadmission)
                        <tr style="background-color: #f8f7f5; border: 4px solid white;">
                            <td style="width:60px; padding-top: 15px; padding-bottom:15px;">{{$faqadmission->id}}</td>
                            <td style="width:550px; padding-top: 15px; padding-bottom:15px;">{{$faqadmission->Question}}</td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqdata/{{$faqadmission->id}}/editAdmission"><i class="fa-solid fa-angle-right"></i></a></td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqdata/{{$faqadmission->id}}/deleteAdmission" onclick="return confirm('Confirm delete ?')"><i class="fa-solid fa-trash" style="color: red;"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal 1-->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New FAQ for Programme</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/faqdata/createProgramme" method="POST">
                {{csrf_field()}}
                    <div class="form-floating" style="margin-bottom:20px;">
                        <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea" style="min-height:100px;"></textarea>
                        <label for="floatingtextarea">Question</label>
                    </div>
                    <div class="form-floating" style="margin-bottom:20px;">
                        <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea" style="min-height:100px;"></textarea>
                        <label for="floatingtextarea">Answer</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #3a9b8c; border:none;">SUBMIT</button>
                </form>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New FAQ for Admission</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/faqdata/createAdmission" method="POST">
                {{csrf_field()}}
                    <div class="form-floating" style="margin-bottom:20px;">
                        <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea" style="min-height:100px;"></textarea>
                        <label for="floatingtextarea">Question</label>
                    </div>
                    <div class="form-floating" style="margin-bottom:20px;">
                        <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea" style="min-height:100px;"></textarea>
                        <label for="floatingtextarea">Answer</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #3a9b8c; border:none;">SUBMIT</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    @include('layouts.footer')
@endsection
