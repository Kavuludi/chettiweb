<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chepalungu || Technical Trainining Institute </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo.jpg')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
		<!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
		<!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		<!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		<!-- modernizr css -->
		<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<style>
    html ,body{
        overflow-y: scroll;
overflow-x: hidden;
    }
</style>
    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- preloder-wrap -->

        <!-- heared area start -->
	<header class="header-area header-area2">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8 col-xs-12">
						<div class="header-top-left">
						<i class="fa fa-envelope"></i> <a href="mailto:info@chetti.ac.ke">info@chetti.ac.ke</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-4 col-xs-12">
						<div class="header-top-right text-right">
							<ul>
								<li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom bg-2"  id="sticky-header">
			<div class="continer">
				<div class="row">
					<div class="col-md-3 col-sm-8 col-xs-6" style="background-color:white">
						<div class="row">
                            <div class="col-md-4">
                                <div class="logo" >
							<img src="{{asset('assets/images/logo.jpg')}}" style="height: 80px" alt="logo" srcset="">
							{{-- <h1><a href="{{url('/')}}">CHE-TTI</a></h1> --}}
						</div>
                            </div>
                            <div class="col-md-8">
                                	<p style="margin-top:20px; color: rgb(8, 8, 235);">Chepalungu Technical Training Institute</p>
                            </div>
                        </div>
					</div>
					<div class="col-md-9 hidden-sm hidden-xs">
						<div class="mainmenu">
							<ul id="navigation">
								<li class="active"><a href="{{url('/')}}">HOME</a></li>
								<li><a>ABOUT <i class="fa fa-angle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{ route('briefhistory') }}">BRIEF HISTORY</a></li>
                                   <li><a href="{{route('vissionmission')}}">MISSION,VISION,MOTTO</a></li>
										<li><a href="{{route('csr')}}">CSR</a></li>
                                        <li><a href="#">ANTHEMS <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('national_anthem')}}">NATIONAL ANTHEM</a></li>
														<li><a href="{{route('nac_anthem')}}">NAC ANTHEM</a></li>
														<li><a href="{{route('chetti_anthem')}}">CHETTI ANTHEM</a></li>
													</ul>
										</li>
										<li><a href="{{route('organogram')}}">ORGANOGRAM</a></li>
                                        <li><a href="{{route('enviroment')}}">ENVIROMEMT</a></li>
										<li><a href="{{route('rdi')}}">RDI</a></li>
										<li><a href="{{route('strategic_plan')}}">STRATEGIC PLAN</a></li>
										<li><a href="{{route('service_delivery')}}">SERVICE DELIVERY CHARTER</a></li>
										<li><a href="{{route('quality_policy')}}">QUALITY POLICY</a></li>
										<li><a href="{{route('iso_cert')}}">ISO CERTIFICATION</a></li>

									</ul>
								</li>
                                	<li><a> ADMINSTARTION <i class="fa fa-angle-down"></i></a>

									<ul class="submenu">
										<li><a href="#">GOVERNANCE <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('principal')}}">PRINCIPAL</a></li>
														<li><a href="{{ route('bog') }}">BOG</a></li>
													</ul>
										</li>
                                        <li><a href="{{route('deputyprincipal')}}">DEPUTY PRINCIPAL</a></li>
										<li><a href="{{route('registrar')}}">REGISTRAR</a></li>


									</ul>
                                </li>
								<li><a>ACADEMICS <i class="fa fa-angle-down"></i></a>
									<ul class="submenu">
										<li><a href="#">REGISTRAR <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('examination')}}">EXAMINATIONS</a></li>
														<li><a href="{{route('career_service')}}">OFFICE OF CARREER SERVICE</a></li>
													<li><a href="{{route('industrial_office')}}">INDUSTRIAL LIASON OFFICE</a></li>

													</ul>
										</li>
										<li><a href="#">ACADEMIC DEPARTMENTS <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('acd_engineering')}}">ENGINEERING</a></li>
														<li><a href="{{route('acd_hospitality')}}">HOSPITALITY</a></li>
														<li><a href="{{route('acd_business')}}">BUSINESS</a></li>
														<li><a href="{{route('acd_ict')}}">ICT </a></li>
													</ul>
										</li>
                                        <li><a href="{{route('adm_procedure')}}">ADMISSION PROCEDURE</a></li>
                                        <li><a href="{{route('applicationforms')}}">APPLICATION FORMS</a></li>
                                        <li><a href="{{route('online_application')}}" target="_blank">ONLINE  APPLICATION</a></li>
                                        <li><a href="{{route('e_learning')}}">E-LEARNING</a></li>
                                        <li><a href="{{route('brochure')}}">BROCHURE</a></li>
									</ul>
                                </li>
								<li><a>STAFF WELFARE <i class="fa fa-angle-down"></i></a>

									<ul class="submenu">
											<li><a href="{{route('dean_staff')}}">DEAN OF STAFF</a></li>
											<li><a href="{{URL('/login')}}">STAFF LOGIN</a></li>

									</ul>
                                </li>
                                <li><a>STUDENT WELFARE<i class="fa fa-angle-down"></i></a>

									<ul class="submenu">
										<li><a href="{{route('dean_student')}}">DEAN OF STUDENTS </a></li>
										<li><a href="{{route('student_login')}}">STUDENT LOGIN</a></li>
										<li><a href="{{route('student_leadership')}}">STUDENT LEADERSHIP</a></li>
										<li><a href="#">STUDENT ACTIVITIES <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('ball_games')}}">BALL GAMES</a></li>
														<li><a href="{{route('athletics')}}">ATHLETICS</a></li>
														<li><a href="{{route('drama_music')}}">DRAMA AND MUSIC</a></li>
														<li><a href="{{route('club_societies')}}">CLUB AND SOCIETIES</a></li>
													</ul>
                                        </li>
                                        <li><a href="{{route('student_attire')}}">STUDENTS ATTIRE</a></li>
										<li><a href="{{route('meal_accomodation')}}">MEALS & ACCOMONDATION</a></li>
                                        <li><a href="#">STUDENT FINANCING<span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('kuccps')}}">KUCCPS</a></li>
														<li><a href="{{route('helb')}}">HELB</a></li>
														<li><a href="{{route('others')}}">OTHERS</a></li>
													</ul>
                                        </li>
									</ul>
								</li>

								<li><a>MILESTONES <i class="fa fa-angle-down"></i></a>
									<ul class="submenu">
                                        <li><a href="{{route('mentorship')}}">MENTORSHIP</a></li>
                                        <li><a href="{{route('dedication')}}">DEDICATION </a></li>
                                         <li><a href="{{route('pioneer_group')}}">PIONEER GROUP </a></li>
									</ul>
								</li>
								{{-- <li><a>DOWNLOADS <i class="fa fa-angle-down"></i></a>
									<ul class="submenu">
                                        <li><a href="{{route('tenders')}}">TENDERS</a></li>
										<li><a href="{{route('vacancies')}}">VACANCIES</a></li>
										<li><a href="{{route('newsletter')}}">NEWSLETTER</a></li>
										<li><a href="#">ARCHIVES<span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
													<ul class="submenu">
														<li><a href="{{route('gallery')}}">GALLERY</a></li>
														<li><a href="{{route('videos')}}">VIDEOS</a></li>
									</ul>
								</li> --}}
							</ul>
						</div>
					</div>

					<div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
						<div class="responsive-menu-wrap floatright"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- heared area end -->
