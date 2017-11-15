<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Prakerin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" style="position: fixed;">
    <!-- Logo -->
    <a href="home.php" class="logo" style="background-color: #3c8dbc;">
      <!-- logo for regular state and mobile devices -->
      <img src="dist/img/rri.png" class="logo-lg" style="margin-top: 5px; height: 40px; width: 100%;">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top" style="background-color: #3c8dbc;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
      <span class="nav navbar-nav" style="padding-right: 300px; margin-top: 3px; font-size: 30px; word-spacing: 5px; color: white;"><b>SISTEM INFORMASI PRAKERIN</b></span>
        <ul class="nav navbar-nav" style="background-color: #3c8dbc;">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="background-color: #3c8dbc;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/efen.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Efen Andira</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color: #3c8dbc;">
                <img src="dist/img/efen.jpg" class="img-square" alt="User Image">
                <p>
                 Efen - Administrator
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <center>
                  <a href="#" class="btn btn-default btn-flat keluar">Sign out</a></center>
                
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header"><center>MAIN MENU</center></li>
        <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        <li>
          <a href="data_bidangprak.php">
            <i class="fa fa-th-list"></i> <span>Bidang Prakerin</span>
          </a>
        </li>
        <li>
          <a href="data_pendaftar.php">
            <i class="fa fa-users"></i><span>Peserta Pendaftar<span></span>
          </a>
        </li>
        <li>
          <a href="data_semua.php">
            <i class="fa fa-table"></i> <span>Tampil</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <br><br>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <center>Input Bidang KP</center>
      </h1>
    </section>
    <section class="content">
          <div class="box box-success">
            <div class="box-body">
              <form role="form" action="#" method="post">
                <div class="form-group">
                  <label>Bidang KP</label>
                  <select class="form-control" name="bidang_kp" required="required">
                    <option value="">---pilih---</option>
                    <option value="Komunikasi">Komunikasi</option>
                    <option value="Humas">Humas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Judul Laporan KP</label>
                  <input type="text" class="form-control" name="judul_kp" required="required">
                </div>                     
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" required="required">
                    <option value="">---pilih---</option>
                    <option value="Ada">Ada</option>
                    <option value="Kosong">Kosong</option>
                  </select>
                </div>
                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
              </form>
                  <a href="data_bidangkp.php"><input type="button" class="btn btn-danger" value="Kembali"></a>
            </div>
          </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $("#tgl_lahir").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
    //Date picker
     $('#tgl_lahir').datepicker({
      autoclose: true
    });
  });
</script>
<script>
    $(".keluar").click(function () {
        var jawab = confirm("Anda yakin keluar dari sistem?");
        if (jawab === true) {
            //kita set hapus false untuk mencegah duplicate request
            var keluar = false;
            if (!keluar) {
                keluar = true;
                $.post('logout.php');
            }
        } else {
            return false;
        }
    });
</script>
</body>
</html>