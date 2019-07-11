

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Venue Details</h1>
                       <h2>Yak & Yeti Hotel, Kathmandu, Nepal</h2>
                        <p>29-30 November, 2019</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441.5225717374408!2d85.31986957481983!3d27.711710442119646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19042204f6a1%3A0xa7af95e7f7d75e66!2sHotel+Yak+And+Yeti!5e0!3m2!1sen!2sus!4v1562636213600!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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