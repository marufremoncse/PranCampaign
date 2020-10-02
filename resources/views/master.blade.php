<!DOCTYPE html>
<html>
<head>

@include('header')

</head>

<body class="hold-transition layout-navbar-fixed layout-fixed accent-lightblue">
    <div class="wrapper">

        @include('top')

        @include('navigation')

        @yield('content')

        @include('bottom')

    </div>

    @include('footer')

</body>
</html>
