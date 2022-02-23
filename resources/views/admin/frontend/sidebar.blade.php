<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library --> 
                 <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}" class="nav-link {{ Request::is('admin/dashboard') ? 'active': '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard </p>
                    </a>
                </li>              
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"> 
                        <li class="nav-item">
                            <a href="{{ url('admin/page') }}" class="nav-link {{ Request::is('admin/page') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   All Page
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/page/add-page') }}" class="nav-link {{ Request::is('admin/page/add-page') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   Add Page
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"> 
                        <li class="nav-item">
                            <a href="{{ url('admin/category') }}" class="nav-link {{ Request::is('admin/category') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   All Categories
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/category/add-category') }}" class="nav-link {{ Request::is('admin/category/add-category') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   Add Category
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Blocks
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"> 
                        <li class="nav-item">
                            <a href="{{ url('admin/block') }}" class="nav-link {{ Request::is('admin/block') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Block List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/block/add-block') }}" class="nav-link {{ Request::is('admin/block/add-block') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   Add Block
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Post
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"> 
                        <li class="nav-item">
                            <a href="{{ url('admin/post') }}" class="nav-link {{ Request::is('admin/post') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Post List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/post/add-post') }}" class="nav-link {{ Request::is('admin/post/add-post') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                   Add Post
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/imagegallery') }}" class="nav-link {{ Request::is('admin/imagegallery') ? 'active': '' }} ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Image Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/video') }}" class="nav-link {{ Request::is('admin/video') ? 'active': '' }} ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Videos
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{url('admin/users')}}" class="nav-link {{ Request::is('admin/users') ? 'active': '' }} ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Users </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/settings')}}" class="nav-link {{ Request::is('admin/settings') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/role')}}" class="nav-link {{ Request::is('admin/role') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/login')}}" class="nav-link {{ Request::is('admin/login') ? 'active': '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
