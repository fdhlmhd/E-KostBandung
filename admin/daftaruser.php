<?php
session_start();
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Register User </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>

  <style media="screen">
    .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side{
    background: #136a8a; 
    background: -webkit-linear-gradient(to left, #136a8a , #267871);
    background: linear-gradient(to left, #136a8a , #267871); 
    color: #ffffff;
    }
    body{
    background: #136a8a; 
    background: -webkit-linear-gradient(to left, #136a8a , #267871);
    background: linear-gradient(to left, #136a8a , #267871); 
    }
    .col-md-offset-3{
      margin-top: 120px;
    }
    .box-info{
      padding: 30px;
    }
    div.box-body{
      width: 500px;
    }

    @media screen and (max-width: 1200px){
      div.box-body{
        width: 100%;
      }
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
                <h3 class="box-title">Form Untuk Pendaftaran Pemilik Kos</h3>
              </div>
              <form class="form-horizontal" action="" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
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
                        <input type="email" name="email" class="form-control" placeholder="Email Anda">
                      </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </div>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Anda">
                      </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tablet"></i>
                      </div>
                        <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telephone">
                      </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='index.php';">Kembali</button>
                    <button type="reset" class="btn btn-danger">Hapus</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Daftar">
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
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
  $nama = filterinput($_POST['nama']);
  $password = filterinput($_POST['password']);
  $email = filterinput($_POST['email']);
  $alamat = filterinput($_POST['alamat']);
  $no_telp = filterinput($_POST['no_telp']);
  $idhakuser = 2;
  if(empty($nama) || empty($password) || empty($email) || empty($alamat) || empty($no_telp)){
      ?> <script type="text/javascript">swal('Mohon diisi semua fieldnya',"","warning");</script> <?php
  }else{
    if(daftaruser($nama, $password, $email, $alamat, $no_telp, $idhakuser)){
      $_SESSION['nama'] = $nama;
      $_SESSION['password'] = $password;
      $_SESSION['id_user'] = $idhakuser;
      ?> <script type="text/javascript">swal({title:"Berhasil Mendaftar..Silahkan login dengan Akun Anda", text:"", type:"success"}, function(){window.location.href='userlogin.php';});</script> <?php
    }else{
      echo "<h2>Ada Kesalahan...</h2>";
    }
  }
}

?>