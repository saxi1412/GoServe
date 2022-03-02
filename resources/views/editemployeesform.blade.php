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
                <a href="#" class="nav-link">
                  <i class="fa-regular fa-calendar-check"></i>
                  <p>
                    Bookings 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../consistentbooking" class="nav-link">
                      <i class="fa-solid fa-recycle"></i>
                      <p>Consistent Service</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../rsabooking" class="nav-link">
                      <i class="fa-solid fa-road"></i>
                      <p>RSA Service</p>
                    </a>
                  </li>
                </ul>
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
                <h4>Edit Form</h4>
              </div>
            </div>
              <div class="card-body">
            <form action="" method="POST">
              @csrf
              @method('PUT')
            
             
            
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employees->name }}" value="{{ old('name') }}">
                <span class="text-danger">
                  @error('name')
                    {{ $message }}
                  @enderror
                </span>
              </div>
            
              <div class="mb-3">
                <label for="email" class="form-label">Email Id</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $employees->email }}" value="{{ old('email') }}">
                <span class="text-danger">
                  @error('email')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ $employees->number }}" value="{{ old('number') }}">
                <span class="text-danger">
                  @error('number')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="residential_address" class="form-label">Residential Address</label>
                <input type="text" class="form-control" id="residential_address" name="residential_address" value="{{ $employees->residential_address }}" value="{{ old('residential_address') }}">
                <span class="text-danger">
                  @error('residential_address')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                  <label for="aadhar_card_no" class="form-label">Aadhar Card No</label>
                  <input type="number" class="form-control" id="aadhar_card_no" name="aadhar_card_no" value="{{ $employees->aadhar_card_no }}" value="{{ old('aadhar_card_no') }}">
                  <span class="text-danger">
                    @error('aadhar_card_no')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
                <div class="mb-3">
                  <label for="pan_card_no" class="form-label">Pan Card No</label>
                  <input type="text" class="form-control" id="pan_card_no" name="pan_card_no" value="{{ $employees->pan_card_no }}" value="{{ old('pan_card_no') }}">
                  <span class="text-danger">
                    @error('pan_card_no')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $employees->password }}" value="{{ old('password') }}">
                <span class="text-danger">
                  @error('password')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="past_job_experience" class="form-label">Past Job Experience</label>
                <input type="text" class="form-control" id="past_job_experience" name="past_job_experience" value="{{ $employees->past_job_experience }}" value="{{ old('past_job_experience') }}">
                <span class="text-danger">
                  @error('past_job_experience')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                  <label for="current_job_description" class="form-label">Current Job Description</label>
                  <input type="text" class="form-control" id="current_job_description" name="current_job_description" value="{{ $employees->current_job_description }}" value="{{ old('current_job_description') }}" >
                  <span class="text-danger">
                    @error('current_job_description')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
                <div class="mb-3">
                  <label for="date_of_joining" class="form-label">Date Of Joining</label>
                  <input type="date" class="form-control" id="date_of_joining" name="date_of_joining" value="{{ $employees->date_of_joining }}" value="{{ old('date_of_joining') }}">
                  <span class="text-danger">
                    @error('date_of_joining')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
                <div class="mb-3">
                  <label for="roles_and_responsibility" class="form-label">Roles And Responsibility</label>
                  <input type="text" class="form-control" id="roles_and_responsibility" name="roles_and_responsibility" value="{{ $employees->roles_and_responsibility }}" value="{{ old('roles_and_responsibility') }}">
                  <span class="text-danger">
                    @error('roles_and_responsibility')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
                <div class="mb-3">
                  <label for="salary" class="form-label">Salary</label>
                  <input type="number" class="form-control" id="salary" name="salary" value="{{ $employees->salary }}" value="{{ old('salary') }}">
                  <span class="text-danger">
                    @error('salary')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
                <div class="mb-3">
                  <label for="emergency_contact_number" class="form-label">Emergency Contact Number</label>
                  <input type="number" class="form-control" id="emergency_contact_number" name="emergency_contact_number" value="{{ $employees->emergency_contact_number }}" value="{{ old('emergency_contact_number') }}">
                  <span class="text-danger">
                    @error('emergency_contact_number')
                      {{ $message }}
                    @enderror
                  </span>
                </div>
              <button type="submit" class="btn btn-primary">Update</button>
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
