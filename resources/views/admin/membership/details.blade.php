
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
Details Registration of <b>{{$membership->name}}</b>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Registration Listing</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row" style="background: #fff; padding: 10px;">
                <div class="registration_details">
                <div class="col-md-6">
                    <p><b>Full Name: </b>{{$membership->name}}</p>
                    <p><b>Date of Birth: </b>{{$membership->dob}}</p>
                    <p><b>Profession: </b>{{$membership->profession}}</p>
                    <p><b>Country: </b>{{$membership->country}}</p>
                    <p><b>Mobile: </b>{{$membership->mobile}}</p>
                    <p><b>Address: </b>{{$membership->address}}</p>
                    <p><b>Mobile: </b>{{$membership->mobile}}</p>
                    <p><b>E-mail: </b>{{$membership->email}}</p>
                    <p><b>Message: </b>{!! $membership->message !!}</p>
                </div>
                    <div class="col-md-6">
                        <p><b>Attach File: </b><img src="{{asset('public/uploads/membership/').'/'.$membership->image}}" alt="" width="200"></p>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

