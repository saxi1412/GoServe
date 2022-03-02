<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoServe | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/goserveic.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="../dist/img/goserveic.png" alt="AdminLTE Logo" class="brand-image">
      <img src="../dist/img/serveic.png" alt="AdminLTE Logo" class="brand-text" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
        

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-bicycle"></i>        
                    <p>
                Vehicles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../addnewvehicle" class="nav-link ">
                    <i class="fa-solid fa-plus"></i>
                  <p>Add New Vehicle</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="../twowheeler" class="nav-link ">
                <i class="fa-solid fa-motorcycle"></i>
                <p>Two wheeler</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../fourwheeler" class="nav-link">
                <i class="fa-solid fa-car"></i>
                <p>Four wheeler</p>
              </a>
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-regular fa-user"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../employees" class="nav-link">
                  <i class="fa-solid fa-user-group"></i>
                  <p>Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../customers" class="nav-link">
                  <i class="fa-solid fa-users"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../garage" class="nav-link">
                  <i class="fa-solid fa-user-gear"></i>
                  <p>Garage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../supportstaffs" class="nav-link">
                  <i class="fa-solid fa-user-clock"></i>
                  <p>Support Staffs</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="../bookings" class="nav-link">
              <i class="fa-regular fa-calendar-check"></i>
              <p>
                Bookings 
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../consistentservice" class="nav-link">
                  <i class="fa-solid fa-recycle"></i>
                  <p>Consistent Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../rsaservice" class="nav-link">
                  <i class="fa-solid fa-road"></i>
                  <p>RSA Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../reports" class="nav-link">
              <i class="fa-solid fa-calendar-check"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../complaints" class="nav-link">
              <i class="fa-solid fa-circle-exclamation"></i>
              <p>
                Complaints
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../setting" class="nav-link">
              <i class="fa-solid fa-gear"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="../offers" class="nav-link">
                <i class="fa-solid fa-gift"></i>
              <p>
                Offers
              </p>
            </a>  
          </li>
         
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
            <div class="card">
              <div class="card-header">
                     <h4>Reports data
                       <a href="#" data-bs-toggle="modal" data-bs-target="#AddVehicleModal" class="btn btn-primary float-right btn-sm">
                        Add Report
                       </a>
                     </h4>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                  </tr>
                </thead>
                @foreach ($datas as $item)
             <tr>
               <td>{{ $item->Id }}</td>
               <td>{{ $item->Name }}</td>
             </tr>
           @endforeach
              </table>

         </div>
    <!-- /.content-header -->

    <!-- Main content -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

</body>
</html>
