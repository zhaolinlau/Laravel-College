@extends('layouts.app')

@section('title')
	Diploma
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container">
		<div class="row p-5">
			<div class="col p-5 d-flex justify-content-center">
				<div class="row g-5">
					<div class="col-4">
						<div class="card">
							<img src="https://i0.wp.com/eduspiral.com/wp-content/uploads/2020/09/afx.jpg?fit=600%2C450&ssl=1" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Diploma in Creative Multimedia</h5>
								<p class="card-text">The programme focuses on nurturing creative mindset and the ability 
								to solve design problems through creative convention, the ability to empower key visual components 
        						and practical processes in solving complex communication issues</p>
								<a href="/diploma_creative_multimedia" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="https://aimst.edu.my/wp-content/uploads/2021/10/DIF.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Diploma in Finance</h5>
								<p class="card-text">This programme is designed to empower students with technical and 
									analytical skills in developing solutions for financial and business issues. </p>
								<a href="/diploma_finance" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="https://cdn.corporatefinanceinstitute.com/assets/accounting.jpeg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Diploma in Accounting</h5>
								<p class="card-text">The programme has been designed with the objective of exposing students to the latest standards, 
									trends and issues in the areas of accounting such as financial accounting, management accounting, auditing, taxation 
									and accounting information system. </p>
								<a href="/diploma_accounting" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="https://store.hp.com/app/assets/images/uploads/prod/how-to-become-an-information-technology-specialist160684886950141.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Diploma in Information Technology</h5>
								<p class="card-text"> This programme equips students with relevant ICT knowledge and skills to meet the technological 
									needs of an organisation. </p>
								<a href="/diploma_InfoTech" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
