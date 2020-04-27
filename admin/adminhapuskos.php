<?php
include('ceksessionadmin.php');
include ('fungsi/koneksi.php');

$id = $_GET['idkos'];

if($_GET['idkos']){
  $query = mysqli_query($konek, "DELETE FROM kos WHERE idkos = $id") or die ("query hapus gagal");

  if($query > 0){
    ?> <script type="text/javascript">window.history.back();</script> <?php
  }else{
    echo "ada kesalahan menghapus data";
  }
}

 ?>
