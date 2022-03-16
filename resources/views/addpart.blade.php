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
              <h4>Add parts</h4>
            </div>
          </div>
            <div class="card-body">

                <form action="" method="POST">
                    @csrf
                    
                  
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                      <span class="text-danger">
                        @error('name')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image"  value="{{ old('image') }}">
                        <span class="text-danger">
                          @error('image')
                            {{ $message }}
                          @enderror
                        </span>
                      </div>
                    <div class="mb-3">
                      <label for="part_number" class="form-label">Part Number</label>
                      <input type="text" class="form-control" id="part_number" name="part_number"  value="{{ old('part_number') }}">
                      <span class="text-danger">
                        @error('part_number')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"  value="{{ old('description') }}">
                        <span class="text-danger">
                          @error('description')
                            {{ $message }}
                          @enderror
                        </span>
                      </div>
                    <div class="mb-3">
                      <label for="charge_amount" class="form-label">Charge Amount</label>
                      <input type="number" class="form-control" id="charge_amount" name="charge_amount"  value="{{ old('charge_amount') }}">
                      <span class="text-danger">
                        @error('charge_amount')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="tax" class="form-label">Tax</label>
                      <input type="text" class="form-control" id="tax" name="tax"  value="{{ old('tax') }}">
                      <span class="text-danger">
                        @error('tax')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="spare_labour" class="form-label">Spare Labour</label>
                      <input type="text" class="form-control" id="spare_labour" name="spare_labour"  value="{{ old('spare_labour') }}">
                      <span class="text-danger">
                        @error('spare_labour')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="mrp" class="form-label">MRP</label>
                      <input type="number" class="form-control" id="mrp" name="mrp"  value="{{ old('mrp') }}">
                      <span class="text-danger">
                        @error('mrp')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="hsn_code" class="form-label">Hsn Code</label>
                      <input type="text" class="form-control" id="hsn_code" name="hsn_code"  value="{{ old('hsn_code') }}">
                      <span class="text-danger">
                        @error('hsn_code')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="current_stock" class="form-label">Current Stock</label>
                      <input type="text" class="form-control" id="current_stock" name="current_stock"  value="{{ old('current_stock') }}">
                      <span class="text-danger">
                        @error('current_stock')
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
