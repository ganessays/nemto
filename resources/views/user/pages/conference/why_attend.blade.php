

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Why Attend ?</h1>
                        <p>
                            The objective of this summit is to promote India as a Premier Global Healthcare Destination and to enable streamlined medical services exports from India. This underlying objective is a unique conglomeration of the ‘5 – Ts’ - talent, tradition, technology, tourism and trade.
                        </p>
                        <img src="{{url('public/images/pagesimg/objective.jpg')}}" alt="">
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