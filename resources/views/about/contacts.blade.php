@extends('layouts.front')
@section('main')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2>Contact Us</h2>
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
                                <li>About</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<br>
		<br>
		<br>
		<section>
            <div class="contact-area ptb-50">
                <div class="container">
                <div class="row">
                <div class="col-md-8">
                <div class="contact-wrap form-style">
                <h3>Contact Us</h3>
                <div>
                    <h4>Contact us for all your educational, technical and vocational training inquiries.</h4>
                </div>


                <div class="cf-msg" style="display: none;"></div>
             <form action="{{url('contact_us')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-sm-6 col-xs-12">
                <input type="text" placeholder="Name" id="fullname" name="fullname">
                </div>
                <div class="col-sm-6 col-xs-12">
                <input type="text" placeholder="Email" id="email" name="email">
                </div>
                <div class="col-xs-12">
                <input type="text" placeholder="Subject" id="subject" name="subject">
                </div>
                <div class="col-xs-12"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                <textarea class="contact-textarea" placeholder="Message" id="message" name="message" spellcheck="false"></textarea>
                </div>
                <div class="col-xs-12">
                <button  type="submit" class="cont-submit btn-contact" name="submit">SEND MESSAGE</button>
                </div>
                </div>
                </form>
                </div>
                </div>
                <div class="col-md-4">
                <div class="contact-wrap">
                <ul>
                <li>
                <i class="fa fa-phone"></i>
                <p> +254 702 744650</p>
                <p>+254 770 700 87</p>
                </li>
                <li>
                <i class="fa fa-envelope"></i>
                <p>info@chetti.ac.ke</p>
                <p> chepalungutti@gmail.com</p>
                </li>

                <li>
                <i class="fa fa-location-arrow"></i>
               P.O BOX 175-20401, Chebunyo
Landmark : 1.5 KM Off Kiproroget - Chebunyo Road

                </li>
                </ul>
                </div>
                </div>
                <div class="col-xs-12">
               <div class="mapouter"><div class="gmap_canvas"><iframe width="1150px" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kenya,kiproroget&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yt2.org/youtube-to-mp3-ALeKk00qEW0sxByTDSpzaRvl8WxdMAeMytQ1611842368056QMMlSYKLwAsWUsAfLipqwCA2ahUKEwiikKDe5L7uAhVFCuwKHUuFBoYQ8tMDegUAQCSAQCYAQCqAQdnd3Mtd2l6"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1150px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1150px;}</style></div></div>
                </div>
                </div>
                </div>
                </div>
    </section>
    <!--SECTION END-->

            @endsection
