

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_contact_us">
                        <h1>Contact Us</h1>
                        <h2>Nepal Medical Tourism Organization</h2>
                        <span class="nemto_contact_non">(A non-profitable organization)</span>
                        <p><b><i class="fa fa-map-marker"></i> Putalisadak, Ramsahapath, Kathmandu- 28, Nepal</b></p>
                        <p><i class="fa fa-phone"></i> +977-1-4223473</p>
                        <p><i class="fa fa-mobile"></i> +977-9860555163, 9851206644,9860832126</p>
                        <p> <i class="fa fa-envelope"></i> info@nemto.org</p>
                        <p> <i class="fa fa-globe"></i> <a href="www.nemto.org"> www.nemto.org</a></p>
                        <div class="contact_us">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28258.80718500621!2d85.30210885775823!3d27.70645015485687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1971dab896fb%3A0x90e421e7a8cf27ac!2sNepal+Medical+Tourism+Organization!5e0!3m2!1sen!2snp!4v1562461823860!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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