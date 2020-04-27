<?php
  function daftaradmin($username, $password, $email, $idhakuser){
    $query = "INSERT INTO admin (id, nama, password, email, id_hakakses) VALUES ('', '$username', '$password', '$email', '$idhakuser')";
    return run($query);
  }

  function daftaruser($nama, $password, $email, $alamat, $no_telp, $idhakuser){
    $query = "INSERT INTO user (id_user, nama, password, email, alamat, no_telp, id_hakakses) VALUES ('', '$nama', '$password', '$email', '$alamat', '$no_telp', '$idhakuser')";
    return run($query);
  }

  function tampilperid($id){
    global $konek;
    $query = "SELECT * FROM user WHERE id_user = '$id'";
    $hasil = mysqli_query($konek, $query) or die('gagal query edit');
    return $hasil;
  }

  function tampildatauser(){
    global $konek;
    $query = mysqli_query($konek, "SELECT * FROM user");
    return $query;
  }

  function editdatauser($nama, $password, $email, $alamat, $no_telp, $id_user){
    $query = "UPDATE user SET nama = '$nama', password = '$password', email = '$email', alamat = '$alamat', no_telp = '$no_telp' WHERE id_user = $id_user";
    return run($query);
  }
   function editdataadmin($nama, $password, $email, $no_telp, $alamat, $id){
    $query = "UPDATE user SET nama = '$nama', password = '$password', email = '$email', alamat = '$alamat', no_telp = '$no_telp' WHERE id_hakakses = '$id'";
    return run($query);
  }

  function filterinput($string){
    return htmlspecialchars(trim($string));
  }

  function hapusdatauser($id){
    global $konek;
    $query = mysqli_query($konek, "DELETE FROM user WHERE id_user = $id");
    return $query;
  }

  function tampilprofile($id){
    global $konek;
    $query = mysqli_query($konek, "SELECT id_user, nama, password, email, alamat, no_telp FROM user WHERE nama ='".$_SESSION['nama']."'") or die('query tampil profile gagal');
    return $query;
    }

  function tampilprofileadmin($id){
    global $konek;
    $query = mysqli_query($konek, "SELECT id_user, nama, password, email, alamat, no_telp FROM user WHERE id_hakakses ='".$_SESSION['id_hakakses']."'") or die('query tampil profile gagal');

    return $query;
  }

  function tampilkos(){
    global $konek;
    $query = mysqli_query($konek, "SELECT * FROM kos");
    return $query;
  }

  function tampilkosperid($id){
    global $konek;
    $query = mysqli_query($konek, "SELECT * FROM kos WHERE idkos = $id");
    return $query;
  }

  function infokos_perid($id){
    global $konek;
    $query = mysqli_query($konek, "SELECT * FROM kos WHERE id_user = '$id'") or die('query tampil iduser gagal');
    return $query;
  }

  function tampildatakos(){
      global $konek;
      $query = mysqli_query($konek, "SELECT * FROM kos");
      return $query;
    }

  function run($query){
    global $konek;
    if($hasil = mysqli_query($konek, $query) or die('maaf ada kesalahan query')){
      return $hasil;
    }
  }
 ?>
