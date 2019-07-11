

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Foreign Delegate Registration</h1>
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h2>DELEGATE GENERAL INFORMATION</h2>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="">DID YOU ALSO REGISTER FOR NEMTO 2018 <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">-SELECT-</option>
                                        <option value=""> Yes</option>
                                        <option value=""> No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="">DID YOU ATTEND NEMTO 2018 <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">-SELECT-</option>
                                        <option value=""> Yes</option>
                                        <option value=""> No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="">GENDER <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">-Select Gender-</option>
                                        <option value=""> Male</option>
                                        <option value=""> Female</option>
                                        <option value=""> Others</option>
                                    </select>
                                </div>
                            </div>
                            {{----}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h2>Full Name (As in Passport)</h2>
                                </div>
                            </div>
                           <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Title <span class="red">*</span></label>
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
                                    <label for="">SUR NAME <span class="red">*</span></label>
                                    <input class="form-control" name="sur_name" id="sur_name" type="text">
                                </div>
                            </div>
                           <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">FIRST NAME <span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            {{----}}

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>YOU HAVE BEEN RECOMMENDED TO FICCI FOR NEMTO 2019 BY <span class="red">*</span></label>
                                    <select name="" id="" class="form-control">Select
                                        <option value="">Select</option>
                                        <option value="">Demo1</option>
                                        <option value="">Demo2</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>OCCUPATION <span class="red">*</span></label>
                                    <select class="form-control validate[required]" style="text-transform:uppercase;" name="occupation" id="occupation" onchange="seloccupation();">
                                        <option value="" selected=""> - Select Occupation - </option>
                                        <option value="1">CEO of leading hospital which refer their patients to foreign countries for treatment</option>
                                        <option value="2">Head of premier government hospital which recommends and approves patients travel to foreign country for medical treatment </option>
                                        <option value="3">President/  Secretary of largest medical association</option>
                                        <option value="4">Senior official from Health Ministry (who approve cases for medical travel)</option>
                                        <option value="5">Senior official from medical insurance company</option>
                                        <option value="6">Medical travel facilitator</option>
                                        <option value="7">Medical trade journalist</option>
                                        <option value="8">Medical Devices Dealer/Importer</option>
                                        <option value="9">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">ORGANISATION NAME <span class="red">*</span></label>
                                    <input class="form-control" name="first_name" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">DESIGNATION<span class="red">*</span></label>
                                    <input class="form-control" name="last_name" id="last_name" type="text">
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">YOUR DETAILED PROFILE <span class="red">*</span></label>
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
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