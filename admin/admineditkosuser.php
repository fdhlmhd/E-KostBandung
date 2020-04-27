<?php
include('ceksessionadmin.php');
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');

$id = $_GET['idkos'];
$tampil = tampilkosperid($id);

// var_dump($tampil);

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Page E-KOSTBAND</title>
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
      <a href="adminhome.php" class="logo">
        <span class="logo-mini"><b>E</b>KOSTBAND</span>
        <span class="logo-lg"><b>E -</b> KOSTBAND</span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="">
                 <a href="#" class="disabled" data-toggle="dropdown">
                   <span class="">Selamat Datang &nbsp;<?php echo $_SESSION['nama']; ?></span>
                 </a>
               </li>
             </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/asd.jpeg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p> <?php echo $_SESSION['nama']; ?> </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
          </div>
        </div>

        <ul class="sidebar-menu">
          <li class="header">MENU</li>
          <li class="active"><a href="adminhome.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
          <li class="active"><a href="datakos.php"><i class="fa fa-database"></i> <span>Data Kos</span></a></li>
          <li class="active"><a href="datauser.php"><i class="fa fa-users"></i> <span>Data User</span></a></li>
          <li><a href="dataadmin.php"><i class="fa fa-user"></i> <span>Profile Admin</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-gear"></i> <span>Option</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="gantipassadmin.php"><i class="fa fa-lock"></i>Ganti Password</a></li>
              <li><a href="adminlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
        <li class=""><i class="fa fa-home"></i> Beranda</li>
        <li class="active"><i class="fa fa-pencil"> Edit Kost</i></li>
      </ol>
    </section>
    <!--isi-->
    <section class="content">
      <h1>
      EDIT DATA KOST
      </h1>
      <?php while($hsl = mysqli_fetch_assoc($tampil)): ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
                  <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">
                         <label for="namakos">Nama Pemilik Kos</label>
                            <input type="text" name="namakos" class="form-control" value="<?php echo $hsl['namakos']; ?>">
                      </div>

                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea name="alamat" class="form-control" rows="8" cols="58"><?php echo $hsl['alamat']; ?></textarea>
                      </div>

                      <div class="form-group">
                          <label for="notelp">No Telp</label>
                          <input type="text" name="notelp" class="form-control" value="<?php echo $hsl['no_telp']; ?>">
                      </div>

                      <div class="form-group">
                         <label for="harga">Harga</label>
                             <div class="row">
                              <div class="col-xs-6">
                                <input type="text" name="harga" class="form-control" value="<?php echo $hsl['harga']; ?>"> 
                              </div> 
                              <div class="col-xs-1" class="form-control">
                                /
                              </div> 
                              <div class="col-xs-5">
                                <select class="form-control" name="per">
                                  <option value="Bulan" <?php if($hsl['per'] == 'Bulan') {echo 'selected'; } ?>>Bulan</option>
                                  <option value="Tahun" <?php if($hsl['per'] == 'Tahun') {echo 'selected'; } ?>>Tahun</option>
                              </select>
                              </div>
                        </div>     
                      </div>

                    <div class="form-group">
                       <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $hsl['kategori']; ?>">
                    </div>

                    <div class="form-group">
                       <label for="deksripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="12" cols="20"><?php echo $hsl['deskripsi']; ?></textarea>
                    </div>

                    <div class="form-group">
                       <label for="gambar">Gambar Kost</label><br>
                              <td><img src="gambarkost/<?php echo $hsl['gambar'] ?>" name="file" width="100" height="100" alt="gambar" /></td><br>
                            <span>Gambar Baru : <input type="file" name="file"></span><br>
                    </div>

                      <div class="pull-right">
                        <a href="datakos.php" class="btn btn-warning">Kembali</a>
                        <input type="submit" name="submitedit" class="btn btn-primary" value="Edit">
                      </div>
                  </form>
                </div>
          </div>
        <?php endwhile; ?>
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
if(isset($_POST['submitedit'])){
  $namakos   = $_POST['namakos'];
  $alamat    = $_POST['alamat'];
  $harga     = $_POST['harga'];
  $per       = $_POST['per'];
  $notelp    = $_POST['notelp'];
  $kategori  = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  $idkos     = $_GET['idkos'];
  $nama      = $_FILES['file']['name'];
  $ukuranfile = $_FILES['file']['size'];
  $tmp       = $_FILES['file']['tmp_name'];
  $error     = $_FILES['file']['error'];
  $format    = pathinfo($nama, PATHINFO_EXTENSION);
  $tujuan    = "gambarkost/$nama";

if($namakos == "" || $alamat == "" || $harga == "" || $notelp == "" || $kategori == "" || $deskripsi == "" || $per == ""){
    ?> <script type="text/javascript">alert('Mohon data kos diisi semua');</script> <?php
}else{
        $query = mysqli_query($konek, "UPDATE kos SET
                                     namakos = '$namakos',
                                     alamat = '$alamat',
                                     harga = '$harga',
                                     per  = '$per',
                                     kategori = '$kategori',
                                     deskripsi = '$deskripsi',
                                     no_telp = '$notelp'
                                     WHERE idkos = $idkos") or die ('Ada kesalahan dalam Query');
        if($query){
          ?><script>swal({title:"Data Berhasil Di Edit", text:"", type:"success"}, function(){window.location.href='datakos.php';});</script><?php
    }
 }
   if($error === 0){
       move_uploaded_file($tmp , $tujuan);
         $query = mysqli_query($konek, "UPDATE kos SET
                                      namakos = '$namakos',
                                      alamat = '$alamat',
                                      harga = '$harga',
                                      per  = '$per',
                                      kategori = '$kategori',
                                      deskripsi = '$deskripsi',
                                      gambar = '$nama',
                                      no_telp = '$notelp'
                                      WHERE idkos = $idkos") or die ('Ada kesalahan dalam Query');
         if($query){
          
           ?><script>swal({title:"Data Berhasil Di Edit", text:"", type:"success"}, function(){window.location.href='datakos.php';});</script><?php
         }
    }
 }
 ?>

