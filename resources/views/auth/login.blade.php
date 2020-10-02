<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./images/icon.png" type="image/png" sizes="16x16">
    <title>Momagic | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/LTE/plugins/fontawesome-free/css/all.min.css')}}./admin/LTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/admin/LTE/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin/LTE/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/LTE/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{asset('admin/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/LTE/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <style type="text/css">
        .container-login100 {
            background-image: url({{asset('images/bg-system.jpg')}});
        }
    </style>

</head>
<body class="hold-transition login-page">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 main-login">
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf
                <div class="col-md-12">
                    <img src="{{asset('data/logo/mmbd.png')}}" alt="logo" class="logo"> &nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="{{asset('data/logo/frooto_logo.png')}}" alt="logo" class="logo">
                </div>
                <div class="login-title-des col-md-12 p-b-41">
                    <a><b>Campaign Info System</b></a>
                </div>
                <div class="col-md-12 form-group has-feedback 1">
                    <div class="wrap-input100 validate-input form-group ">
                        <input class="input100 form-control  @error('email') is-invalid @enderror" type="email" placeholder="Email Address"
                               name="email" value="{{ old('email') }}" required autofocus">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                <i class="fa fa-user"></i>
              </span>
                    </div>
                </div>
                <div class="col-md-12 form-group has-feedback 1">
                    <div class="wrap-input100 validate-input form-group ">
                        <input class="input100 form-control @error('password') is-invalid @enderror" type="password" placeholder="Password"
                               name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                <i class="fa fa-lock"></i>
              </span>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container-login-btn">
                        <button class="login-btn" type="submit">
                            Login
                        </button>
                    </div>


                    <div class="checkbox input text-center remember">
                        <label>
                            <input type="checkbox" name="remember"/>
                            <b>Remember me</b>
                        </label>
                    </div>

                </div>
            </form>
        </div>
    </div>


</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/LTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/LTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{asset('admin/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- JQVMap -->
<script src="{{asset('admin/LTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- daterangepicker -->

<!-- Tempusdominus Bootstrap 4 -->

<!-- Summernote -->
<script src="{{asset('admin/LTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>


<script src="{{asset('admin/LTE/plugins/iCheck/icheck.min.js')}}"></script>

<script>
    $(function () {
        $('.input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
