
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
List of Membership
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Membership Listing</li>
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
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of Membership</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/create-member')}}" class="btn btn-primary btn-xs">Create New Member</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Full Name</th>
                                    <th>Profession</th>
                                    <th>Country</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($membership as $key=>$member)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->profession}}</td>
                                        <td>{{$member->countries->name}}</td>
                                        <td>{{$member->address}}</td>
                                        <td>{{$member->mobile}}</td>
                                        <td>{{$member->mail}}</td>
                                        <td>
                                            @if($member->status == 'active')
                                                <form action="{{url('admin/list-membership/'.$member->id.'/updateMember')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="0" name="status">
                                                    <button type="submit" class="btn btn-success btn-xs" title="Click here to Published">Published</button>
                                                </form>
                                            @else
                                                <form action="{{url('admin/list-membership/'.$member->id.'/updateMember')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="1" name="status">
                                                    <button type="submit" class="btn btn-danger btn-xs" title="Click here to Draft">Draft</button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/list-membership/detail=').$member->id.'/'.$slugs= str_slug($member->name)}}" class="btn btn-primary btn-xs"><i class="fa fa-angle-down"></i></a>
                                            <a href="{{url('admin/list-membership/edit=').$member->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection