
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
Details Registration of <b>{{$register->name}}</b>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Registration Listing</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="registration_details" style="background: #fff;padding: 10px;">
                        <p><b>Full Name: </b>{{$register->name}}</p>
                        <p><b>Address: </b>{{$register->address}}</p>
                        <p><b>Country: </b>{{$register->country}}</p>
                        <p><b>E-mail: </b>{{$register->mail}}</p>
                        <p><b>Mobile: </b>{{$register->mobile}}</p>
                        <p><b>Name of Organization: </b>{{$register->org}}</p>
                        <p><b>Position: </b>{{$register->position}}</p>
                        <p><b>Attach File: </b><img src="{{asset('public/uploads/registration/').'/'.$register->image}}" alt="" width="200"></p>
                        <p><b>Message: </b>{!! $register->message !!}</p>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

