

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Venue Details</h1>
                        <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #14afa9;">
                            <tbody><tr>
                                <td valign="middle" colspan="4" align="left" style="background-color:#14afa9;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Exhibition</strong></td>
                            </tr>
                            <tr>
                                <td valign="middle" style="height:35px;">
                                    <div class="main_txt" style="text-align:justify;padding-left:10px;">Standard Booth</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #14afa9;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">9 Sq.M.</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #14afa9;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">INR 1,50,000/-</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #14afa9;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">US$ 3000</div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" colspan="4" style="border-top: 1px solid #14afa9;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">

                                            <li>(Fascia Name, two chairs, one table, carpet, 3 spot lights, dustbin &amp; 15 amp socket)</li>
                                            <li>Taxes as applicable</li>

                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <br>
                        <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #006863;">
                            <tbody><tr>
                                <td valign="middle" colspan="3" align="left" style="background-color:#006863;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Conference</strong></td>
                            </tr>
                            <tr>
                                <td valign="middle" style="height:35px;">
                                    <div class="main_txt" style="text-align:justify;padding-left:10px;">Delegate Fee</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #006863;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">INR 10,000/- Per Person</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #006863;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">US$ 200</div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" colspan="3" style="border-top: 1px solid #006863;padding-left:10px;height:35px;">
                                    <div class="main_txt" style="text-align:justify;">
                                        <li>Taxes as applicable</li>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <br>
                        <div class="nemto_contact_us">
                            <h2>For more information please contact:</h2>
                            <p><b> Putalisadak, Kathmandu, Nepal</b></p>
                            <p><i class="fa fa-phone"></i> +977-1-4223473</p>
                            <p><i class="fa fa-mobile"></i> +977-9860555163, 9851206644,9860832126</p>
                            <p> <i class="fa fa-envelope"></i> info@nemto.org</p>
                            <div class="contact_us">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28258.80718500621!2d85.30210885775823!3d27.70645015485687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1971dab896fb%3A0x90e421e7a8cf27ac!2sNepal+Medical+Tourism+Organization!5e0!3m2!1sen!2snp!4v1562461823860!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
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