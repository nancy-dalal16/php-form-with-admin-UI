 <?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Calendar -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"style="text-align:center;justify-content:center;">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav" >    
      <li><a href="main.php"><b style="color:black">Form</b></a></li>
      &nbsp;&nbsp;&nbsp;&nbsp;<li><a href="view.php"><b style="color:black">View Form Details</b></a></li>
      &nbsp;&nbsp;&nbsp;&nbsp;<li><a href="logout.php"><b style="color:black">Logout</b></a></li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!--  <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="main.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Form
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="view.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                View Form Details
              </p>
            </a>
            
          </li>
         
          <li class="nav-item has-treeview menu-open">
            <a href="logout.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Logout
              </p>
            </a>
            
          </li>
         
        
         
       
           
            
            </ul>
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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
     
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Store Customer Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"   method="POST" action="action.php" enctype="multipart/form-data">
              <div class="card-body">
                  
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Number" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address" name="address" required></textarea>
                  </div>
                  
                  <div class="form-group">
                  <label for="exampleInputEmail1">Select Date</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="mm/dd/yyyy"  name="date" id="datepicker" required>
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Facebook Username" name="facebook" required>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Instagram Username" name="instagram" required>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-google" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Google Username" name="google" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Choose File" name="img" >
                  </div>
                 

                  <div class="form-group">
                  <label>Purchase</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="options" required>
                    <option selected="selected">$0 - $1000</option>
                    <option>$1000 - $2000</option>
                    <option>$2000 - $3000</option>
                    <option>$3000 - $4000</option>
                    <option>$4000 - $5000</option>
                    <option>$5000 Or More</option>
                  </select>
                </div>

                
        


                <div class="form-group">
                 <label>Select one option</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio1" name="code"  value="12520" required >
                              <label for="customRadio1" class="custom-control-label">12520</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio2" name="code"  value="00121" required>
                              <label for="customRadio2" class="custom-control-label">00121</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio3" name="code"  value="44568" required>
                              <label for="customRadio3" class="custom-control-label">44568</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio4" name="code"  value="67812" required>
                              <label for="customRadio4" class="custom-control-label">67812</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio5" name="code" value="07129" required>
                              <label for="customRadio5" class="custom-control-label">07129</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label>Select multiple options</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
                            <label for="vehicle1" class="custom-control-label"> Bike</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vehicle2" name="vehicle[]" value="Activa" >
                            <label for="vehicle2" class="custom-control-label">Activa</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vehicle3" name="vehicle[]" value="Bus" >
                            <label for="vehicle3" class="custom-control-label">Bus</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vehicle4" name="vehicle[]" value="Truck" >
                            <label for="vehicle4" class="custom-control-label">Truck</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vehicle5" name="vehicle[]" value="Bicycle" >
                            <label for="vehicle5" class="custom-control-label">Bicycle</label>
                            </div>
                        </div>
                </div><br>


                      <div class="form-group">
                    <label for="exampleInputEmail1">Reference</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" pattern="https?://.+" placeholder="Enter Reference [Social Site Link]" name="reference" required>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Remark</label>
                    <textarea type="text" class="form-control" name="sales"  required></textarea>
                  </div>

                    


</div>
                   
               

                
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
