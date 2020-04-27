<?php 
ob_start();
include('ceksessionuser.php');
include ('fungsi/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php
$id = $_GET['idkos'];

if($_GET['idkos']){
  $query = mysqli_query($konek, "DELETE FROM kos WHERE idkos = $id") or die ("query hapus gagal");

  if($query > 0){
    ?> <script type="text/javascript">swal({title:"Berhasil Menghapus Data", text:"", type:"success", showConfirmButton: false, timer: 2000}, function(){window.history.back();});</script> <?php
  }else{
    echo "ada kesalahan menghapus data";
  }
}

 ?>
