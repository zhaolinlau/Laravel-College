@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')
	@include('layouts.navbar')
	@if ($banners)
		<div class="row">
			<div class="col">
				<div id="carousel" class="carousel slide carousel-fade" data-mdb-ride="carousel">

					<div class="carousel-indicators">
						@foreach ($banners as $row)
							<button type="button" data-mdb-target="#carousel" data-mdb-slide-to="{{ $loop->index }}"
								class="{{ $loop->first ? 'active' : '' }}"></button>
						@endforeach
					</div>

					<div class="carousel-inner">
						@foreach ($banners as $row)
							<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
								<img src="{{ asset('img/banners/' . $row->image) }}" alt="{{ $row->title }}" class="d-block w-100" />
								@if ($row->title || $row->description)
									<div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-9">
										<h5>{{ $row->title }}</h5>
										<p>{{ $row->description }}</p>
									</div>
								@endif
							</div>
						@endforeach
					</div>

					<button class="carousel-control-prev" type="button" data-mdb-target="#carousel" data-mdb-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-mdb-target="#carousel" data-mdb-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	@endif

	<div class="container-fluid my-5">
		<div class="row p-5">
			<div class="col-12">
				<div class="row g-5">
					<div class="col-6">
						<img src="{{ asset('storage/education.svg') }}" class="img-fluid" />
					</div>
					<div class="col-6">
						<h1 class="text-center">Our Courses</h1>
						<p>At Laravel College, we offer a wide variety of courses that are designed to help students achieve their academic
							and career goals. Our curriculum is constantly updated to reflect the latest trends and developments in the field,
							and our instructors are highly qualified and experienced professionals who are dedicated to helping students
							succeed. Whether you're just starting out on your academic journey or looking to take your career to the next
							level, we have a course that's right for you.are committed to ensuring that our students receive
							a well-rounded education that prepares them for the workforce.</p>
						<p>We offer a wide range of undergraduate and graduate programs in a variety of disciplines including, Business
							Administration, Computer Science, Engineering, Humanities, and Social Sciences. These programs are designed to
							provide students with a solid foundation in their chosen field, as well as the skills and knowledge needed to
							succeed in today's competitive job market.</p>
						<p>We also have a variety of online and distance learning courses, which provide students with the flexibility they
							need to balance their education with other responsibilities. These online courses are taught by the same qualified
							and experienced instructors as our on-campus classes, and are designed to provide students with the same
							high-quality education as our traditional classes. Whether you're looking for a full-time program or just want to
							take a few classes on the side, we have the perfect course for you.</p>
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
						<h1 class="text-center">Our Facilities</h1>
						<p>In addition to our wide range of academic programs, Laravel College also offers a variety of facilities and
							resources to support our students' learning and overall development. Our campus features state-of-the-art
							classrooms, computer labs, and libraries, as well as modern laboratory facilities for hands-on learning. These
							resources provide students with the tools they need to succeed academically and gain practical experience in their
							field of study.</p>
						<p>We also provide recreational facilities such as a gym, sports fields, and student lounges for the overall
							well-being of our students. These facilities provide students with the opportunity to engage in physical activity
							and socialize with their peers, which are important for maintaining a healthy balance between academics and
							personal life.</p>
						<p>Furthermore, we offer a range of student services, including counseling, health services, and academic advising,
							to help students navigate the academic and personal challenges they may face while studying. Our dedicated career
							center provides students with resources and support to help them find internships, co-op opportunities, and jobs
							after graduation. The career center offers career counseling, resume workshops, and job fairs, as well as an
							online job search database. These services are designed to help students succeed both academically and personally
							and are a valuable resource for our students as they pursue their academic and career goals.</p>
					</div>
					<div class="col-6">
						<img src="{{ asset('storage/science.svg') }}" class="img-fluid" />
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
						<img src="{{ asset('storage/professor.svg') }}" class="img-fluid" />
					</div>
					<div class="col-6">
						<h1 class="text-center">Professional Lecturers</h1>
						<p>At Laravel College, we believe that our professional lecturers are the foundation of our success. They bring a
							wealth of knowledge and experience to the classroom, and are dedicated to providing the highest quality education
							to our students. They are passionate about their subjects and are committed to ensuring that our students receive
							a well-rounded education that prepares them for the workforce.</p>
						<p>Our lecturers are highly qualified and have years of experience in their respective fields. They are experts in
							their subjects and are constantly seeking to improve their teaching methods to ensure that our students receive
							the best possible education. They are also committed to staying current with the latest industry trends and
							developments, which they incorporate into their lessons to ensure that our students are prepared for the real
							world.</p>
						<p>In addition to providing a top-notch education, our professional lecturers also act as mentors to our students.
							They are available to offer guidance and support, both in and out of the classroom. They are dedicated to helping
							our students achieve their full potential and succeed in their chosen field. With their expert guidance and
							mentorship, our students are able to gain the skills and confidence they need to succeed in the workforce.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.footer')
@endsection
