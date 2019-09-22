@extends('layouts.adminlayout.admin_design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Zones</h1>
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
                        <li class="breadcrumb-item"> <a href="{{url('/admin/zone')}}">Zones</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">                         
            <!-- Center column -->               
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Create Zones form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{url('/admin/zone/create')}}">{{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Zone Name</label>
                                    <input type="text" name="z_name" class="form-control"  required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Drop off point</label>
                                    <input type="text" name="d_point" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>cost</label>
                                    <input type="text" name="z_cost"  required class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection