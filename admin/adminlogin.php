<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

<style media="screen">
  .login-page{
    background-color: #fff;
  }
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b style="color:#1abc9c;">Admin Login</b>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">login untuk masuk ke halaman admin</p>

    <form action="cekloginadmin.php" method="POST">
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-user form-control-feedback pull-left"></span>
        <input type="text" name="nama" class="form-control" placeholder="Username">

      </div>
      <div class="form-group has-feedback">
          <span class="glyphicon glyphicon-lock form-control-feedback pull-left"></span>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="row">

        <div class="col-md-12 pull-right">
          <input type="submit" name="submitadmin" class="btn btn-primary btn-block btn-flat" value="Login">
        </div>
     </form>
        <br><br>
      </div>
  </div>
</div>

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
