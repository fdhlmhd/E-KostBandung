<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>
</head>
<body>
</body>
</html>

<?php
include('fungsi/koneksi.php');

if(isset($_POST['submitlogin'])){
$nama = $_POST['nama'];
$password = $_POST['password'];

if(empty($nama) || empty($password)){
  ?>
   <script id="alertswal">swal({title:"Field masih ada yang kosong, harap diisi.", text:"", type:"warning", showConfirmButton: false, timer: 2000}, function(){window.history.back();});</script>
  <?php
}else{
  $query = mysqli_query($konek, "SELECT * FROM user WHERE nama = '$nama' AND password = '$password'");
  $res = mysqli_fetch_assoc($query);

  if($res['id_hakakses'] == 2){
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['password'] = $password;
    $_SESSION['id_user'] = $res['id_user'];
    header('location: userberanda.php');
  }else{
     ?> <script id="alertswal">swal({title:"Username / Password Anda Salah", text:"mohon periksa kembali", type:"error", showConfirmButton: false, timer: 2000}, function(){window.history.back();});</script> <?php
  }
}
}

ob_end_flush();
 ?>