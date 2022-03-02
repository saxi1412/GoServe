<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoServe | Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <div class="content-header">
      <div class="container-fluid mt-5" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4>SupportStaffs Data</h4>
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
                <label for="email" class="form-label">Email Id</label>
                <input type="text" class="form-control" id="email" name="email"  value="{{ old('email') }}">
                <span class="text-danger">
                  @error('email')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number"  value="{{ old('number') }}">
                <span class="text-danger">
                  @error('number')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="residential_address" class="form-label">Residential Address</label>
                <input type="text" class="form-control" id="residential_address" name="residential_address"  value="{{ old('residential_address') }}">
                <span class="text-danger">
                  @error('residential_address')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="aadhar_card_no" class="form-label">Aadhar Card No</label>
                <input type="number" class="form-control" id="aadhar_card_no" name="aadhar_card_no"  value="{{ old('aadhar_card_no') }}">
                <span class="text-danger">
                  @error('aadhar_card_no')
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
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"  value="{{ old('password') }}">
                <span class="text-danger">
                  @error('password')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="past_job_experience" class="form-label">Past Job Experience</label>
                <input type="text" class="form-control" id="past_job_experience" name="past_job_experience"  value="{{ old('past_job_experience') }}">
                <span class="text-danger">
                  @error('past_job_experience')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="current_job_description" class="form-label">Current Job Description</label>
                <input type="text" class="form-control" id="current_job_description" name="current_job_description"  value="{{ old('current_job_description') }}">
                <span class="text-danger">
                  @error('current_job_description')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="date_of_joining" class="form-label">Date Of Joining</label>
                <input type="date" class="form-control" id="date_of_joining" name="date_of_joining"  value="{{ old('date_of_joining') }}">
                <span class="text-danger">
                  @error('date_of_joining')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="roles_and_responsibility" class="form-label">Role And Responsibility</label>
                <input type="text" class="form-control" id="roles_and_responsibility" name="roles_and_responsibility"  value="{{ old('roles_and_responsibility') }}">
                <span class="text-danger">
                  @error('roles_and_responsibility')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary"  value="{{ old('salary') }}">
                <span class="text-danger">
                  @error('salary')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="emergency_contact_number" class="form-label">Emergency Contact Number</label>
                <input type="number" class="form-control" id="emergency_contact_number" name="emergency_contact_number"  value="{{ old('emergency_contact_number') }}">
                <span class="text-danger">
                  @error('emergency_contact_number')
                    {{ $message }}
                  @enderror
                </span>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          <div class="col-sm-4">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email Id</th>
                  <th scope="col">Number</th>
                  <th scope="col">Residential Address</th>
                  <th scope="col">Aadhar Card No</th>
                  <th scope="col">Pan Card No</th>
                  <th scope="col">Password</th>
                  <th scope="col">Past Job Experience</th>
                  <th scope="col">Current Job Description</th>
                  <th scope="col">Date Of Joining</th>
                  <th scope="col">Roles And Responsibility</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Emergency Contact Number</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($supportstaffs as $supportstaff )
                  <tr>
                    <th>{{ $supportstaff->id }}</th>
                    <td>{{ $supportstaff->name }}</td>
                    <td>{{ $supportstaff->email }}</td>
                    <td>{{ $supportstaff->number }}</td>
                    <td>{{ $supportstaff->residential_address}}</td>
                    <td>{{ $supportstaff->aadhar_card_no}}</td>
                    <td>{{ $supportstaff->pan_card_no}}</td>
                    <td>{{ $supportstaff->password }}</td>
                    <td>{{ $supportstaff->past_job_experience }}</td>
                    <td>{{ $supportstaff->current_job_description}}</td>
                    <td>{{ $supportstaff->date_of_joining }}</td>
                    <td>{{ $supportstaff->roles_and_responsibility }}</td>
                    <td>{{ $supportstaff->salary }}</td>
                    <td>{{ $supportstaff->emergency_contact_number }}</td>
                    <td>
                      <a href="{{ url('../editsupportstaff', $supportstaff->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{ url('../deletesupportstaff', $supportstaff->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tbody>
                <tfoot>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email Id</th>
                      <th scope="col">Number</th>
                      <th scope="col">Residential Address</th>
                      <th scope="col">Aadhar Card No</th>
                      <th scope="col">Pan Card No</th>
                      <th scope="col">Password</th>
                      <th scope="col">Past Job Experience</th>
                      <th scope="col">Current Job Description</th>
                      <th scope="col">Date Of Joining</th>
                      <th scope="col">Roles And Responsibility</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Emergency Contact Number</th>
                      <th scope="col">Action</th>
                    </tr>
                    </tfoot>
            </tbody>
         
            </table>
            {{ $supportstaffs->links() }}

          </div>
        </div>
      </div>
    </div>
  </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
