@extends('layouts.front')
@section('main')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2>CHETTI PRINCIPAL </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcumb-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>The Principal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

    	<!-- about-area start -->
	<section class="about-area pb-140 about-area2">
		<div class="container">
            <br>
			<div class="row">
				<div class="col-md-6 col-xs-12 wow fadeInLeft">
					<div class="about-wrap">
						<h2>Message From The Principal</h2>
						<p>

May I take this opportunity to extend a warm welcome to you all!
Congratulations on making a very positive choice to become a trainee at Chepalungu Technical Training Institute (CHETTI).

The existence of Chepalungu Technical Training Institute dates way back to 2014 when the Government considered the need to achieve Vision 2030 through establishment of TVET institutions across the country. CHETTI is one of the few privileged TVET institutions in the Country to be located at heart of strong catchment and residents who are passionate of technical skills. During it's first recruitment exercise, the Institute attracted the highest number of applications causing it to be one of the leading institutes to attract more interested applicants .
The Institute boasts of highly skilled and qualified trainers for various courses. Boarding facilities for both female and male students are readily available in the neighbourhood.

Currently the Institute offers a number of Diploma, Certificate and Artisan courses in Engineering, Hospitality, Business and Information Communication Technology fields, all accredited by Kenya National Examination Council (KNEC). More programmes will be considered as the Institute grows including courses accredited by National Industrial Training Authority (NITA) and Curriculum Development Assessment and Certificate Council (CDACC).

Thank you			</p>

					</div>
				</div>
				<div class="col-md-6  wow fadeInUp" data-wow-delay=".2s">
					<div class="team-wrap3">
						<div class="team-img">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<img src="{{asset('images/1.jpg')}}" alt="Principal" srcset="">
						</div>
						<div class="team-content">
							<h3>Kipkemoi Tanui</h3>
							<p>The Principal</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-area end -->

@endsection
