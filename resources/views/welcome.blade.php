@extends('user.layouts.master')
@section('content')
    <!--================Home Banner Area =================-->

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img src="{{url("public/images/slider/slider1.jpg")}}" class="d-block w-100" alt="..."> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MEDICAL TOURISM ASIA SUMMIT- 2018</h5>
                        <a class="slider_title">6-7 August, 2018 : Promoting Healthcare Services Exports from Nepal</a>
                        <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url("public/images/slider/slider2.jpg")}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MEDICAL TOURISM ASIA SUMMIT- 2018</h5>
                        <a class="slider_title">Award Distribution Ceremony</a> <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url("public/images/slider/slider3.jpg")}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MEDICAL TOURISM ASIA SUMMIT- 2018</h5>
                        <a class="slider_title">Official Banner for Medica Tourism Asia Summit</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url("public/images/slider/slider4.jpg")}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MEDICAL TOURISM ASIA SUMMIT- 2018</h5>
                        <a class="slider_title">Delegate Registration and Information Desk</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url("public/images/slider/slider5.jpg")}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MEDICAL TOURISM ASIA SUMMIT- 2018</h5>
                        <a class="slider_title">7 August, 2019: Conference and Workshop</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--================End Home Banner Area =================-->

    <!--================Home Banner Area =================-->

    <section class="">
        <img src="{{url("public/images/slider/2nd_banner.jpg")}}" class="d-block w-100" alt="...">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </section>

    <!--================ Feature section start =================-->
    <section class="feature-section">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left" style="background: #dee2e6">
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                                <i class="fa fa-check-square"></i>
                            </span><a href="{{url('exhibitor-registration')}}">Exhibitor Registration</a></h4>
                        <a href="{{url('exhibitor-registration')}}" class="registration_nemto">Registration</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left" style="background: #dee2e6">
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                                <i class="fa fa-check-square"></i>
                            </span><a href="{{url('conference-registration')}}">Conference Registration</a></h4>
                        <a href="{{url('conference-registration')}}" class="registration_nemto">Registration</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left" style="background: #dee2e6">
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                                <i class="fa fa-check-square"></i>
                            </span><a href="{{url('foreign-delegate-registration')}}">Foreign Delegate Registration</a></h4>
                        <a href="{{url('foreign-delegate-registration')}}" class="registration_nemto">Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ Feature section start =================-->
    <section class="feature-section" style="background-image: url('{{url('public/images/background/banner-2.jpg/')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left" style="background: #06b6a9">
                        <i class="nemto_icon"> <img src="{{url('public/images/icon/embassy.png')}}" alt=""></i>
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                            </span>DIPLOMATIC OFFICIALS</h4>
                        <a href="#" class="registration_nemto">Registration</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left" style="background: #06b6a9">
                        <i class="nemto_icon"> <img src="{{url('public/images/icon/exhibition.png')}}" alt=""></i>
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                            </span>B2B MEETINGS</h4>
                        <a href="#" class="registration_nemto">Registration</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature nemto text-center text-lg-left" style="background: #be8404">
                        <i class="nemto_icon"> <img src="{{url('public/images/icon/abstract.png')}}" alt=""></i>
                        <h4 class="card-feature__title"><span class="card-feature__icon">
                            </span>ABSTRACT SUBMISSION</h4>
                        <a href="#" class="registration_nemto">Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Feature section end =================-->
    <!--================About  Area =================-->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h4 class="card-feature__title"><span class="card-feature__icon">
                            </span>
                           Medical Tourism Asia Summit 2018</h4>
                        <p class="card-feature__subtitle">
                            ContinuityLink offers multiple Business Continuity training opportunities in Europe, the Americas and Africa (public or in-house). We offer :</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-check-circle"></i> First ever International Summit on Medical Value Travel being</a></li>
                        </ul>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Read More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-lg-left">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{url("public/images/slider/slider5.jpg")}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url("public/images/slider/slider4.jpg")}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url("public/images/slider/slider1.jpg")}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h4 class="card-feature__title"><span class="card-feature__icon">
                            </span>Medical Tourism Asia Summit 2019</h4>
                        <p class="card-feature__subtitle">
                            Aliquid architecto culpa eaque enim itaque qui quibusdam quidem sapiente sint unde. Beatae dicta dolor ex id ipsam nihil qui totam voluptatum.
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-check-circle"></i> Your business objectives</a></li>
                            <li><a href="#"><i class="fa fa-check-circle"></i> Recognised standards</a></li>
                            <li><a href="#"><i class="fa fa-check-circle"></i> Best professional practices</a></li>
                        </ul>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->
    <!--================MEDICAL TOURISM ASIA SUMMIT FOCUS OBJECTIVES Area =================-->
    <section class="industries">
        <div class="container">
            <h2>MEDICAL TOURISM ASIA SUMMIT FOCUS INDUSTRIES</h2>
            <div class="row">
                <div class="col">
                    <div class="card card-feature_industries asia_summit">
                        <h5>HOSPITAL & HEALTHCARE</h5>
                        <p>
                            Meet top Nepalese hospitals
                            Meet internationally renowed doctors
                            Experince quality treatment offerd by super speciality hospitals
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-feature_industries asia_summit">
                        <h5>WELLNESS & FITNESS CENTERS</h5>
                        <p>
                            Experience the world class Nepalese Traditional therapies
                            Blissful wellness centres of Nepal
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-feature_industries asia_summit">
                        <h5>ACADEMIC INSTITUTIONS</h5>
                        <p>
                            Network with Nepalese Medical and Paramedical Colleges
                            Share the knowledge with academia specialists in healthcare sector of Nepal
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-feature_industries asia_summit">
                        <h5>MEDICAL TECHNOLOGY</h5>
                        <p>
                            Open to latest technology advancement in medical field
                            Meet for the technology partnership and investment
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-feature_industries asia_summit">
                        <h5>HEALTH INSURANCE</h5>
                        <p>
                            Initiate medical insurance and TPA companies for collaboration
                            Sign MOUs for partnership
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================MEDICAL TOURISM ASIA SUMMIT FOCUS OBJECTIVES Area END=================-->
    <!--================Sponsore Area  =================-->
    <div class="container">
        <h2 style="text-align: center">PROPOSED SPONSORS</h2>
    </div>
    <section class="sponsore_nemto" style="background: #0096ff">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sponsore_list_nemto">
                        <img src="{{url('public/images/patners/partner2019.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!--================Sponsore Area End =================-->
@endsection