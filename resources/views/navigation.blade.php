<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-pink elevation-4 sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="/" class="brand-link navbar-secondary">
        Frooto
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sidebar-lightblue">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('data/avatar/user.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::User()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu">

                <li class="nav-link header">
                    FROOTO <p class="sub-header"> - ADMIN</p>
                </li>
                <li class="nav-item {{ Request::is('dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon  fas fa-tachometer-alt "></i>
                        <p>
                            Dashboard
                        </p>
                    </a>


                </li>
                <li class="nav-item has-treeview {{ Request::is('click*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-chart-bar"></i>
                        <p>
                            Report Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('day-wise-click')}}" class="nav-link">
                                <i class="fas fa-file nav-icon"></i>
                                <p>Day Wise Click</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('click-details')}}" class="nav-link">
                                <i class="fas fa-asterisk nav-icon"></i>
                                <p>Click Details</p>
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
