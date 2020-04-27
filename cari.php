<?php
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E - Kost merupakan website untuk mencari kos, yang ditujukan untuk masyarakat dalam mempermudah mendapatkan informasi kos yang ada di sekitar wilayah purwokerto.">
    <meta name="author" content="kelompokunyu">

    <title>E-KOSTBAND Bandung | Website Untuk Mencari Kost Di Bandung</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/css/thumbnail-gallery.css">
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link rel="icon" href="dist/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<style media="screen">
a .img-responsive{
    display: block;
    background-position: center center;
    background-size: contain;
    background-repeat: no-repeat;
    height: 266px;
}
</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#5f5f5f;font-size:17px;letter-spacing:1px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">E - KOSTBAND</a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
				 <li>
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="caradaftarkost.php"><i class="fa fa-bullhorn"></i> Daftarkan Kost</a>
                    </li>
					<li>
                        <a href="Tentang.php" target="_blank"><i class="fa fa-hand-o-right"></i> Tentang</a>
                    </li>
                    <li>
                        <a href="daftaruser.php"><i class="fa fa-clipboard"></i> Registrasi</a>
                    </li>
					 <li>
                        <a href="userlogin.php"><i class="fa fa-user"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-header">Cari Berdasarkan <form action="" method="GET">
                               <select name="kategori" class="btn btn-default kricari">
                                         <option value="">-- KATEGORI --</option>
                                        <option value="umum" >Umum</option>
                                        <option value="pria" >Pria</option>
                                        <option value="wanita" >Wanita</option>
                                        <option value="mahasiswa">Mahasiswa / Pelajar</option>
                                  </select>
                                  <select name="wilayah" class="btn btn-default kricari">
                                        <option value="">-- WILAYAH --</option>
                                        <option value="tubagus" > Tubagus Ismail</option>
                                        <option value="setiabudi" > Setiabudi</option>
                                        <option value="dayeuhkolot" > Dayeuhkolot</option>
                                        <option value="cikutra"> Cikutra</option>
                                        <option value="cimahi"> Cimahi</option>
                                  </select>
                                  <select name="harga" class="btn btn-default kricari">
                                       <option value="">--HARGA--</option>
                                         <option value="1"> < Rp.300.000</option>
                                        <option value="2">Rp.300.000 - Rp.500.000</option>
                                        <option value="3">Rp.500.000 - Rp.1.000.000</option>
                                        <option value="4"> > Rp.1.000.000</option>
                                  </select> <button type="submit" name="pencarian" class="btn btn-info kricari"><i class="fa fa-search"></i> Cari</button></form></h3>
                                </div>
                               <br>
                               <br>
              <?php
         if(isset($_GET['pencarian']))
            {
            $hargakos = $_GET['harga'];
            $kategori = $_GET['kategori'];
            $wilayah = $_GET['wilayah'];

              if($hargakos == 1){
              $harga = 'harga < 300000 AND';
              }elseif($hargakos == 2){
                 $harga = 'harga BETWEEN 300000 AND 500000 AND';
              }elseif($hargakos == 3){
                $harga = 'harga BETWEEN 500000 AND 1000000 AND';
              }elseif($hargakos == 4){
                $harga = 'harga >= 1000000 AND';
              }else{
                $harga = "";
              }

            $cari = mysqli_query($konek, "SELECT * FROM kos WHERE $harga kategori like '%$kategori%' AND alamat like '%$wilayah%' ") or die ('query cari gagal');

            if(mysqli_num_rows($cari) == 0 ){
            echo "<h2 style='color:red;margin-bottom:220px;margin-left:15px;'>Kriteria yang dicari tidak ada, coba opsi lainnya..</h2>";
            }else{
              while($row = mysqli_fetch_assoc($cari)){
            ?>
       <div class="container-fluid">
         <div class="row">
              <div class="col-lg-6 thumb">
                <a class="thumbnail" href="infokos.php?idkos=<?php echo $row['idkos']; ?>">
                  <img class="img-responsive" src="gambarkost/<?php echo $row['gambar']; ?>">
                  <pre class="utama" style="background-color:white;border: 0;padding: 0px;margin: 0px;border-radius: 0px;">
                  <p>Nama kos : <?php echo $row['namakos'] ?></p>
                  <p>Harga    : <span class="label label-danger">Rp. <?php echo $row['harga'] ?> / <?php echo $row['per']; ?></span></p>
                  <p>Kategori : <span class="label label-info"><?php echo $row['kategori']; ?></span></p>
                  <p>Alamat   : <span class="label label-info"><?php echo $row['alamat']; ?></span></p>
                  </pre>
                </a>
                </div>
                <?php
                }
                }
                 }
                ?>
                  </div>
            </div>
                <br> <br>
        <footer>  
          <div class="container">
          <hr>
            <div class="row">
              <div class="col-md-4" style="">
                 
              </div>
              <div class="col-md-12" id="tekscopy">
                <p>
                 <strong>Copyright <span style="font-size:1.15em;">&copy;</span> <span style="color:#1abc9c;"> E-KOSTBAND </span>2017</strong>
                </p>
              </div>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>
<script>
