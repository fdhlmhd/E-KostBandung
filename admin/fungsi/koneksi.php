<?php

  $host = "localhost";
  $user = "root";
  $pw = "";
  $db = "10114345_AplikasiInformasiKosan";


  $konek = mysqli_connect($host, $user, $pw, $db);

  if(!$konek){
    mysqli_error($konek);
  }

 ?>
