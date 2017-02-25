<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">QUẢN LÝ</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard text-success"></i><span>Dashboard</span></a></li>
            <li><a href="{{ route('admin.settings') }}"><i class="fa fa-gears text-success"></i><span>Website Settings</span></a></li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-newspaper-o text-success"></i>
                <span>Bài viết</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.posts.create') }}">Thêm bài viết</a></li>
                    <li><a href="{{ route('admin.posts.index') }}">Danh sách bài viết</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o text-success"></i>
                    <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.categories.create') }}">Thêm category</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o text-success"></i>
                    <span>Roles</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.roles.create') }}">New Roles</a></li>
                    <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o text-success"></i>
                    <span>Admission</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.admissions.index') }}">Danh sách xét tuyển</a></li>
                </ul>
            </li>
            <li class="treeview {!! Route::is('admin/users/*') ? 'active' : '' !!}">
                <a href="#">
                    <i class="fa fa-newspaper-o text-success"></i>
                    <span>User Management</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! Request::is('admin/users/create') ? 'active' : '' !!}">
                        <a href="{{ route('admin.users.create') }}">Add User</a>
                    </li>
                    <li class="{!! Request::is('admin/users') ? 'active' : '' !!}">
                        <a href="{{ route('admin.users.index') }}">User Management</a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>