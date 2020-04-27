<?php
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');

$tampil = tampilkosperid($_GET['idkos']);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="kelompokunyu">

    <title>E - KOSTBAND | Info Kos</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/thumbnail-gallery.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="plugins/slider/dist/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="dist/css/thumbnail-gallery.css">
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link href="plugins/slider/dist/jquery.bxslider.css" rel="stylesheet" />

<style media="screen">
  body{
    font-size: 1.3em;
  }
.navbar-inverse .navbar-nav > li > a{
  color: #fff;
}
.navbar-inverse .navbar-nav > li > a:hover{
  background-color: #fff;
  color: #5f5f5f;
}
.navbar-inverse .navbar-brand{
  color: #fff;
}
.bx-wrapper .bx-prev{
  background: url('plugins/slider/images/controls.png') no-repeat 0 -32px;
}
.bx-wrapper .bx-next{
  background: url('plugins/slider/images/controls.png') no-repeat -43px -32px;
}
#tekscopy{text-align: center;}
#deskripinfo{text-align: left;}
hr{
  border-width: 4px;
  color:#333;
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
                        <a href="caradaftarkost.php"><i class="fa fa-bullhorn"></i> Daftarkan Kost</a>
                    </li>
                    <li>
                        <a href="userlogin.php"><i class="fa fa-user"></i> Login</a>
                    </li>
                    <li>
                        <a href="daftaruser.php"><i class="fa fa-clipboard"></i> Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <br>
            <br>
            <?php
            while($row = mysqli_fetch_assoc($tampil)){
             ?>
            <div class="col-lg-6">
                    <img class="img-responsive" src="gambarkost/<?php echo $row['gambar'] ?>" alt="">
            </div>
            <div class="container">
              <div class="col-lg-6" id="deskripinfo">
              <pre style="background-color:white;border: 0;padding: 5px;margin: 0px;border-radius: 0px;">
                  <p>Nama Pemilik    : <?php echo $row['namakos'] ?></p>
                  <p>No Telphone     : <?php echo $row['no_telp'] ?></p>
                  <p>Alamat          : <?php echo $row['alamat'] ?></p>
                  <p>Harga           : Rp<?php echo $row['harga'] ?> / <?php echo $row['per'] ?> </p>
                  <p>Kategori        : <?php echo $row['kategori'] ?></p>
                  <p>Deskripsi       : <?php echo $row['deskripsi'] ?></p>
              </pre>
            </div>
            </div>
        
            <?php } ?>
        </div>


        <footer style="margin-top:120px;">
          <hr>
            <div class="row">
              <div class="col-md-4">
                  <p>E-Kost adalah Portal website yang memberikan informasi seputar tempat kos di area purwokerto dan sekitarnya dengan tujuan untuk mempermudah masyarakat dalam mencari kost yang tepat.</p>
              </div>
            </div>
            <div class="col-md-12" id="tekscopy">
              <p>
                Copyright @ <span style="color:#1abc9c;">E-KOSTBAND </span>2017
              </p>
            </div>
        </footer>
    </div>
</body>
</html>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true,
    mode : 'fade',
    infiniteLoop : true,
    speed : 350
  });
});
</script>
