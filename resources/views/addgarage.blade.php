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
    <ul class="navbar-nav ml-auto">
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="dashboard" class="brand-link">
      <img src="../dist/img/goserveic.png" alt="AdminLTE Logo" class="brand-image">
      <img src="../dist/img/serveic.png" alt="AdminLTE Logo" class="brand-text" >
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
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
        </div>  
    </aside>
    
    
    

</div>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid mt-5" >
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h4>Garage Data</h4>
            </div>
          </div>
            <div class="card-body">

                <form action="" method="POST">
                    @csrf
                    
                  
                    <div class="mb-3">
                      <label for="garage_name" class="form-label">Garage Name</label>
                      <input type="text" class="form-control" id="garage_name" name="garage_name" value="{{ old('garage_name') }}">
                      <span class="text-danger">
                        @error('garage_name')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="garage_number" class="form-label">Garage Number</label>
                      <input type="number" class="form-control" id="garage_number" name="garage_number"  value="{{ old('garage_number') }}">
                      <span class="text-danger">
                        @error('garage_number')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="garage_email" class="form-label">Garage Email Id</label>
                      <input type="text" class="form-control" id="garage_email" name="garage_email"  value="{{ old('garage_email') }}">
                      <span class="text-danger">
                        @error('garage_email')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="garage_address" class="form-label">Garage Address</label>
                      <input type="text" class="form-control" id="garage_address" name="garage_address"  value="{{ old('garage_address') }}">
                      <span class="text-danger">
                        @error('garage_address')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="num_of_employees" class="form-label">Number Of Employees</label>
                      <input type="number" class="form-control" id="num_of_employees" name="num_of_employees"  value="{{ old('num_of_employees') }}">
                      <span class="text-danger">
                        @error('num_of_employees')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="gst_no" class="form-label">GST No</label>
                      <input type="text" class="form-control" id="gst_no" name="gst_no"  value="{{ old('gst_no') }}">
                      <span class="text-danger">
                        @error('gst_no')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Owner Name</label>
                      <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}">
                      <span class="text-danger">
                        @error('name')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Owner Number</label>
                      <input type="number" class="form-control" id="number" name="number"  value="{{ old('number') }}">
                      <span class="text-danger">
                        @error('number')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Owner Email Id</label>
                      <input type="text" class="form-control" id="email" name="email"  value="{{ old('email') }}">
                      <span class="text-danger">
                        @error('email')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="address" class="form-label">Owner Address</label>
                      <input type="text" class="form-control" id="address" name="address"  value="{{ old('address') }}">
                      <span class="text-danger">
                        @error('address')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password"  value="{{ old('password') }}">
                      <span class="text-danger">
                        @error('password')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="pan_card_no" class="form-label">Pan Card No</label>
                      <input type="text" class="form-control" id="pan_card_no" name="pan_card_no"  value="{{ old('pan_card_no') }}">
                      <span class="text-danger">
                        @error('pan_card_no')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                   
                    <div class="mb-3">
                      <label for="service_type" class="form-label">Servie Type(According To Vehicle)</label>
                      <input type="text" class="form-control" id="service_type" name="service_type"  value="{{ old('service_type') }}">
                      <span class="text-danger">
                        @error('service_type')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<script>
    $("#fuel_type").change(function(){
      $("#ftype").val($('#fuel_type').find(":selected").val());
    });
</script>

</body>
</html>
