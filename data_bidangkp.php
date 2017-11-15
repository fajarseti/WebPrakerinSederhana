<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Prakerin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
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
    <nav class="navbar navbar-static-top" style="background-color: #3c8dbc;">
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
        <center>Data Bidang Kerja Praktek</center>
      </h1>
    </section>
    <section class="content-header">
      <div class="pull-right"><a href="bidangkp.php"><button type='submit' class='fa fa-plus btn btn-success' style="margin-top: -30px;"> Tambah Data</button></a></div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
  <?php
  //include 'koneksi.php';
  //$tampil=mysql_query("select * from alternatif");
  echo"<table id='tabel' class='table table-bordered table-striped'>
  <thead>
  <tr bgcolor=#39CCCC>
    <th><center>No</center></th>
    <th><center>Bidang KP</center></th>
    <th><center>Judul</center></th>
    <th><center>Status</center></th>
    <th><center>Aksi</center></th>
  </tr>
  </thead>
  <tbody>";
  // $x=1;
  // while ($data=mysql_fetch_array($tampil))
  // {
  // echo "
  // <tr> 
  //   <td><center>$data[id_alt]</center></td>
  //   <td><center>$data[nama]</center></td>
  //   <td><center>$data[jabatan]</center></td>
  //   <td align='center'>
  //     <a href=edit_alternatif.php?id=".$data['id_alt']."><button type='submit' class='fa fa-edit btn btn-warning'></button></a>  
  //     <a href=hapus_alternatif.php?id=".$data['id_alt']." class='hapus'><button type='submit' class='fa fa-trash btn btn-danger'></button></a>
  //   </td>
  // </tr>";
  // $x++;
  // }
echo "</tbody></table>";
?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#tabel').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
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