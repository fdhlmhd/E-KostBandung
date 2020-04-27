<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="icon" href="dist/favicon.ico">
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>
<style media="screen">
  .login-page{
    background: #136a8a; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #136a8a , #267871); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #136a8a , #267871); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #ffffff;
  }
  #tekscopy{text-align: center;}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b style="color:#FFFFFF;">Login Pemilik Kos</b>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login Untuk Dapat Memulai Mendaftarkan Kontrakan Anda</p>
    <form action="cekloginuser.php" method="POST">
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-user form-control-feedback ubah"></span>
        <input type="text" name="nama" class="form-control" placeholder="Username Anda">

      </div>
      <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-lock form-control-feedback ubah"></span>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="row">
        <div class="col-md-12 pull-right">
          <input type="submit" name="submitlogin" class="btn btn-primary btn-block btn-flat" value="Login">
        </div>
		
     </form>
        <br><br><br>
        <div class="col-xs-8">
          Belum punya akun ? <a href="daftaruser.php" style="color:#114357;">Daftar Disini</a>
        </div>
      </div>
  </div>
</div>
      <footer>
            <div class="col-md-12" id="tekscopy">
              <p>
               <strong><a href="index.php" style="color:#114357;"><span style="font-size:1.15em;">&copy;</span> <span>E-KOSTBAND</span> 2017</strong> 
              </p>
            </div>
        </footer>
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
