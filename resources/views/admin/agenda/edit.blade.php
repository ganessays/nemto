@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Agenda
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list-agenda')}}"><i class="fa fa-dashboard"></i> List Agenda</a></li>
                <li class="active">Agenda</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
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
                <div class="col-sm-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="form-group col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label for="">Agenda title</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="status">Agenda Status <font color="#ff0000">*</font></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status" id="status" data-validation="required" data-validation-error-msg="Status is required" >
                                                <option value="publish" @if($post->status =='publish') selected @endif>Publish</option>
                                                <option value="draft" @if($post->status =='draft') selected @endif>Draft</option>
                                                <option value="trash" @if($post->status =='trash') selected @endif>Trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="">Feature Image</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <img src="{{url('public/uploads/agenda').'/'.$post->image}}" alt="" style="width:50px;">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <label for="">Post Details</label>
                                        <textarea id="editor1" name="detail" rows="100" cols="800"> {{$post->detail}}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""></label>
                                        <button type="update" class="btn btn-primary btn-sm">Update</button>
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