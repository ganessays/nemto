
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
Details Contact of <b>{{$contact->salutation}}. {{$contact->first_name}} {{$contact->last_name}}</b>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Contact Details</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="registration_details" style="background: #fff;padding: 10px;">
                        <p><b>Full Name: </b>{{$contact->salutation}}. {{$contact->first_name}} {{$contact->last_name}}</p>
                        <p><b>Country: </b>{{$contact->country}}</p>
                        <p><b>E-mail: </b>{{$contact->email}}</p>
                        <p><b>Mobile: </b>{{$contact->contact}}</p>
                        <p><b>Message: </b>{!! $contact->message !!}</p>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

