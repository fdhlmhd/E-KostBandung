<?php
include('ceksessionuser.php');
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Page E-KOSTBAND</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/swal/sweetalert.css">
  <script type="text/javascript" src="plugins/swal/sweetalert.min.js"></script>
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="userberanda.php" class="logo">
      <span class="logo-mini"><b>E</b>KOSTBAND</span>
      <span class="logo-lg"><b>E -</b> KOSTBAND</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

           </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">

      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active"><a href="userberanda.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <li class="active"><a href="daftarkost.php"><i class="fa fa-bullhorn"></i> <span>Daftarkan Kontrakan</span></a></li>
        <li class="active"><a href="profileuser.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li class="active"><a href="kosterdaftar.php"><i class="fa fa-list"></i> <span>Kost Anda</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Option</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="gantipassword.php"><i class="fa fa-lock"></i>Ganti Password</a></li>
            <li><a href="userlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
        <li class=""><i class="fa fa-home"></i> Beranda</li>
        <li class="active"><i class="fa fa-plus"> Daftar Kost</i></li>
      </ol>
    </section>
    <!--isi-->
    <section class="content">
      <h1>
      INPUT DATA KOST
      </h1>
      <p style="color:rgb(213, 114, 65);">
        *MASUKKAN RINCIAN MENGENAI KOST / KONTRAKAN ANDA
      </p>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
                  <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">
                         <label for="namakos">Nama Pemilik Kos</label>
                            <input type="text" name="namakos" class="form-control" placeholder="Nama Pemilik Kos / Kontrakan">
                      </div>

                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea name="alamat" class="form-control" placeholder="Alamat Kos Anda" rows="8" cols="58"></textarea>
                      </div>

                      <div class="form-group">
                          <label for="notelp">No Telp</label>
                          <input type="text" name="notelp" class="form-control" placeholder="Nomor Telp Anda">
                      </div>

                      <div class="form-group">
                       <label for="harga">Harga</label>
                         <div class="row">
                              <div class="col-xs-6">
                                <input type="text" name="harga" class="form-control" placeholder="Misal : 500.000">
                              </div>
                              <div class="col-xs-1" class="form-control">
                                /
                              </div>
                              <div class="col-xs-5">
                                <select class="form-control" name="per">
                                  <option value="Bulan">Bulan</option>
                                  <option value="Tahun">Tahun</option>
                              </select>
                              </div>
                        </div>
                      </div>


                    <div class="form-group">
                       <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Misal : pria/wanita/mahasiswa/umum">
                    </div>

                    <div class="form-group">
                       <label for="deksripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Jelaskan Mengenai Kos Anda. Misal : fasilitas yang diberikan dan akses ke jalan utama dsb." rows="12" cols="20"></textarea>
                    </div>

                    <div class="form-group">
                       <label for="gambar">Masukkan Foto Ukuran 400x300 (PNG/JPG/JPEG) Untuk Gambar Kost Anda.</label>
                             <input type="file" name="file" id="exampleInputFile">
                    </div>

                      <div class="pull-right">
                        <button type="reset" class="btn btn-danger">Hapus</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Daftar">
                      </div>

                  </form>
                </div>
          </div>
  </section></div>
          <footer class="main-footer">
            <strong>Copyright &copy; 2017 <a href="#">E-KOSTBAND</a>.</strong>
          </footer>

          <div class="control-sidebar-bg"></div>
        </div>

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
  $namakos   = filterinput($_POST['namakos']);
  $alamat    = filterinput($_POST['alamat']);
  $harga     = filterinput($_POST['harga']);
  $per       = filterinput($_POST['per']);
  $kategori  = filterinput($_POST['kategori']);
  $deskripsi = filterinput($_POST['deskripsi']);
  $notelp    = filterinput($_POST['notelp']);
  $nama      = filterinput($_FILES['file']['name']);
  $ukuranfile = $_FILES['file']['size'];
  $tmp       = $_FILES['file']['tmp_name'];
  $error     = $_FILES['file']['error'];
  $format    = pathinfo($nama, PATHINFO_EXTENSION);
  $tujuan    = "gambarkost/$nama";
  //kasih alert di if else
  if(empty($namakos) || empty($alamat) || empty($harga) || empty($kategori) || empty($deskripsi) || empty($per) || empty($nama)){
      ?> <script type="text/javascript">alert('Mohon diisi semua fieldnya.')</script> <?php
  }
  if($error === 0){
    if($ukuranfile){
      if($format == "jpg" || $format == "png" || $format == "jpeg" || $format == "JPG"){
        move_uploaded_file($tmp, $tujuan);

        $query = mysqli_query($konek, "INSERT INTO kos VALUES ('''' , '".$_SESSION['id_user']."', '$namakos', '$alamat', '$harga', '$per', '$kategori', '$deskripsi', '$nama', '$notelp')") or die ('Ada kesalahan');

        if($query){
            ?> <script type="text/javascript">swal({title:"Berhasil Mendaftarkan Kos", text:"", type:"success", showConfirmButton: false, timer: 2000}, function(){window.location.href='kosterdaftar.php';});</script> <?php
        }
      }else{
      ?> <script type="text/javascript">swal('Format Harus JPG/PNG/JPEG !!', "", "warning");</script> <?php
      }
    }else{
        ?> <script type="text/javascript">swal('File gambar yang diupload terlalu besar', "", "warning"); </script> <?php
    }
  }
}
?>
