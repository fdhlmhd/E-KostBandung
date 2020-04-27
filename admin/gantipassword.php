<?php
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $passlama = $_POST['passwordlama'];
  $passbaru = $_POST['passwordbaru'];

  if(empty($nama) || empty($passlama) || empty($passbaru)){
      ?> <script type="text/javascript">alert('Mohon diisi semua fieldnya / username dan password anda salah')</script> <?php
  }else{
    $cek = "SELECT * FROM user WHERE nama = '$nama' AND password = '$passlama'";
    $queryres = mysqli_query($konek, $cek);

    $count=mysqli_num_rows($queryres);

    if($count >= 1){
      $updatepass = "UPDATE user SET password ='$passbaru' WHERE nama = '$nama'";
      $updatequery = mysqli_query($konek, $updatepass);

      if($updatequery){
        ?>
         <script>alert("Password Anda Berhasil di Ubah");</script>
        <?php
      }else{
        echo "Maaf ada kesalahan";
      }
    }
  }
}

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Page E-Kost</title>
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
      <span class="logo-mini"><b>E</b>Kost</span>
      <span class="logo-lg"><b>E -</b> Kost</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GANTI PASSWORD
      </h1>
      <ol class="breadcrumb">
        <li class=""><i class="fa fa-home"></i> Beranda</li>
        <li class="active"><i class="fa fa-edit"> Ganti Password</i></li>
      </ol>
    </section>
    <br><br>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
                  <form class="form-horizontal" action="" method="POST">
                    <div class="box-body">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </div>
                          <input type="text" name="nama" class="form-control" placeholder="Username Anda">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-unlock"></i>
                            </div>
                              <input type="text" name="passwordlama" class="form-control" placeholder="Password Lama Anda">
                            </div>
                      </div>
                      <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                          </div>
                            <input type="text" name="passwordbaru" class="form-control" placeholder="Password Baru Anda">
                          </div>
                        </div>

                      <div class="pull-right">
                        <button type="reset" class="btn btn-danger">Hapus</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Ganti">
                      </div>

                  </form>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2016 <a href="#">E-Kost</a>.</strong>
  </footer>


  <div class="control-sidebar-bg"></div>
</div>

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>

</body>
</html>
