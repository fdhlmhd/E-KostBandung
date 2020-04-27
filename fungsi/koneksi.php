<?php

  $host = "localhost";
  $user = "root";
  $pw = "";
  $db = "dbkosan";


  $konek = mysqli_connect($host, $user, $pw, $db);

  if(!$konek){
    mysqli_error($konek);
  }

 ?>
