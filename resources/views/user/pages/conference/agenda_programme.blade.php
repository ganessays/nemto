

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>PROGRAMME 2019</h1>
                        <div class="" id="gallery1" align="center">
                            <p style="text-align:center;font-size:20px;color:#000;font-weight:bold;" align="center">
                                <span style="text-align:center;color:#000;">Programme 2019</span><br>
                                <iframe id="fred" title="Nepal Medical Tourism Organization (A non-profitable organization)" src="{{url('public/images/pdf/agenda130619.pdf')}}" frameborder="1" scrolling="auto" height="800" width="100%">
                                </iframe>
                            </p>
                        </div>
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