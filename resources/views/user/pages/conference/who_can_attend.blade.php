

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Who Attend</h1>
                        <ul>
                            <li>International Hospitals</li>
                            <li>Prospective Medical Tourists</li>
                            <li>Govt. Organizations / Bodies</li>
                            <li>Insurance Companies</li>
                            <li>Travel &amp; Tour Operators</li>
                            <li>Hotels &amp; Hospitality Industry</li>
                            <li>Doctors And Medical Experts</li>
                            <li>Medical Tourism Organizations</li>
                            <li>International Medical Associations</li>
                            <li>Medical Journalists</li>
                            <li>Fitness Centres</li>
                            <li>Clubs</li>
                            <li>Clinics</li>
                            <li>Investors</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right_side_registration">
                        @include('user.layouts.all_pages_right_side')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection