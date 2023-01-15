@extends('layouts.app')

@section('title')
	Course Information
@endsection

<DOCTYPE! html>
<html lang="en" class>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <style type="text-css" media="screen"> 
        
    <!--Begin Information-->
    <div class="course border-top">
        <div class= row>
            <div class="col-md-6">
                <h1>Diploma in Finance</h1>
                <div class="course-faculty">Faculty of Management (FOM)</div>
            </div>
            <p>
            <strong> (N/343/4/0259) 05/24 (MQA/PSA11998) </strong>
            </p>
        </div>
    </div>
    <p>style="text-algn: justify;">
    This programme is designed to empower students with technical and 
    analytical skills in developing solutions for financial and business issues. 
    Students will be equipped with soft and management skills in order to 
    meet industry needs. The programme also prepares the students with 
    independent and critical learning skills through its curriculum and industry 
    exposure related to finance, investment and banking.
    <br>
    After completion of the diploma programme, you can opt for a related 
    degree programme from either the Faculty of Management (MMU 
    Cyberjaya campus) or the Faculty of Business (MMU Melaka campus).
    </p>

    <div class="col-12">
		<button class="btn btn-primary" type="ENQUIRE NOW">Send</button>							
	</div>
    <div class="col-md-6">
       <!--begin drop-down-->
        <ul class="course-dropdown">
        <li>
            <a href="#" class="parent-open">
                "Entry Requirements"
                :: after
            </a>
            <ul style="display:block;">
                <li> style ="list-style-type: none;">
                    <p>Upon completing the diploma programme, students who intend to pursue 
                    their studies in MMU will need to meet the entry requirements of the 
                    bachelor’s degree programme of their choice.</p>
                </li>
            <li>
            <a href="#" class="parent">
                "Programme Structure"
                :: after
            </a>
            <ul style="display: none;">
                <li>
                    <a href="#" class="parent">Year 1</a>
                    <ul>
                        <li class="course-text">
                            "English"
                            <br>
                            "Business Mathematics"
                            <br>
                            "Principles of Management"
                            <br>
                            "Macroeconomics"
                            <br>
                            "Critical Thinking"
                            <br>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="parent">Year 2</a>
                    <ul>
                        <li class="course-text">
                            "Effective Communications Skills"
                            <br>
                            "Principles of Managerial Accounting"
                            <br>
                            "Personal Finance"
                            <br>
                            "Business Law"
                            <br>
                            "Practical Training"
                            <br>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        </ul>

        

    </div>
</head>
</html>

    


