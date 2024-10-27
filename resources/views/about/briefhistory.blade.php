@extends('layouts.front')
@section('main')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2>Brief History</h2>
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
                                <li>Brief History</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- about-area start -->
        <section class="about-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="about-img black-opacity">
                            <img src="{{asset('images/chetti.jpg')}}" alt="schoolbuilding" srcset="">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="about-wrap">
                            <h3> Chepalungu Technical Training Institute</h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->


@endsection
