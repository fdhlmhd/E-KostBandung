<?php
session_start();
include('cekloginadmin.php');
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
     ?><script>swal("Anda Harus Login","", "warning"); window.location.href='adminlogin.php';</script><?php
  }elseif(!isset($_SESSION['id_hakakses'])){
     ?><script>swal("Anda Bukan Admin","", "error"); window.history.back();</script><?php
  }
?>