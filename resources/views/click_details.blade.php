@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{$page_name}}
                        <small></small>
                    </h1>
                    <div class="more_info"></div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('click-details')}}"><i
                                class="fas fa-tachometer-alt fa-1x"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">{{$page_name}}</li>
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
                <div class="col-12">
                    <div class="card">

                        <div class="card-header with-border">
                            <div class="card-tools">
                                <div class="menu-right">
                                    <form action="{{route('click-details')}}" id="button_search" method="POST">
                                        {{ method_field('GET') }}
                                        @csrf
                                        <div class="input-group input-group float-left">
                                            <input type="text" name="keyword" class="form-control float-right"
                                                   placeholder="Search " value="">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="float-left">
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-primary grid-refresh" title="Refresh"><i
                                            class="fas fa-sync-alt"></i></span>
                                </div>

                                <div class="menu-left">
                                    <div class="input-group float-right ml-1" style="width: 250px;">
                                        <div class="btn-group">
                                            <select class="form-control float-right" id="order_sort">
                                                <option value="id__desc">ID desc</option>
                                                <option value="id__asc">ID asc</option>
                                                <option value="email__desc">Email desc</option>
                                                <option value="email__asc">Email asc</option>
                                                <option value="created_at__desc">Date desc</option>
                                                <option value="created_at__asc">Date asc</option>
                                            </select>
                                        </div>
                                        <div class="input-group-append">
                                            <button title="Sort" id="button_sort" type="submit"
                                                    class="btn btn-primary"><i
                                                    class="fas fa-sort-amount-down-alt"></i></button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>


                        <!-- /.card-header -->
                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>IP Address</th>
                                        <th>Browser</th>
                                        <th>Device Model</th>
                                        <th>Internet Medium</th>
                                        <th>Mobile No.</th>
                                        <th>Click Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <div style="display: none">
                                        {{$i =  ($data->currentPage()-1)*$items}}
                                        @php
                                        $op_array = array("Others","Banglalink","Grameenphone","Robi/Airtel","Teletalk");
                                        @endphp
                                    </div>
                                    @foreach($data as $click)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$click->ip}}</td>
                                        <div style="display: none">
                                            {{$str = $click->user_agent}}
                                            {{$str = substr($str, 0 ,strpos($str,' '))}}
                                        </div>
                                        <td>{{$str}}</td>
                                        <td>{{$click->model_num}}</td>
                                        <td>{{$op_array[$click->operator]}}</td>
                                        <td>{{$click->msisdn}}</td>
                                        <td>{{$click->date_time}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="block-pagination clearfix m-10">
                                <div class="pagination pagination-sm mr-3 float-right">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        {{ $data->links() }}
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                        </div>


                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
