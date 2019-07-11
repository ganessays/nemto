@section('aside')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('public/avatar04.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="treeview  <?php if(request()->segment('2') =='list-registration' || request()->segment('2') =='create-membership'|| request()->segment('2') =='list-contact-us'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users text-aqua"></i> <span>Registration</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-registration'){ echo 'active' ;} ?>"><a href="{{url('admin/list-registration')}}"><i class="fa fa-circle-o"></i> List Registration</a></li>
                        <li class=" <?php if(request()->segment('2') =='list-membership'){ echo 'active' ;} ?>"><a href="{{url('admin/list-membership')}}"><i class="fa fa-circle-o"></i> List Membership</a></li>
                        <li class=" <?php if(request()->segment('2') =='list-contact-us'){ echo 'active' ;} ?>"><a href="{{url('admin/list-contact-us')}}"><i class="fa fa-circle-o"></i> List Contact Us</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-agenda' || request()->segment('2') =='create-agenda'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>The Agenda</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-agenda'){ echo 'active' ;} ?>"><a href="{{url('admin/list-agenda')}}"><i class="fa fa-circle-o"></i> Agenda Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-agenda'){ echo 'active' ;} ?>"><a href="{{url('admin/create-agenda')}}"><i class="fa fa-circle-o"></i> Create New Agenda</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if(request()->segment('2') =='countries' || request()->segment('2') =='states'
                    || request()->segment('2') =='district'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-users"></i> <span>Location Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='countries'){ echo 'active' ;} ?>"><a href="{{url('superadmin/countries')}}"><i class="fa fa-circle-o"></i>Countries</a></li>
                        <li class=" <?php if(request()->segment('2') =='states'){ echo 'active' ;} ?>"><a href="{{url('superadmin/states')}}"><i class="fa fa-circle-o"></i>States</a></li>
                        <li class=" <?php if(request()->segment('2') =='district'){ echo 'active' ;} ?>"><a href="{{url('superadmin/district')}}"><i class="fa fa-circle-o"></i>district</a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
@endsection