@yield('main')



		<!-- footer-area start  -->
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h2>About us </h2>
                                <p><b>Vision:</b> To be undisputed global leader in relevant innovations and skills for sustuinable development.</p>
                                        <p><b>Mission:</b> To be a dependable driving force in addressing human challenges in contemporary society using innovations, technology and research for prosperity.</p><ul>
                                    <li><i class="fa fa-phone"></i>+254 723 568 970</li>
                                    <li><i class="fa fa-envelope"></i> info@chetti.ac.ke</li>
                                </ul>
							</div>
						</div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="https://education.go.ke" target="_blank">MoE</a></li>
                                    <li><a href="https://www.knec.ac.ke" target="_blank">KNEC </a></li>
                                    <li><a href="https://www.kuccps.net" target="_blank">KUCCPS</a></li>
                                    <li><a href="https://www.tveta.go.ke"  target="_blank">TVETA</a></li>
                                    <li><a href="https://www.knqa.go.ke"  target="_blank">KNQA</a></li>
                                    <li><a href="https://www.tvetcdacc.go.ke/" target="_blank">CDACC</a></li>
									<li><a href="https://nca.go.ke/" target="_blank">NCA</a></li>
									<li><a href="https://nita.go.ke/" target="_blank">NITA</a></li>
									<li><a href="https://kasneb.or.ke/" target="_blank">KASNEB</a></li>
                                </ul>
                            </div>
                        </div>
						<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Mails</h2>
                                <ul>
                                    <li><a href="#" target="_blank">Staff Mail</a></li>
                                    <li><a href="#" target="_blank">Student Mail </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                            <div class="footer-widget quick-contact">
                                <h2>Quick Contact</h2>
                                 <form action="{{url('contact_us')}}" method="POST" enctype="multipart/form-data">
                @csrf
                                    <input type="text" placeholder="Full Name" required name="fullname">
                                    <input type="email" placeholder="Email" required name="email">
                                    <textarea name="message"  required cols="30" rows="10" placeholder="Message"></textarea>
                                    <button type="submit" name="button" class="btn-style">Send</button>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Chepalungu Technical Training College <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank" style="color: white;">Chetti IT Team</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- footer-area end  -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- counterup.main.js -->
        <script src="{{asset('assets/js/counterup.main.js')}}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="assets/js/jquery.waypoints.min.js')}}"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
		<!-- snake.min.js -->
        <script src="{{asset('assets/js/snake.min.js')}}"></script>
		<!-- wow js -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        </script>
    </body>
</html>
