@extends('layouts.app')

@section('title')
	About Us
@endsection

@section('content')
	@include('layouts.navbar')
	<div class="container-fluid my-5">
		<div class="row p-5">
			<div class="col-12">
				<div class="row g-5">
					<div class="col-6">
						<img src="{{ asset('storage/team_spirit.svg') }}" class="img-fluid" />
					</div>
					<div class="col-6">
						<h1 class="text-center">About Us</h1>
						<p>Laravel College is a reputable institution of higher education that provides students with a well-rounded
							education in a variety of fields. We have a team of highly qualified and experienced professional lecturers who
							are dedicated to providing the highest quality education to our students. We believe that our students are the
							future, and we are committed to helping them achieve their full potential and succeed in their chosen field.</p>
						<p>Our curriculum is designed to provide students with the knowledge and skills they need to succeed in the
							workforce, and our lecturers are experts in their subjects and are committed to providing a top-notch education.
							We also offer a wide range of extracurricular activities, such as clubs and organizations, that allow students to
							explore their interests and develop new skills.</p>
						<p>We understand that choosing the right college is an important decision and we are here to support you in every
							step of the way. Our dedicated staff and faculty are always available to answer any questions you may have and
							provide you with the information you need to make an informed decision. We invite you to visit our campus and see
							for yourself what Lara College has to offer.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid my-5">
		<div class="row p-5">
			<div class="col-12">
				<div class="row g-5">
					<div class="col-6">
						<h1 class="text-center">Our Goals</h1>
						<p>At Laravel College, we are committed to providing our students with the highest quality education and preparing
							them for successful careers in their chosen fields. Our goal is to provide our students with a well-rounded
							education that includes both theoretical knowledge and practical skills, so that they are prepared for the
							workforce. Our curriculum is designed to provide students with the knowledge and skills they need to succeed in
							their chosen field, and our lecturers are experts in their subjects and are committed to providing a top-notch
							education.</p>
						<p>Another important goal of ours is to ensure that our students are prepared for the real world. We understand
							that the job market is constantly changing, and we strive to ensure that our students are prepared for the latest
							trends and developments in their chosen field. Our lecturers are experts in their subjects and are constantly
							seeking to improve their teaching methods to ensure that our students are prepared for the workforce. Our students
							also have the opportunity to participate in internships and other practical experience, which help them gain
							real-world skills and experience.</p>
						<p>We also aim to develop our students' critical thinking, problem-solving and teamwork skills, which are essential
							for success in any field. Our lecturers encourage active participation in class, collaboration and teamwork, and
							critical thinking exercises, so that our students are able to think for themselves, work well with others and
							solve problems. We believe that these skills are essential for success in the workforce and in life in general.
							Our goal is to graduate students who are not only knowledgeable in their chosen field, but also well-rounded
							individuals who are prepared for the real world.</p>
					</div>
					<div class="col-6">
						<img src="{{ asset('storage/goals.svg') }}" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid my-5">
		<div class="row p-5">
			<div class="col-12">
				<div class="row g-5">
					<div class="col-6">
						<img src="{{ asset('storage/visionary_technology.svg') }}" class="img-fluid" />
					</div>
					<div class="col-6">
						<h1 class="text-center">Our Vision</h1>
						<p>At Laravel College, our vision is to provide students with the knowledge and skills they need to succeed in
							today's fast-paced and ever-changing world. We strive to create a dynamic and inclusive learning environment that
							prepares students for successful careers through well-rounded education, hands-on learning, and real-world
							experiences.</p>
						<p>We also believe in the importance of providing students with opportunities to engage in hands-on learning and
							real-world experiences through internships, co-op opportunities, and research projects. This approach will not
							only help them develop the practical skills and knowledge they need to succeed in their chosen field, but also
							become responsible and engaged citizens who make a positive impact in the world.</p>
						<p>Our ultimate goal is to empower our students to become leaders in their communities and make a positive impact
							in the world. We strive to be a premier institution known for its commitment to excellence, innovation, and
							student success. We are dedicated to helping our students reach their full potential and achieve their academic,
							personal, and professional goals.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
@endsection
