@extends('layouts.front')

@section('main')
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="https://i.ytimg.com/vi/HR0ClJ0J7AU/maxresdefault.jpg" class="img-responsive" />
            </div>
        </div>
    </div>
</div>

	<!-- slider area start -->

	<section class="slider-area">
		<div class="slider-active3 slider-next-prev-style">
			<div class="slider-items">
				<img src="assets/images/slider/12.jpg" alt="" class="slider">
				<div class="slider-content text-center">
					<div class="table">
						<div class="table-cell">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-md-8 col-md-offset-2">
										<h2>Welcome to Chepalungu Technical Training Institute</h2>
										<p>
											Chepalungu Technical Training Institute (CHETTI) is a Public TVET Institution opening
											 its doors to the public for full and part-time certified academic programmes.
											  CHETTI is positioning itself as a key source of highly skilled and competent
											  labour force, and reputable entrepreneurs in accordance with the needs and specifications
											   of the ever evolving  world industry, for the realization of Vision 2030.
										</p>
										<ul>
											<li><a href="{{route('readmore')}}">Read More</a></li>
											<li><a href="{{route('modeofapplication')}}">Apply Now</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-items">
				<img src="assets/images/slider/13.jpg" alt="" class="slider">
				<div class="slider-content text-center">
					<div class="table">
						<div class="table-cell">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-md-8 col-md-offset-2">
										<h2>Admissions 2021</h2>
										<p>Our Admission for January, May and September 2021 Intake is Ongoing. Contact us for more information</p>
										<ul>
										<li><a href="{{route('courses')}}">Our Courses </a></li>
											<li><a href="{{route('contacts')}}">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- slider area end -->

	<!-- blog-area start -->
	<section class="blog-area  bg-1" style="padding-top: 30px" id="blog">
        <div class="card">
            <div class="text-center">
                <h3>Covid-19 Awareness</h3>

                <img src="https://www.gstatic.com/healthricherkp/campaigns/wear-mask-save-lives/UZ9ZuX.svg" style="height: 100px"/>
               <h3 style="font-weight:bold;"> Wear a mask.Save lives.</h3>
               <div style="font-weight:bold;">
                <h4>Wear a mask</h4>
                <h4>Clean your hands</h4>
                <h4>Keep a safe distance</h4>
               </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
					<div class="section-title text-center">
						<h3>NEWS | All News & Announcements</h3>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp mb-3" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="{{ asset('assets/images/slider/12.jpg')}}" alt="" />
						</div>
						<div class="blog-content">
							<h3><a>CHETTI Admissions 2021</a></h3>
                            <h4 style="color:red;">May Intake Ongoing</h4>
							<p>
                                Our Institute's May intake is currently ongoing.
                                Download our application forms and fill them appropriately, before depositing them to registrar's office.

                            </p>
							{{-- <a href="#" class="btn-style">Read More</a> --}}
                            <span class="badge badge-primary" style="background-color:green;" >New</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-8 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="assets/images/slider/2.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a>2021 University/Tvet KUCCPS Applications</a></h3>
							<p>All students wishing to pursue courses at CHETTI are encouraged to apply with KUCCPS</p>
							{{-- <a href="#" class="btn-style">Read More</a> --}}
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="assets/images/slider/12.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a>TVET HELB Loan Applications</a></h3>
							<p>Higher Education Loans Board has extended the deadline for loans and bursary application to enable additional students to apply.</p>
							{{-- <a href="#" class="btn-style">Read More</a> --}}
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="images/covid.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a href="#" >Covid-19 Awareness</a></h3>
							<p>Our Institute is compliant with Covid-19 protocols. Find the Sensitization information slides here.</p>
							{{-- <a href="#" class="btn-style">Read More</a> --}}
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- blog-area end -->
	<!-- .service-area start -->
	<section class="service-area home2-service-area ptb-140">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
					<div class="section-title text-center">
						<h2>Academic Departments</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="service-wrap">
						<div class="service-content">
							<h3>Engineering Department</h3>
							<p>
								The department has courses and modular skill training programmes offered by qualified trainers in response to changing technology, job market and career needs.
							</p>
						  <a href="{{ route('acd_engineering') }}">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
					<div class="service-wrap">
						<div class="service-content">
							<h3>ICT Department</h3>
							<p>
								The department of Information, Communication and Technology has been mandated to effectively utilize and manage appropriate information communication technology solution systems as well as imparting technology skills to learners in our Institute.
							</p>
						<a href="{{ route ('acd_ict')}}">Read More</a>
						</div>
					</div>
				</div>
				                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-wrap">
                        <div class="service-content">
                            <h3>Hospitality Department</h3>
                            <p>
                                The Hotel and Hospitality Industry is one of the fastest growing sectors of the Kenyan economy. The food and beverage managers run hotels, restaurant facilities, hospitality sections of schools and other forms of hospitality enterprises.
                            </p>
                            <a href="{{route ('acd_hospitality')}}">Read More</a>
                        </div>
                    </div>
                </div>

			</div>
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="service-wrap">
                        <div class="service-content">
                            <h3>Business Department</h3>
                            <p>
                                The department intends to ensure that the learners are equipped with necessary skills in the areas relevant in the Business Sector.
                            </p>
                            <a href="{{route ('acd_business')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- .service-area end -->
	<!-- about-area start -->
	<section class="about-area pb-140 about-area2">
		<div class="container">
			<div class="row">
				<div class="col-md-6  wow fadeInUp" data-wow-delay=".2s">
					<div class="team-wrap3">
						<div class="team-img">
							<ul>
								<li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://googleplus.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<img src="{{asset('images/1.jpg')}}" alt="Principal" srcset="">
						</div>
						<div class="team-content">
							<h3>Kipkemoi Tanui</h3>
							<p>The Principal</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 wow fadeInLeft">
					<div class="about-wrap">
						<h2>Message From The Principal</h2>
						<p>

