

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>VISA INVITATION LETTER
                        </h1>
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Company Name <span class="red">*</span></label>
                                        <input class="form-control" name="name" id="name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Full Name (As in Passport) <span class="red">*</span></label>
                                        <input class="form-control" name="passport_name" id="name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nationality <span class="red">*</span></label>
                                        <input class="form-control" name="nationality" id="nationality" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">First Name <span class="red">*</span></label>
                                        <input class="form-control" name="first_name" id="first_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span class="red">*</span></label>
                                        <input class="form-control" name="date_of_birth" id="date_of_birth" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">E-Mail <span class="red">*</span></label>
                                        <input class="form-control" name="email" id="email" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Country <span class="red">*</span></label>
                                        <input class="form-control" name="country" id="country" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Mobile Number <span class="red">*</span></label>
                                        <input class="form-control" name="mobile_number" id="mobile_number" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <input class="form-control" name="country" id="country" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Website</label>
                                        <input class="form-control" name="website" id="website" type="url">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h2>PASSPORT DETAILS </h2>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Passport Number <span class="red">*</span></label>
                                        <input class="form-control" name="passport_number" id="passport_number" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Place of Issue <span class="red">*</span></label>
                                        <input class="form-control" name="place_of_issue" id="place_of_issue" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Date of Issue <span class="red">*</span></label>
                                        <input class="form-control" name="date_of_issue" id="date_of_issue" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Date of Expiry <span class="red">*</span></label>
                                        <input class="form-control" name="expiry_date" id="expiry_date" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm">Submit</button>
                            </div>
                        </form>
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