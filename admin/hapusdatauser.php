<?php
ob_start();
include ('cekloginadmin.php');
include ('ceksessionadmin.php');
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');


  $id = $_GET['id_user'];

  if(hapusdatauser($id)){
  	?> <script>swal({title:"Berhasil Menghapus Data", text:"", type:"success", showConfirmButton: false, timer: 2000}, function(){window.location.href='datauser.php';});</script> <?php
  }else{
    echo "gagal menghapus data";
  }
ob_end_flush();
?>