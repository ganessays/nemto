

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Event Activities</h1>
                        <p><i class="fa fa-check-circle"></i> <b>Exhibition (three days)</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>Conference ( CME ) (two days)</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>B2B meetings (three days)</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>Hospital Inspection Visits (one day ie. 3rd day of the Event)</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>Proposed Health Minister’s round table meeting followed by Networking Dinner hosted by Hon’ble Health Minister</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>Proposed Tourism Minister’s round table meeting followed by Networking Dinner hosted by Hon’ble Tourism Minister</b></p>
                        <p><i class="fa fa-check-circle"></i> <b>Networking Dinner on last day hosted by FICCI on the last day of the Event</b></p>
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