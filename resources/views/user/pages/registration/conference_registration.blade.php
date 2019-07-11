

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Conference Delegate Registration</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><b class="form_headline">CONTACT INFORMATION</b></label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">SELECT </option>
                                        <option value=""> MR.</option>
                                        <option value=""> MRS.</option>
                                        <option value=""> MS.</option>
                                        <option value=""> DR.</option>
                                        <option value=""> PROF.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">SUR NAME</label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">FIRST NAME</label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            {{----}}

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>DESIGNATION <span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">COMPANY NAME<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">ADDRESS LINE 1<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">ADDRESS LINE 2<span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">CITY<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">STATE<span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">COUNTRY<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">OFFICE TELEPHONE<span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">MOBILE NUMBER<span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">E-MAL ID<span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">WEBSITE<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">WEBSITE<span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Submit</button>
                        </div>
                    </form>


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