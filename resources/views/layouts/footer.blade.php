<footer class="text-center text-lg-start bg-white text-muted position-absolute top-100 w-100">

	<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

		<div class="me-5 d-none d-lg-block">
			<span>Get connected with us on social networks:</span>
		</div>

		<div>
			<a href="" class="me-4 link-secondary">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="" class="me-4 link-secondary">
				<i class="fab fa-instagram"></i>
			</a>
			<a href="" class="me-4 link-secondary">
				<i class="fab fa-youtube"></i>
			</a>
			<a href="" class="me-4 link-secondary">
				<i class="fab fa-linkedin"></i>
			</a>
			<a href="" class="me-4 link-secondary">
				<i class="fab fa-google"></i>
			</a>
		</div>

	</section>

	<section>
		<div class="container text-center text-md-start mt-5">

			<div class="row mt-3">

				<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

					<h6 class="text-uppercase fw-bold mb-4">
						<i class="fas fa-graduation-cap me-3 text-secondary"></i>Laravel College
					</h6>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero maxime deleniti natus. Nihil corporis, quod
						distinctio, recusandae culpa dolore voluptatem tempore vitae laborum tempora accusantium, voluptates hic
						doloribus modi fuga.
					</p>
				</div>

				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

					<h6 class="text-uppercase fw-bold mb-4">
						Useful links
					</h6>
					<div>
						<a href="#!">About</a>
					</div>
					<div>
						<a href="#!">Courses</a>
					</div>
					<div>
						<a href="#!">FAQs</a>
					</div>
					<div>
						<a href="#!">Contact Us</a>
					</div>
					<div>
						<a href="#!">Login</a>
					</div>
					<div>
						<a href="#!">Apply Now</a>
					</div>

				</div>

				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

					<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
					<p class=""><i class="fas fa-home me-3 text-secondary"></i> Laravel College, Wangsa Maju, 51000 Kuala
						Lumpur, Malaysia.</p>
					<p>
						<i class="fas fa-envelope me-3 text-secondary"></i>
						laravelcollege@gmail.com
					</p>
					<p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
					<p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
				</div>
			</div>

		</div>
	</section>

	<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
		Copyright &copy; <span id="year"></span> <span class="fw-bold">Laravel College</span>. All rights reserved.
	</div>

</footer>

<script>
	const year = new Date().getFullYear()
	document.getElementById('year').innerHTML = year;
</script>