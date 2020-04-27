<!-- <?php 
// ob_start();
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Register Admin </title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <style media="screen">
    .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side{
        background-color: #ffffff !important;
    }
    .col-md-offset-3{
      margin-top: 120px;
    }
    div.box-body{
      width: 550px;

    .input-group-addon{
      margin-left: 4px;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3" >
            <div class="box box-info center">
              <div class="box-header with-border">
                <h3 class="box-title">Register Form Admin</h3>
              </div>
              <form class="form-horizontal" action="" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" name="nama" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-lock"></i>
                        </div>
                          <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                  </div>
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                      </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <a href="adminlogin.php" type="submit" class="btn btn-warning" >Kembali</a>
                    <button type="reset" class="btn btn-danger">Hapus</button>
                    <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                  </div>
                </div>
              </form>
    </div>
    </div>
  </div>
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
</body>
</html>

<?php
// include ('fungsi/koneksi.php');
// include ('fungsi/ekost.php');
// if(isset($_POST['submit'])){
//   $nama = filterinput($_POST['nama']);
//   $password = filterinput( $_POST['password']);
//   $email = filterinput($_POST['email']);
//   $idhakuser = 1;

//   if(empty($nama) || empty($password) || empty($email)){
//       ?> <script type="text/javascript">swal('Mohon diisi semua fieldnya', "", "warning")</script> <?php
//   }else{
//     if(daftaradmin($nama, $password, $email, $idhakuser)){
//       ?> <script>swal('Berhasil Mendaftar', "", "success")</script> <?php
//       $_SESSION['nama'] = $nama;
//       $_SESSION['id_hakakses'] = 1;
//       header('location: adminhome.php');
//     }else{
//       echo "<h2>Ada Kesalahan...</h2>";
//     }
//   }
// }
 ?> -->