May I take this opportunity to extend a warm welcome to you all!
Congratulations on making a very positive choice to become a trainee at Chepalungu Technical Training Institute (CHETTI).

The existence of Chepalungu Technical Training Institute dates way back to 2014 when the Government considered the need to achieve Vision 2030 through establishment of TVET institutions across the country. CHETTI is one of the few privileged TVET institutions in the Country to be located at heart of strong catchment and residents who are passionate of technical skills. During it's first recruitment exercise, the Institute attracted the highest number of applications causing it to be one of the leading institutes to attract more interested applicants .
The Institute boasts of highly skilled and qualified trainers for various courses. Boarding facilities for both female and male students are readily available in the neighbourhood.

Currently the Institute offers a number of Diploma, Certificate and Artisan courses in Engineering, Hospitality, Business and Information Communication Technology fields, all accredited by Kenya National Examination Council (KNEC). More programmes will be considered as the Institute grows including courses accredited by National Industrial Training Authority (NITA) and Curriculum Development Assessment and Certificate Council (CDACC).
<p>Thank You</p>
</p>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-area end -->

	{{-- Our Courses --}}
	<section class="service-area">
		<div class="container">
            <div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
					<div class="section-title text-center">
						<h2>Our Courses</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 col">
					<div class="service-wrap mb-30">
						<div class="service-img">
							<img src="https://via.placeholder.com/360x288?text=Diploma+Courses" alt="">
						</div>
						<div class="service-content">
							<h3>Diploma Courses</h3>
							<p>We offer the best Diploma Courses: from Graduate to Postgraduate and Advanced Diploma.
								Our Diploma Courses stem from a wide variety of subjects including Agriculture, Business, Hospitality,Engineering and Technology, and more.</p>
							<a href="#" Read More></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 col">
					<div class="service-wrap mb-30">
						<div class="service-img">
							<img src="https://via.placeholder.com/360x288?text=Certificate+Courses" alt="">
						</div>
						<div class="service-content">
							<h3>Certificate Courses</h3>
							<p>We offer the best Certificate Courses in Agriculture, Businness, Engineering, and Technology according to the evolving needs and the demands of the industrial world.</p>
							<a href="#" Read More></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 col">
					<div class="service-wrap mb-30">
						<div class="service-img">
							<img src="https://via.placeholder.com/360x288?text=Craft+Courses" alt="">
						</div>
						<div class="service-content">
							<h3>Artisan Courses</h3>
							<p>We offer Artisan Courses that empower young people with technical skills that make them more employable or innovative to meet the standars of the job market or launch their own businesses.</p>
							<a href="#" Read More></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- blog-area start -->
	<section class="blog-area  bg-1" style="padding-top: 30px" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
					<div class="section-title text-center">
						<h3>Chetti News</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="assets/images/blog/1.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a>Our Publications</a></h3>
							<p>
								Chetti publications will be posted from time to time
							</p>
							<a href="#" class="btn-style">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="assets/images/blog/1.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a href="blog.html">ODEL Training</a></h3>
							<p>
								To be updated!!
							</p>
							<a href="#" class="btn-style">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
					<div class="blog-wrap">
						<div class="blog-img">
							<img src="assets/images/blog/1.jpg" alt="" />
						</div>
						<div class="blog-content">
							<h3><a>Research Papers</a></h3>
							<p>
                                Once publidhed, Chetti research materials will be uploaded here for review.
								</p>
							<a href="#" class="btn-style">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog-area end -->

@endsection
