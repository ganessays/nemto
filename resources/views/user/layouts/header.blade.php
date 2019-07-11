@section('header')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{url("public/images/logo/favicon.png")}}" type="image/png">
    @if(isset($title))

    <title>{!! $title !!}</title>
    @else
    <title>NEMTO | Nepal Medical Tourism Organization</title>
    @endif
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('public/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('public/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url("public/vendors/owl-carousel/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{url("public/vendors/animate-css/animate.css")}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('public/css/custom.css')}}">
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-right social_top_menu">
                <ul class="list header_social">
                    <li><a href="https://www.facebook.com/nepalmedicaltourismorganization/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <ul class="list header_social">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">AGENDA</a></li>
                    <li><a href="#">LAYOUT PLAN</a></li>
                    <li><a href="#">MEDIA</a></li>
                    <li><a href="#">CONTACT US </a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="float-left">
                <ul class="list header_social">
                    <li><a class="nemto_logo" href="{{url("")}}"><img src="{{url("public/images/logo/expo.jpg")}}" alt=""></a></li>
                    <li><a class="venue_date" href="{{url("")}}"><img src="{{url("public/images/logo/venue.png")}}" alt=""></a></li>

                </ul>
            </div>
            <div class="float-right">
                <ul class="list header_social">
                    <li><a class="" href="{{url("")}}"><img src="{{url("public/images/logo/tnv-logo.jpg")}}" alt=""></a></li>
                    <li><a class="" href="{{url("")}}"><img src="{{url("public/images/logo/epcc_logo.png")}}" alt=""></a></li>
                    <li><a class="" href="{{url("")}}"><img src="{{url("public/images/logo/ghcs_logo.png")}}" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url("")}}"><img src="{{url("public/images/logo/logo_nemto_mobile_menu.png")}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        {{--<li class="nav-item"><a class="nav-link" href="contact.html">Home</a></li>--}}
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Show <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('about-event')}}">About The Event</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('event-features')}}">Event Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('medical-industry')}}">Medical Industry</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('event-activities')}}">Event Activities</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('past-show-report-2018')}}">Post Show Report 2018</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('about-organisers')}}">About Organisers</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('supporting-organisations')}}">Supporting Organisations</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('strategic-organisations')}}">Strategic Organisations</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('official-sales-partner')}}">Official Sales Partner</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('thank-you-sponsors-2018')}}">Thank You Sponsors 2018</a></li>

                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exhibition <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('exhibition')}}">Exhibition</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('why-exhibit')}}">Why Exhibit?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('who-can-exhibit')}}">Who Can Exhibit?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('exhibitor-profile')}}">Exhibitor Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('exhibitor-registration')}}">Exhibitor Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('layout-plan')}}">Layout Plan</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('venue-details')}}">Venue Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('stand-and-packages')}}">Stand And Packages</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('sponsorship-opportunities')}}">Sponsorship Opportunities</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('exhibitor-list-2018')}}">Exhibitors List -NEMTO 2018</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('why-attend')}}">Why Attend?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('who-can-attend')}}">Who Can Attend?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('highlights')}}">Highlights</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('conference-speakers-2018')}}">Speakers 2018</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('agenda-programme')}}">Agenda Programme</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('regional-forum-schedule')}}">Regional Forums - Schedule</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('delegate-registration')}}">Delegate Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visitors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('why-visit')}}">Why Visit?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('who-can-visit')}}">Who Can Visit?</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('visitor-profile')}}">Visitor Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('admission-policy')}}">Admission Policy</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('venue-details')}}">Venue Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('exhibitor-registration')}}">Exhibitor Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('conference-delegate-registration')}}">Conference Delegate Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('foreign-delegate-registration')}}">Foreign Delegate Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('embassy-official-registration')}}">Embassy Official Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('')}}">Knowledge Sharing Programme Registration</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('')}}">Media Registration</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Awards <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('Apply-for-awards')}}"> APPLY FOR AWARDS</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('about-the-awards')}}"> About the Awards</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('categories')}}"> Categories</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('praticipation')}}"> Participation Fee</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('application-guideline')}}"> Application Guidelines</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('contacts')}}">Contacts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Travel Desk <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('official-travel-partners')}}"> Official Travel Partner</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('')}}"> Visa Information</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Foreign Delegate <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('highlights')}}"> Highlights</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('delegate-registration')}}">Delegate Registration</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
@endsection