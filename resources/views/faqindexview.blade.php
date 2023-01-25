@extends('layouts.app')

@section('title')
	View FAQs
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

                    <h6 style="margin-bottom:10px;"><b>PROGRAMME</b></h6>
                    <div class="accordion" id="accordionExample">
                    @foreach($data_faqprogramme as $faq_programme)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                {{$faq_programme->id}}. {{$faq_programme->Question}}
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$faq_programme->Answer}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <h6 style="margin-bottom:10px; margin-top:40px;"><b>ADMISSIONS</b></h6>
                    <div class="accordion" id="accordionExample">
                    @foreach($data_faqadmission as $faqadmission)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                {{$faqadmission->id}}. {{$faqadmission->Question}}
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$faqadmission->Answer}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                <div class="spacing" style="padding: 40px;"></div>

                    <!--
                    <table class="table table-hover" style="margin-bottom:40px;">
                        <tr>
                            <td colspan=4><b>PROGRAMME</b></td>
                        </tr>
                        @foreach($data_faqprogramme as $faq_programme)
                        <tr style="background-color: #f8f7f5; border: 4px solid white;">
                            <td style="width:60px; padding-top: 15px; padding-bottom:15px;">{{$faq_programme->id}}</td>
                            <td style="width:620px; padding-top: 15px; padding-bottom:15px;">{{$faq_programme->Question}}</td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqstudent/{{$faq_programme->id}}/viewProgramme"><i class="fa-solid fa-angle-right"></i></a></td>
                        </tr>
                        @endforeach
                    </table>

                    <table class="table table-hover" style="margin-bottom:40px;">
                        <tr>
                            <td colspan=4><b>ADMISSIONS</b></td>
                        </tr>
                        @foreach($data_faqadmission as $faqadmission)
                        <tr style="background-color: #f8f7f5; border: 4px solid white;">
                            <td style="width:60px; padding-top: 15px; padding-bottom:15px;">{{$faqadmission->id}}</td>
                            <td style="width:620px; padding-top: 15px; padding-bottom:15px;">{{$faqadmission->Question}}</td>
                            <td style="padding-top: 15px; padding-bottom:15px;"><a href="faqstudent/{{$faqadmission->id}}/viewAdmission"><i class="fa-solid fa-angle-right"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                    -->
                </div>
            </div>
        </div>

    @include('layouts.footer')
@endsection
