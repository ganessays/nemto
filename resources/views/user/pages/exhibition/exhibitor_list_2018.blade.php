

@extends('user.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>EXHIBITOR LIST - Nepal Medical Tourism Expo - 2018</h1>
                        <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #9473a0;">
                            <tbody><tr>
                                <td valign="middle" align="left" style="background-color:#9473a0;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Exhibitor Name</strong></td>
                                <td valign="middle" align="left" style="background-color:#9473a0;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Hall Number</strong></td>
                                <td valign="middle" align="left" style="background-color:#9473a0;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Stall Number</strong></td>
                                <td valign="middle" align="left" style="background-color:#9473a0;font-size:16px;padding-left:10px;height:35px;"><strong style="color:#fff;">Website</strong></td>
                            </tr>
                            <tr style="background-color:#ecf5f6;">
                                <td valign="middle" style="height:35px;">
                                    <div class="main_txt" style="padding-left:10px;">Tradeindia</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">2</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">79</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt"><a href="" target="_blank"></a></div>
                                </td>
                            </tr>

                            <tr style="background-color:#fff5f6;">
                                <td valign="middle" style="height:35px;">
                                    <div class="main_txt" style="padding-left:10px;">W Pratiksha Hospital</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">2</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">90</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt"><a href="" target="_blank"></a></div>
                                </td>
                            </tr>

                            <tr style="background-color:#ecf5f6;">
                                <td valign="middle" style="height:35px;">
                                    <div class="main_txt" style="padding-left:10px;">Wockhardt Hospitals Ltd</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">2</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt">59</div>
                                </td>
                                <td valign="middle" style="border-left: 1px solid #9473a0;padding-left:10px;height:35px;">
                                    <div class="main_txt"><a href="" target="_blank"></a></div>
                                </td>
                            </tr>
                            </tbody></table>
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