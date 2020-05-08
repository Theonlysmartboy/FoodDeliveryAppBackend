@extends('layouts.vendorlayout.vendor_design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>orders</h1>
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block" id="autoClose" >
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <em class="text-warning">{!!session('flash_message_error')!!}</em>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block" id="autoClose" >
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <em class="text-primary">{!!session('flash_message_success')!!}</em>
                    </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/vendor/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/vendor/orders')}}">orders</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('vendor/orders/new') }}" class="btn btn-primary btn-sm">New Orders</a>|</h3>
                        <h3 class="card-title"><a href="{{ url('vendor/orders/confirmed') }}" class="btn btn-warning btn-sm">Confirmed Orders</a>|</h3>
                        <h3 class="card-title"><a href="{{ url('vendor/orders/dispatched') }}" class="btn btn-info btn-sm">Dispatched Orders</a>|</h3>
                        <h3 class="card-title"><a href="{{ url('vendor/orders/delivered') }}" class="btn btn-success btn-sm">Delivered Orders</a>|</h3>
                        <h3 class="card-title"><a href="{{ url('vendor/orders/canceled') }}" class="btn btn-danger btn-sm">Cancelled Orders</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ORDER ID</th>
                                    <th>CLIENT</th>
                                    <th>PRODUCT</th>
                                    <th>TELEPHONE</th>
                                    <th>AMOUNT</th>
                                    <th>DELIVERY LOCATION</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="text-center">{{ $order->orderid }}</td>
                                    <td class="text-center">{{$order->client}}</td>
                                    <td class="text-center">{{ $order->product }}</td>
                                    <td class="text-center">{{$order->telephone}}</td>
                                    <td class="text-center">KSH {{ $order->amount }} /=</td>
                                    <td class="text-center">{{$order->longitude}} {{$order->latitude}} {{$order->deliveryloc}} </td>
                                    <td><button data-toggle="modal" data-target="#orderModal{{ $order->id }}" class="btn btn-primary btn-sm">View <i class="icon icon-eye-open"></i></button> |
                                        @if($order->status==1)
                                        <a href="{{url('vendor/order/edit/confirm/'.$order->id)}}" class="btn btn-warning btn-sm">Confirm <i class="icon icon-edit"></i></a> | 
                                        <a href="{{url('vendor/order/edit/cancel/'.$order->id)}}" class="btn btn-danger btn-sm">Cancel <i class="icon icon-edit"></i></a> |
                                        @elseif($order->status==2)
                                        <a href="{{url('vendor/order/edit/dispatch/'.$order->id)}}" class="btn btn-info btn-sm">Dispatch <i class="icon icon-edit"></i></a> |
                                        <a href="{{url('vendor/order/edit/cancel/'.$order->id)}}" class="btn btn-danger btn-sm">Cancel <i class="icon icon-edit"></i></a> |
                                        @elseif($order->status==3)
                                        <a href="{{url('vendor/order/edit/deliver/'.$order->id)}}" class="btn btn-success btn-sm">Deliver <i class="icon icon-edit"></i></a> |
                                        <a href="{{url('vendor/order/edit/cancel/'.$order->id)}}" class="btn btn-danger btn-sm">Cancel <i class="icon icon-edit"></i></a> |
                                        @elseif($order->status==4)
                                        <a href="{{url('vendor/order/edit/delete/'.$order->id)}}" class="btn btn-danger btn-sm">Cancel <i class="icon icon-edit"></i></a> |
                                        @else
                                        <a href="{{url('vendor/order/edit/confirm/'.$order->id)}}" class="btn btn-warning btn-sm">Confirm <i class="icon icon-edit"></i></a> | 
                                        <a href="{{url('vendor/order/edit/delete/'.$order->id)}}" class="btn btn-danger btn-sm">Delete <i class="icon icon-edit"></i></a> |
                                        @endif
                                    </td>
                                </tr>
                            <div class="modal fade" id="orderModal{{ $order->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Name: {{ $order->client }}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Description: {{ $order->product }}</p>
                                            <p class="text-center">Cost: {{$order->amount}}</p>
                                            <p class="text-center">Uploaded on: {{$order->created_at}}</p>
                                            <p class="text-center">Updated on: {{$order->updated_at}}</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ORDER ID</th>
                                    <th>CLIENT</th>
                                    <th>PRODUCT</th>
                                    <th>TELEPHONE</th>
                                    <th>AMOUNT</th>
                                    <th>DELIVERY LOCATION</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection