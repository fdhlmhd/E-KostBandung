<?php
ob_start();
include ('ceksessionadmin.php');
include ('cekloginadmin.php');
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');

$id =  $_SESSION['id_hakakses'];
$res = tampilprofileadmin($id);
// var_dump($res);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Edit Profile </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>

  <style media="screen">
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
                <h3 class="box-title">Edit Data Profile</h3>
              </div>
              <?php while($row=mysqli_fetch_assoc($res)): ?>
              <form class="form-horizontal" action="" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-lock"></i>
                        </div>
                          <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                        </div>
                  </div>
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                      </div>
                </div>
              <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                          <input type="text" name="no_telp" class="form-control" value="<?php echo $row['no_telp']; ?>">
                        </div>
                  </div>
                   <div class="form-group">
                  <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
                        </div>
                  </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-warning" onclick="fungsi()">Kembali</button>
                    <input type="submit" name="submitedit" class="btn btn-primary" value="Edit">
                  </div>
                </div>
              </form>
          <?php endwhile; ?>
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
<script type="text/javascript">
  function fungsi(){
    window.history.back();
  }
</script>
<?php 
if(isset($_POST['submitedit'])){
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];

  if(editdataadmin($nama, $password, $email, $no_telp, $alamat, $id)){
  	?> <script>swal({title:"Data Berhasil Di Edit", text:"Silahkan Login Dengan Data yang di Update!", type:"success"}, function(){window.location.href='adminlogin.php';});</script></script> <?php
  }else{
  	echo "maaf ada kesalahan";
  }
}
ob_end_flush();
 ?>