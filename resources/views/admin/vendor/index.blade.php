@extends('layouts.adminlayout.admin_design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vendors</h1>
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
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item">Vendors</li>
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
                        <h3 class="card-title"><a href="{{url('/admin/vendor/create')}}" class="btn btn-primary btn-sm">Add New</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Restaurant Name</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Owner</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendors as $vendor)
                                <tr>
                                    <td class="text-center">{{ $vendor->id }}</td>
                                    <td class="text-center">{{$vendor->r_name}}</td>
                                    <td class="text-center">{{ $vendor->adress }}</td>
                                    <td class="text-center">{{ $vendor->telephone }}</td>
                                    <td class="text-center">{{ $vendor->owner }}</td>
                                    <td class="text-center"><img src="{{asset('uploads/vendor/'.$vendor->logo)}}"></td>
                                    <td><button data-toggle="modal" data-target="#vendorModal{{ $vendor->id }}" class="btn btn-success btn-sm">View <i class="icon icon-eye-open"></i></button> | 
                                        <a href="{{url('admin/vendor/edit/'.$vendor->id)}}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                                        <a rel="{{$vendor->id}}" rel1="delete" href="javascript:" class="btn btn-danger btn-sm deleteVendor">Delete <i class="icon icon-trash"></i></a></td>
                                </tr>
                            <div class="modal fade" id="vendorModal{{ $vendor->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Name: {{ $vendor->r_name }}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Address: {{ $vendor->adress }}</p>
                                            <p class="text-center">TELEPHONE: {{ $vendor->telephone }}</p>
                                            <p class="text-center bg-primary">Owner/ Representative: {{$vendor->owner}}</p>
                                            <p class="text-center">OWNER EMAIL: {{ $vendor->email}}</p>
                                            <p class="text-center">DATE CREATED: {{$vendor->created_at}}</p>
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
                                    <th>ID</th>
                                    <th>Restaurant Name</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Owner</th>
                                    <th>Logo</th>
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