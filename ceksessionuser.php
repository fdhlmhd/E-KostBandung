<?php 
session_start();
ob_start();
include('cekloginuser.php');
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
  if(!isset($_SESSION['nama'])){
  	  ?><script>swal("Anda Bukan user terdaftar","silahkan login!!!", "warning"); window.location.href='userlogin.php';</script><?php
  }elseif(!isset($_SESSION['password'])){
      ?><script>swal("Anda Bukan user terdaftar","silahkan login!!!", "warning"); window.location.href='userlogin.php';</script><?php
  }elseif(!isset($_SESSION['id_user'])){
     ?><script>swal("Anda Bukan user terdaftar","silahkan login!!!", "warning"); window.location.href='userlogin.php';</script><?php
  }
  ob_end_flush();
 ?>
