@extends('layouts.front')
@section('main')
<style>
    p{
        font-size: 18px;
    }
</style>
        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2> DEPUTY PRINCIPAL-ADMINISTRATION </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcumb-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li>/</li>
                                <li>The Deputy Principal- Administrarion</li>
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
						<h2>Message From The Deputy Principal</h2>
						<p>As the Deputy Principal in charge of Administration, my role is to assist the Principal in
                            administrative duties as outlined in TVET ACT, 2013.At CHETTI, we have embraced open door policy, where the Trainers,
                            Trainees and Management interact freely so as to address the day to day challenges
                            that may hamper smooth running of the Institute's core mandate of offering quality technical and vocational training .
                        The guiding principle as we discharge our mandate is that high standards are maintained so as to filter out quality products
                        to the job market.

                        <p>Thank you.</p>
                    	</p>

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
							<img src="{{asset('images/deputyprincipalAdmin.jpg')}}" alt="Deputy Principal - Admnistration" srcset="">
						</div>
						<div class="team-content">
							<h3>Mr. Wesley Sigei</h3>
							<p>Deputy Principal, Administration</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-area end -->

@endsection
