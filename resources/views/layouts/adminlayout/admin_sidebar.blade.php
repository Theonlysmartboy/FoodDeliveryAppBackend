<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/logo_1.png')}}" alt="Food Fuzz Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Food Fuzz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/user/')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/vendor')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Restaurants</p>
                            </a>
                        </li>
                    </ul>
                </li>          
                <li class="nav-header">Zone/Delivery fee management</li>
                <li class="nav-item">
                    <a href="{{url('admin/zone')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Zones
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            
                        </p>
                    </a>
                </li>                         
                <li class="nav-header">ORDERS</li>
                <li class="nav-item">
                    <a href="{{url('admin/orders/new')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>New Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/orders/canceled')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Bounced Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/orders/confirmed')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Confirmed Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/orders/delivered')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Delivered Orders</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>