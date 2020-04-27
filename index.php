<?php
include ('fungsi/koneksi.php');
include ('fungsi/ekost.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-Kost adalah Portal website yang memberikan informasi seputar tempat kos di 
	area Bandung dan sekitarnya dengan tujuan untuk mempermudah masyarakat dalam mencari kost secara cepat dan efisien.">
    <meta name="author" content="kelompokunyu">
    <title>E-KOSTBAND| Informasi Kostan Bandung</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
    <script src="plugins/lazyload/lazyloadxt.min.js"></script>
    <link rel="stylesheet" href="plugins/lazyload/jquery.lazyloadxt.spinner.css">
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="icon" href="dist/favicon.ico">
    <link rel="stylesheet" href="dist/css/thumbnail-gallery.css">
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link href="plugins/slider/dist/jquery.bxslider.css" rel="stylesheet" />
    <script src="plugins/slider/dist/jquery.bxslider.min.js"></script>
    <script src="plugins/pace/pace.js"></script>
<link href="plugins/pace/pace.css" rel="stylesheet" />
<script data-pace-options='{ "ajax": false }' src='pace.js'></script>

<style media="screen">
.bx-wrapper .bx-prev{
background: url('plugins/slider/images/controls.png') no-repeat 0 -32px;
}
.bx-wrapper .bx-next{
background: url('plugins/slider/images/controls.png') no-repeat -43px -32px;
}
@media screen and (max-width: 1200px){
  .thumb{
    width: 100%;
    display: block;
    text-align: center;
  }
}
@media screen and (max-width: 1200px){
.kricari {
  width: 100%;
  display: block;
  margin-bottom: 8px;
}
}
.row { margin: 0; padding: 0 }
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
                  <a class="navbar-brand" href="index.php"><strong>E - KOSTBAND</strong></a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
				 <li>
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
				
                    <li>
                        <a href="caradaftarkost.php"><i class="fa fa-bullhorn"></i> Daftarkan Kost</a>
                    </li>
                   
                    <li>
                        <a href="daftaruser.php"><i class="fa fa-clipboard"></i> Registrasi</a>
                    </li>
					<li>
                        <a href="Tentang.php"><i class="fa fa-hand-o-right"></i> Tentang</a>
                    </li>
					 <li>
                        <a href="userlogin.php"><i class="fa fa-user"></i> Login</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="container">
      <ul class="bxslider">
       
        <li><img src="dist/gambarkos/slider2.JPG" style="width:1200px; height:400px;" alt="gambar"/></li>
        <li><img src="dist/gambarkos/slider3.JPG" style="width:1200px; height:400px;" alt="gambar"/></li>
        <li><img src="dist/gambarkos/slider4.JPG" style="width:1200px; height:400px;" alt="gambar"/></li>
      </ul>
    </div>

       <div class="container">
        <div class="row">
            <div class="col-md-12"><form action="cari.php" method="GET">
                <h3 class="page-header">Cari Berdasarkan
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
                                  </select> <button type="submit" name="pencarian" class="btn btn-info kricari"><i class="fa fa-search"></i> Cari</button></h3>
                                  </form>
                 </div>
             </div>
        </div>

            <?php
            $tampil = tampilkos();
            $perPage = 9;
            $page = isset($_GET["p"]) ? (int)$_GET["p"] : 0;
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $kos = "SELECT * FROM kos ORDER BY idkos DESC LIMIT $start, $perPage ";
            $total = mysqli_num_rows($tampil);
            $pages = ceil($total/$perPage);
            $res2 = mysqli_query($konek, $kos);
            ?>

            <div class="container">
                    <div class="row">
                      <?php while($row = mysqli_fetch_assoc($res2)){ ?>
                         <div class="col-lg-4 thumb">
                            <a class="thumbnail" href="infokos.php?idkos=<?php echo $row['idkos']; ?>">
                                <img class="lazy-hidden img-responsive" style="width:400px; height:300px;" alt="prevkost" data-src="gambarkost/<?php echo $row['gambar'];?>">
                                <br>
                                <p>Nama Pemilik : <?php echo $row['namakos'] ?></p>
                                <p>Harga : Rp <?php echo $row['harga'] ?> / <?php echo $row['per'] ?></p>
                                <p>Kategori : <span class="label label-info"><?php echo $row['kategori'] ?></span></p>
                            </a>
                        </div>
                     <?php } ?>
                     </div>
            </div>

        <div class="row">
        <div class="col-md-12">
        <center>
          <ul class="pagination">
            <?php for($i=1; $i<=$pages;$i++) {
                if ($page == $i)
                    echo "<li class='active' >";
                else
                    echo "<li>";
            echo "<a href='index.php?p=$i'>$i</a></li>";
            ?>

              <?php } ?>
          </ul>
          </center>
        </div>
        </div>

        <br>
        <footer>
          <div class="container">
          <hr>
            <div class="row">
              <div class="col-md-4" style="margin-bottom:50px;">
                 
              </div>
            </div>
            <div class="row">
            <div class="col-md-12" id="tekscopy">
              <p>
               <strong>Copyright <span style="font-size:1.15em;">&copy;</span> <span style="color:#1abc9c;">E-KOSTBAND</span> 2017</strong>
              </p>
            </div>
             </div>
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
<script type="text/javascript">
  pace.start();
</script>
