@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="" aria-hidden="true"></i>
                        <small></small>
                    </h1>
                    <div class="more_info"></div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i
                                class="fas fa-tachometer-alt fa-1x"></i>Dashboard</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fas fa-mouse"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Click</span>
                            <span class="info-box-number">{{ $total_click }}</span>
                            <a href="{{ route('click-details') }}" class="small-box-footer">
                                More&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fas fa-hand-pointer"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Todays Click</span>
                            <span class="info-box-number">{{ $todays_click }}</span>
                            <a href="{{route('day-wise-click-details',date("Y-m-d")) }}" class="small-box-footer">
                                More&nbsp;
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
