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
                    <!-- PROGRAMME -->
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

                    <!-- ADMISSIONS -->
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
                </div>
            </div>
        </div>

    @include('layouts.footer')
@endsection
