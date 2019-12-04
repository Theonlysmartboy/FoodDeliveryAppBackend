@extends('layouts.vendorlayout.vendor_design')
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
                        <li class="breadcrumb-item"><a href="{{url('/vendor/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{url('/vendor/products')}}">Products</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Products form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{url('/vendor/product/edit/'.$productDetails->id)}}">{{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="p_name" class="form-control"  required value="{{$productDetails->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="p_desc" class="form-control" required value="{{$productDetails->descr}}">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <img src="{{asset('uploads/product/'.$productDetails->image)}}"/>
                                    <div class="custom-file">
                                        <input type="file" name="p_image" class="custom-file-input" id="p_image">
                                         <input type="hidden" name="current_image" value="{{$productDetails->image}}"
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="p_category"  required class="form-control">
                                        <?php echo $categories_dropdown ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Cost</label>
                                    <input type="text" name="p_cost"  required class="form-control" value="{{$productDetails->cost}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success btn-sm" value="Save">
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