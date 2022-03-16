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
            <a href="/dashboard" class="nav-link active">
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
            <a href="../notifications" class="nav-link">
              <i class="fa-solid fa-bell"></i>
              <p>
                Notifications
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
                <a href="../parts" class="nav-link">
                  <i class="fa-solid fa-clone"></i>
                  <p>Parts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../jobcard" class="nav-link">
                    <i class="fa-solid fa-address-card"></i>
                  <p>Job Card</p>
                </a>
              </li>
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
            <a href="#" class="nav-link">
              <i class="fa-solid fa-store"></i>       
                    <p>
                EV Store
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../products" class="nav-link ">
                  <i class="fa-solid fa-boxes-stacked"></i>
                  <p>Products</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="../request" class="nav-link ">
                <i class="fa-solid fa-code-pull-request"></i>
                <p>Request</p>
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
            <a href="../homesetting" class="nav-link">
              <i class="fa-solid fa-gear"></i>
              <p>
               Home Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-gear"></i>      
                    <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../brands" class="nav-link ">
                  <i class="fa-solid fa-b"></i>
                  <p>Brands</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="../partsetting" class="nav-link ">
                <i class="fa-solid fa-clone"></i>
                <p>Parts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../offers" class="nav-link ">
                <i class="fa-solid fa-gift"></i>
                <p>Offers</p>
              </a>
            </li>
            </ul>
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
            <h1 class="m-0">Home Settings
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row mb-2">
      <div class="col-sm-6">
        <h4 class="pl-3"> Home Settings
        </h4>
      </div><!-- /.col -->
      
    </div><!-- /.row -->
    
    <div class="row mb-2">
      <div class="col-sm-6">
        <h6 class="pl-5"> Banners
        </h6>
      </div><!-- /.col -->
      
    </div><!-- /.row -->
    <div class="card-body">
      <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        
      @method('PUT')
        
      <div class="mb-3">
        <label for="img1" class="form-label">Image1</label>
        <input type="file" class="form-control" id="img1" name="img1" value="{{ $rsaservices->img1 }}" value="{{ old('img1') }}">
        <span class="text-danger">
          @error('img1')
            {{ $message }}
          @enderror
        </span>
      </div>
      <img height="100px" class="m-5"src="{{ $rsaservices->img1 }}"/>  
      <br/> 
      <div class="mb-3">
        <label for="img2" class="form-label">Image2</label>
        <input type="file" class="form-control" id="img2" name="img2" value="{{ $rsaservices->img2 }}" value="{{ old('img2') }}">
        <span class="text-danger">
          @error('img2')
            {{ $message }}
          @enderror
        </span>
      </div>
      <img height="100px" class="m-5"src="{{ $rsaservices->img2 }}"/>  
      <br/> 
      <div class="mb-3">
        <label for="img3" class="form-label">Image3</label>
        <input type="file" class="form-control" id="img3" name="img3" value="{{ $rsaservices->img3 }}" value="{{ old('img3') }}">
        <span class="text-danger">
          @error('img3')
            {{ $message }}
          @enderror
        </span>
      </div>
      <img height="100px" class="m-5"src="{{ $rsaservices->img3 }}"/>  
      <br/> 
      <div class="mb-3">
        <label for="img4" class="form-label">Image4</label>
        <input type="file" class="form-control" id="img4" name="img4" value="{{ $rsaservices->img4 }}" value="{{ old('img4') }}">
        <span class="text-danger">
          @error('img4')
            {{ $message }}
          @enderror
        </span>
      </div>
      <img height="100px" class="m-5"src="{{ $rsaservices->img4 }}"/>  
      <br/> 
      <div class="mb-3">
        <label for="img5" class="form-label">Image5</label>
        <input type="file" class="form-control" id="img5" name="img5" value="{{ $rsaservices->img5 }}" value="{{ old('img5') }}">
        <span class="text-danger">
          @error('img5')
            {{ $message }}
          @enderror
        </span>
      </div>
      <img height="100px" class="m-5"src="{{ $rsaservices->img5 }}"/>  
      <br/> 
      @for ($i = 1; $i < 6; $i++)
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Service{{ $i }}</label>
            <select id="select{{ $i }}" class="form-control select2" style="width: 100%;">
              @if (get_object_vars($rsaservices)['service'.$i]==0)
              <option selected value='0'>--select service--</option>
              @else
              <option value='0'>--select service--</option>
              @endif
              @foreach ($services as $item)
            
               @if (get_object_vars($rsaservices)['service'.$i]==get_object_vars($item)['id'])
               <option selected value='{{ $item->id }}'>{{$item->name}}</option>

               @else
               <option value='{{ $item->id }}'>{{$item->name}}</option>
               @endif
               
           @endforeach
            </select>
          </div>
        </div>
      </div>
      @endfor
      @for ($i = 1; $i < 6; $i++)
      <div style="display: none">
        {{ $y=0}}
       </div>      
                @foreach ($services as $item)
               @if (get_object_vars($rsaservices)['service'.$i]==get_object_vars($item)['id'])
               <div style="display: none">
                {{ $y=$item->id }}
               </div> 
               @endif
           @endforeach
           <input type="hidden" id="service{{ $i }}" name="service{{ $i }}" value="{{ $y }}">
      @endfor
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
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
<script>
   $("#select1").change(function(){
      $("#service1").val($('#select1').find(":selected").val());
    });
    $("#select2").change(function(){
      $("#service2").val($('#select2').find(":selected").val());
    });
    $("#select3").change(function(){
      $("#service3").val($('#select3').find(":selected").val());
    });
    $("#select4").change(function(){
      $("#service4").val($('#select4').find(":selected").val());
    });
    $("#select5").change(function(){
      $("#service5").val($('#select5').find(":selected").val());
    });
            
</script>

</body>
</html>
