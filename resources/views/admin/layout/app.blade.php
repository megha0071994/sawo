<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ get_site_settings("site_name") }} | {{ $page_title }}</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link href="{{ url('/public/admin-assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/summernote/summernote-bs4.min.css">
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="{{ url('/') }}/public/admin-assets/custom/custom.css">
	<script>
		var url = '{{ url("/") }}';
	</script>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse text-sm">
      <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="{{url('public/admin-assets/dist/img/logo.png')}}" width="150" alt="AdminLTELogo">
      </div>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="javascript:;">
               <i class="far fa-bell"></i>
               <span class="badge badge-dark navbar-badge">15</span>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item dropdown-footer">See All Notifications</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="javascript:;" role="button">
               <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="javascript:;">
               <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="javascript:;" class="brand-link">
         <img src="{{ url('public/admin-assets/dist/img/logo.png') }}" alt='{{get_site_settings("site_name")}}' class="brand-image img-circle elevation-3 bg-white ml-0" style="opacity: .8">
		 <br/>
         <span class="brand-text font-weight-light d-none">{{get_site_settings("site_name")}}</span>
         </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="{{ url('public/admin-assets/dist/img/logo.png') }}" class="img-circle elevation-2 d-none" alt="admin name">
               </div>
               <div class="info">
                  <a href="javascript:;" class="d-block">Admin Name</a>
               </div>
            </div>
            <!-- SidebarSearch Form -->
            <div class="form-inline">
               <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                     <button class="btn btn-sidebar">
                     <i class="fas fa-search fa-fw"></i>
                     </button>
                  </div>
               </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  <li class="nav-item">
                     <a href="" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('admin/products/category') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Manage Category </p>
                     </a>
                  </li>
                  <li class="nav-item active">
                     <a href="javascript:;" class="nav-link active">
						<i class="nav-icon fas fa-th-large"></i>
                        <p>
                           category
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="" class="nav-link acitve">
                              <i class="far fa-circle nav-icon"></i>
                              <p>category</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('admin/vehicle') }}" class="nav-link">
                        <i class="fa fa-truck nav-icon"></i>
                        <p>{{ __('lang.manageVehicle') }} </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('admin/support') }}" class="nav-link">
                        <i class="fa fa-headphones nav-icon"></i>
                        <p>{{ __('lang.ContactRequest') }} </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('admin/setting') }}" class="nav-link">
                        <i class="fa fa-cogs nav-icon"></i>
                        <p>{{ __('lang.settings') }} </p>
                     </a>
                  </li>





				  <li class="nav-item">
                     <a href="" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p> Logout </p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1 class="m-0">{{ $page_title2 }}</h1>
               </div>
               <!-- /.col -->
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="{{ url('/') }}/public/">Home</a></li>
                     <li class="breadcrumb-item active">{{ $page_title }}</li>
                  </ol>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
	  
	  @yield('content')
	  
	  </div>
		<footer class="main-footer text-sm">
		   <strong>
			  Copyright &copy; {{ date('Y') }} <!-- <a href="https://adminlte.io">AdminLTE.io</a>.--> 
		   </strong>
		   All rights reserved.
		   <div class="float-right d-none d-sm-inline-block">
			  <!--<b>Version</b> 3.1.0-->
		   </div>
		</footer>
	</div>
	<!-- ./wrapper -->
	<!-- jQuery -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	   $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Sparkline -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{ url('/') }}/public/admin-assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/moment/moment.min.js"></script>
	<script src="{{ url('/') }}/public/admin-assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="{{ url('/') }}/public/admin-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="{{ url('/') }}/public/admin-assets/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ url('/') }}/public/admin-assets/dist/js/demo.js"></script>
	
	<script src="{{ url('/') }}/public/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
	
   <script src="{{ url('/public/admin-assets/plugins/toastr/jquery.toaster.js') }}"></script>
   <script src="{{ url('/public/admin-assets/plugins/toastr/toastr.min.js') }}"></script>
   <script src="{{ url('/public/admin-assets/custom/js/custom.js') }}"></script>
   <?php
	// if($this->session->flashdata('success')):
	?>
	<!-- <script>
	toastr.success("<?php // echo $this->session->flashdata('success'); ?>");
	</script> -->
	<?php
	// endif;
	?>
	<?php
	// if($this->session->flashdata('error')):
	?>
	<!-- <script>
	toastr.error("<?php // echo $this->session->flashdata('error'); ?>");
	</script> -->
	<?php
	// endif;
	?>
	</body>
</html>