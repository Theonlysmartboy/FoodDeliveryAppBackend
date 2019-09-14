<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FoodFuzz | Backend Login</title>
        <!--Fav Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('dist/img/icon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('dist/img/icon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('dist/img/icon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dist/img/icon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('dist/img/icon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('dist/img/icon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('dist/img/icon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('dist/img/icon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dist/img/icon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('dist/img/icon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dist/img/icon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('dist/img/icon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/icon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('dist/img/icon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('dist/img/icon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Welcome BACK</h1>
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
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Login Form</li>
                                </ol>
                            </div>
                        </div>                     
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- Horizontal Form -->
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Login Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form class="form-horizontal"method="post" action="{{url('/')}}"> {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer row">
                                            <div class="col-sm-5">
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="submit" class="btn btn-success" value="Sign in">
                                            </div>
                                        </div>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2018-2019 <a href="https://otemainc.com">Otema Technologies</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}"></script>
        <script src="{{asset('js/form_validation.js')}}"></script>
    </body>
</html>