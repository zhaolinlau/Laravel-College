@extends('layouts.app')

@section('title')
	Degree
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container">
		<div class="row p-5">
			<div class="col p-5 d-flex justify-content-center">
			<div class="row g-5">
					<div class="col-4">
						<div class="card">
							<img src="http://mfe.baruch.cuny.edu/wp-content/uploads/2009/12/3474.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Bachelor of Financial Engineering (Hons.)</h5>
								<p class="card-text">The three-and-a-half-year programme equips students with the knowledge blend in IT, 
									mathematics and finance as well as financial modelling skills crucial for the financial technology (FINTECH) 
									industry. </p>
								<a href="/degree_financialEng" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="http://www.apu.edu.my/sites/default/files/01_bachelor-of-engineering-in-electrical-electronic-engineering-with-honours.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Bachelor of Engineering (Hons.) Electronics majoring in Computer</h5>
								<p class="card-text">The programme begins with deep embedding of engineering fundamentals such as circuit 
    							and signal analysis, field theory, electronics, control theory, power systems, 
   								 machines and engineering mathematics. </p>
								<a href="/degree_EngElectronics" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="http://www.apu.edu.my/sites/default/files/10_bsc-hons-in-computer-science.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Bachelor of Computer Science (Hons.) </h5>
								<p class="card-text">This three-year programme equips students with fundamental 
									computing knowledge and the latest technology. </p>
								<a href="/degree_ScienceComp" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="http://www.apu.edu.my/sites/default/files/08_bsc-hons-in-information-technology-with-specialism-in-business-information-systems.jpg" class="card-img-top"
								alt="Fissure in Sandstone" />
							<div class="card-body">
								<h5 class="card-title">Bachelor of Information Technology (Hons.) Information Systems</h5>
								<p class="card-text"> This three-year programme prepares students with a strong foundation in information 
    							systems applications development as well as current and emerging technologies related 
    							to information systems. </p>
								<a href="/degree_InfoTech" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
