
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid mt-5" >
              <div class="row mb-2">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                      <h4>Job Card</h4>
                    </div>
                  </div>
                    <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                  @method('PUT')
                    <div class="mb-3">
                      <label for="field_name" class="form-label">Field Name</label>
                      <input type="text" class="form-control" id="field_name" name="field_name"  value="{{ old('field_name') }}">
                      <span class="text-danger">
                        @error('field_name')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="col-sm-6" name="">
                        <!-- radio -->
                        <div class="form-group">
                          <div class="p-t-10" class="form-check">
                            <label class="radio-container.m-r-45" class="form-check-label">Value
                              <input  type="radio"  name="ovalue" value="values" onclick="text(0)">
                              <span class="checkmark"></span>
                            </label>
                            <label class="radio-container" class="form-check-label">Options
                              <input  type="radio"  name="ovalue" value="options" onclick="text(1)">
                              <span class="checkmark"></span>
                            </label> 
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="mb-3">
                      <div class="input-group" id="mycode">
                      <label for="options" class="form-label">options</label>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th style="text-align:center"><a  class="btn btn-info addRow">+</a></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="name1" id="name1" class="form-control"></td>
                            <td style="text-align:center"><a  class="btn btn-danger">-</a></td>
                          </tr>
                        </tbody>
                      </table>
                      <input type="hidden" value="1" name="options_count" class="form-control" id="specification_count"/>
                    </div> 
                    </div>                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              </div>
            </div>
        </div>
      </div>


      <!-- Modal -->
         <!-- /.row -->
      <!-- /.container-fluid -->
   
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
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
<script type="text/javascript">
  $('.addRow').on('click',function(){
      addRow();
  });

  $('input[name=ovalue]').click(function() {
      if(this.value == "values"){
        $("")
      }else{

      }
  });

   function addRow(){
     $("#options_count").val(parseInt($("#options_count").val())+1);

      var tr ='<tr>'+
                    ' <td><input type="text" name="name'+$("#options_count").val()+'" id="name'+$("#specification_count").val()+'"  class="form-control"></td>'+  
                     '<td style="text-align:center"><a  class="btn btn-danger remove">-</a></td>'+
                   '</tr>'
                   $('tbody').append(tr);
                   

   };
   $('tbody').on('click','.remove', function(){
     $(this).parent().parent().remove();
   })

</script>
</body>
</html>

