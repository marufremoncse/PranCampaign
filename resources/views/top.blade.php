<!-- Navbar -->
<nav class="main-header navbar navbar-expand  navbar-dark navbar-lightblue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="nav-item dropdown user-menu">

            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="{{asset('/data/avatar/user.jpg')}}" class="user-image" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <div class="text-center">
                    <img src="{{asset('data/avatar/user.jpg')}}" class="img-circle" alt="Admin">
                    <div>
                        {{Auth::User()->name}}<br>
                        <small>Pran Frooto</small>
                    </div>
                </div>
                <!-- Menu Footer-->
                <div class="user-footer">
                    <div class="float-right">
                        <a href="logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </li>


    </ul>
</nav>
<!-- /.navbar -->
