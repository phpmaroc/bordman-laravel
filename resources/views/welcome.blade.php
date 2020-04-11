@extends('layouts.template')
@section('title', 'Home page')
@section('content')
<!-- Slider -->
<section class="slider-holder">
	<div class="flexslider carousel">
		<ul class="slides">
			<li> <img src="{{ asset('images/slide1.jpg') }}" alt="" /> </li>
			<li> <img src="{{ asset('images/slide2.jpg') }}" alt="" /> </li>
		</ul>

		<div class="search-box">
			<div class="container">
				<div class="search-box-inner">
					<h1>Search for Professionals</h1>
					<form action="job-professionals.html" method="POST" role="form">

						<div class="row">
							<div class="col-md-3 col-md-offset-1">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Keyword (title job or company)">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<div class="select-style">
										<select class="form-control">
											<option>All cities</option>
											<option>Casablanca</option>
											<option>Rabat</option>
											<option>Fes</option>
											<option>Marrakech</option>
											<option>Tanger</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="select-style">
										<select class="form-control">
											<option>All Services</option>
											<option>Informatique</option>
											<option>Hotelerie</option>
											<option>Développement</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-1">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Slider / End -->

<!-- Page Content -->
<section class="page-content">
	<div class="container">
		<!-- Stats -->
		<div class="section-light section-nomargin">
			<div class="section-inner">
				<div class="row">
					<div class="col-md-3">
						<div class="counter-holder counter-dark">
							<i class="fa fa-3x fa-suitcase"></i>
							<span class="counter-wrap">
								<span class="counter" data-to="42" data-speed="1500" data-refresh-interval="50">42</span>
							</span>
							<span class="counter-info">
								<span class="counter-info-inner">All Jobs</span>
							</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="counter-holder counter-dark">
							<i class="fa fa-3x fa-thumbs-o-up"></i>
							<span class="counter-wrap">
								<span class="counter" data-to="12" data-speed="1500" data-refresh-interval="50">12</span>
							</span>
							<span class="counter-info">
								<span class="counter-info-inner">Jobs Filled</span>
							</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="counter-holder counter-dark">
							<i class="fa fa-3x fa-user"></i>
							<span class="counter-wrap">
								<span class="counter" data-to="48" data-speed="1500" data-refresh-interval="50">48</span>
							</span>
							<span class="counter-info">
								<span class="counter-info-inner">Professionals</span>
							</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="counter-holder counter-dark">
							<i class="fa fa-3x fa-users"></i>
							<span class="counter-wrap">
								<span class="counter" data-to="64" data-speed="1500" data-refresh-interval="50">64</span>
							</span>
							<span class="counter-info">
								<span class="counter-info-inner">Members</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Stats / End -->

		<div class="spacer-xl"></div>

		<!-- Listings -->
		<div class="title-bordered">
			<h2>Our Professionals <small>Latest added</small></h2>
		</div>
		<div class="job_listings">
			<ul class="job_listings">
				<li class="job_listing">
					<a href="#">
						<div class="job_img">
							<img src="{{ asset('images/nologo.png') }}" alt="" class="company_logo">
						</div>
						<div class="position">
							<h3>Debbie Bidart</h3>
							<div class="company"> <strong>Paint Removal from Exterior or Interior Surfaces</strong> </div>
						</div>
						<div class="location">
							<i class="fa fa-location-arrow"></i> Casablanca,
						</div>
						<ul class="meta">
							<li class="job-type">Service name</li>
							<li class="date">
								Posted 1 month ago
							</li>
						</ul>
					</a>
				</li>
				
			</ul>
		</div>

		<div class="spacer"></div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<a class="btn btn-default btn-block" href="#">View All Companies</a>
			</div>
		</div>

		<!-- Listings / End -->

		<div class="spacer-xxl"></div>

		<!-- Promobox -->
		<div class="promobox" data-stellar-background-ratio="0.5">
			<div class="row">
				<div class="col-md-4 promobox-item">
					<h4><span>For</span> Designers</h4>
					<img src="{{ asset('images/samples/worker3.png') }}" alt="" class="img-responsive">
					<a href="#" class="btn btn-primary btn-sm">See Here</a>
				</div>
				<div class="col-md-4 promobox-item">
					<h4><span>For</span> Plumbers</h4>
					<img src="{{ asset('images/samples/worker1.png') }}" alt="" class="img-responsive">
					<a href="#" class="btn btn-primary btn-sm">See Here</a>
				</div>
				<div class="col-md-4 promobox-item">
					<h4><span>For</span> Builders</h4>
					<img src="{{ asset('images/samples/worker2.png') }}" alt="" class="img-responsive">
					<a href="#" class="btn btn-primary btn-sm">See Here</a>
				</div>
			</div>
		</div>
		<!-- Promobox / End -->

		<div class="spacer-lg"></div>

		<div class="spacer"></div>

		<!-- Testimonials -->
		<div class="title-bordered">
			<h2>Testimonials <small>what clients say</small></h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="testimonial">
					<blockquote>
						<p>If you're faced with home improvement or repair tasks, and don't have the time, I would give Handyman my highest recommendation.</p>
					</blockquote>
					<div class="bq-author">
						<figure class="author-img">
							<img src="{{ asset('images/samples/user1-sm.jpg') }}" alt="">
						</figure>
						<h6>Michael Smith</h6>
						<span class="bq-author-info">Copywriter</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="testimonial">
					<blockquote>
						<p>They worked hard and offered to help me set up my furniture once it was in my new home.</p>
						<p>Very pleased!</p>
					</blockquote>
					<div class="bq-author">
						<figure class="author-img">
							<img src="{{ asset('images/samples/user3-sm.jpg') }}" alt="">
						</figure>
						<h6>Bradley Cooper</h6>
						<span class="bq-author-info">Teacher</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="testimonial">
					<blockquote>
						<p>The movers were friendly, helpful, polite, professional and efficient. They did a great job! I would highly recommend them! Thank you!</p>
					</blockquote>
					<div class="bq-author">
						<figure class="author-img">
							<img src="{{ asset('images/samples/user2-sm.jpg') }}" alt="">
						</figure>
						<h6>Hanna Pinkman</h6>
						<span class="bq-author-info">Radiologist</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="testimonial">
					<blockquote>
						<p>I am very happy with their work. they did a great job. They were very helpful with other aspects of the work i had in mind. They were very clean, and very quick.</p>
					</blockquote>
					<div class="bq-author">
						<figure class="author-img">
							<img src="{{ asset('images/samples/user4-sm.jpg') }}" alt="">
						</figure>
						<h6>Erick Fox</h6>
						<span class="bq-author-info">Botanist</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials / End -->
	</div>
</section>
		
@endsection