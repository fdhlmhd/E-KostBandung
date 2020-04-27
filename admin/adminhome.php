<?php
include('ceksessionadmin.php');
include('fungsi/koneksi.php');
include('fungsi/ekost.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Page E-KOSTBAND</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="adminhome.php" class="logo">
      <span class="logo-mini"><b>E</b>KOSTBAND</span>
      <span class="logo-lg"><b>E -</b> KOSTBAND</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="">
               <a href="#" class="disabled" data-toggle="dropdown">
                 <span class="">Selamat Datang &nbsp;<?php echo $_SESSION['nama']; ?></span>
               </a>
             </li>
           </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/admin.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['nama']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active"><a href="adminhome.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <li class="active"><a href="datakos.php"><i class="fa fa-database"></i> <span>Data Kos</span></a></li>
        <li class="active"><a href="datauser.php"><i class="fa fa-users"></i> <span>Data User</span></a></li>
        <li><a href="dataadmin.php"><i class="fa fa-user"></i> <span>Profile Admin</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Option</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="gantipassadmin.php"><i class="fa fa-lock"></i>Ganti Password</a></li>
            <li><a href="adminlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          HALAMAN ADMIN E - KOSTBAND
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Beranda</li>
      </ol>
    </section>
    <br><br>
    <!-- Main content -->
    <section class="content">
       <p class="lead">
         <b>Selamat Datang</b> di halaman admin sistem informasi E - KOSTBAND.
         Halaman Admin ini dapat melakukan pengelolahan data, baik itu data user maupun data admin sendiri. Proses yang 
		 terjadi pada data user sepenuhnya tanggung jawab dari Admin.
       </p>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="#">E-KOSTBAND</a>.</strong>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
</body>
</html>
