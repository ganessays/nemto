
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Member {{$membership->name}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list_events')}}"><i class="fa fa-calendar-times-o"></i> Event Listing</a></li>
                <li class="active">Edit Member</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> Successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            @if($errors->any())
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        @foreach($errors->all() as $error)
                            <span class="btn btn-danger btn-xs">Error</span> {{$error}}<br>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif


            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit Member</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/list-membership')}}" class="btn btn-primary btn-xs">Event Listing</a> <a href="{{url('admin/create-member')}}" class="btn btn-success btn-xs">Create New Event</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{$membership->name}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="profession" placeholder="Profession">
                                </div>
                                <div class="form-group">
                                    <select name="country" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Country</option>
                                        @foreach($country as $countries)
                                            <option value="{{$countries->id}}">{{$countries->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Full Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile No.">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="mail" placeholder="E-mail Address">
                                </div>
                                <div class="form-group">
                                    <label for="">Attach Membership Form</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('script')

@endsection