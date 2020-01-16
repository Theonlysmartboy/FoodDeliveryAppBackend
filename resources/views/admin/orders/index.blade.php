@extends('layouts.adminlayout.admin_design')
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
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ORDER ID</th>
                                    <th>CLIENT</th>
                                    <th>TELEPHONE</th>
                                    <th>SELLER</th>
                                    <th>PRODUCT</th>
                                    <th>QUANTITY</th>
                                    <th>AMOUNT</th>
                                    <th>DELIVERY LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="text-center">{{ $order->orderid }}</td>
                                    <td class="text-center">{{$order->client}}</td>
                                    <td class="text-center">{{$order->telephone}}</td>
                                    <td class="text-center">{{$order->seller}}</td>
                                    <td class="text-center">{{ $order->product }}</td>
                                    <td class="text-center">{{$order->quantity}}</td>
                                    <td class="text-center">KSH {{ $order->amount }} /=</td>
                                    <td class="text-center">{{$order->longitude}} {{$order->latitude}} {{$order->deliveryloc}} </td>
                                    <td><button data-toggle="modal" data-target="#orderModal{{ $order->id }}" class="btn btn-success btn-sm">View <i class="icon icon-eye-open"></i></button></td>
                                </tr>
                            <div class="modal fade" id="orderModal{{ $order->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Order ID: {{ $order->orderid }}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">CLIENT NAME: {{$order->client}}</p>
                                            <p class="text-center">CLIENT TELEPHONE: {{$order->telephone}}</p>
                                            <p class="text-center">PRODUCT: {{ $order->product }}</p>
                                            <p class="text-center">SOLD BY: {{$order->seller}}</p>
                                            <p class="text-center">QUANTITY: {{$order->quantity}}</p>
                                            <p class="text-center">COST: {{$order->amount}}</p>
                                            <p class="text-center">DELIVERY LOCATION: {{$order->longitude}} {{$order->latitude}} {{$order->deliveryloc}}</p>
                                            <p class="text-center">CREATED ON: {{$order->created_at}}</p>
                                            <p class="text-center">UPDATED ON: {{$order->updated_at}}</p>
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
                                    <th>TELEPHONE</th>
                                    <th>SELLER</th>
                                    <th>PRODUCT</th>
                                    <th>QUANTITY</th>
                                    <th>AMOUNT</th>
                                    <th>DELIVERY LOCATION</th>
                                    <th>ACTION</th>
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