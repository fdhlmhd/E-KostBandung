<?php
include ('ceksessionuser.php');
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman User E-KOSTBAND</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="userberanda.php" class="logo">
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

      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active"><a href="userberanda.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <li class="active"><a href="daftarkost.php"><i class="fa fa-bullhorn"></i> <span>Daftarkan Kontrakan</span></a></li>
        <li class="active"><a href="profileuser.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li class="active"><a href="kosterdaftar.php"><i class="fa fa-list"></i> <span>Kost Anda</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Option</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="gantipassword.php"><i class="fa fa-lock"></i>Ganti Password</a></li>
            <li><a href="userlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        HALAMAN PENDAFTAR / PEMILIK E-KOST
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Beranda</li>
      </ol>
    </section>
    <br><br>
    <section class="content">
       <p class="lead">
         <b>Selamat Datang</b> di halaman user sistem informasi E-KOSTBAND. Dihalaman ini anda selaku pemilik dan pendaftar di E-KOSTBAND dapat mendaftarkan
         kost anda untuk di tampilkan di aplikasi kami untuk tujuan promosi kost / kontrakan anda di area Bandung.
       </p>

    </section>
  </div>
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
