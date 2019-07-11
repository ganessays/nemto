

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Exhibitor Registration</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Company Name <span class="red">*</span></label>
                                    <input class="form-control" name="name" id="name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Head of the Organisation (CEO/MD/CMD/Director Etc.)</label>
                                    </div>
                                </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Title <span class="red">*</span></label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="">Mr</option>
                                        <option value="">Mr</option>
                                        <option value="">Mr</option>
                                        <option value="">Mr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">First Name <span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">Last Name <span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Designation <span class="red">*</span></label>
                                    <input class="form-control" name="designation" id="designation" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">ADDRESS Line 1 <span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Address Line 2 <span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">City <span class="red">*</span></label>
                                    <input class="form-control" name="city" id="city" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input class="form-control" name="state" id="state" type="text">
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
                                    <label for="">Telephone</label>
                                    <input class="form-control" name="telephone" id="telephone" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input class="form-control" name="email" id="email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Alternate Email</label>
                                    <input class="form-control" name="alternate_email" id="alternate_email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Website</label>
                                    <input class="form-control" name="website" id="website" type="url">
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