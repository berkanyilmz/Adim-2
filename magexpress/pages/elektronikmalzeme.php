<!doctype html>
<html>
    <head>
    <title>ELEKTRONİK MALZEME</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
                <li><a href="pages/kayitol.php">Kayıt Ol</a></li>
                <li><a href="pages/giris.php">Giris Yap</a></li>
                <li><a href="oturum/admin.php">Admin Sayfası</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="../index.php">SANAYI<strong>PAZARIM</strong></a></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="../index.php">ANA SAYFA</a></li>
            <li><a href="demircelik.php" >DEMİR ÇELİK</a></li>
            <li><a href="elektronikmalzeme.php">ELEKTRONİK MALZEME</a></li>
            <li><a href="elektronikmotor.php">ELEKTRONİK MOTOR</a></li>
            <li><a href="reduktor.php">REDÜKTÖR</a></li>
            <li><a href="rulman.php">RULMAN, KEÇE VE KAYIŞ</a></li>
            <li><a href="hirdavat.php">HIRDAVAT</a></li>
            <li><a href="lazer.php">LAZER KESİM VE PLAZMA ÜRÜNLERİ</a></li>
            <li><a href="sanayi.php">SANAYİ MAKİNALARIR</a></li>
            <li><a href="kalip.php">KALIP SANAYİ</a></li>
            <li><a href="disli.php">DİŞLİ SANAYİ</a></li>
            <li><a href="aluminyum.php">ALÜMİNYUM</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <?php
    include '../veritabani/database.php';
    $db = new Database;
    ?>
  <section id="mainContent">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <table class="table">
              <tr>
                  <th>Ürün ID</th>
                  <th>Ürün İsmi</th>
                  <th>Teklif Tarihi</th>
                  <th>Teklif Bitiş Tarihi</th>
                  <th>Görüntü</th>
                  <th>Açıklama</th>
                  <th>Alt Açıklama</th>
                  <th>Teklifiniz</th>
              </tr>
              <?php 
                  $id = 2;
                  $sorgu = $db->urunListele($id);?>
              <form action="teklifyap.php" method="GET">
                  <?php while ($urun = mysqli_fetch_assoc($sorgu)) {?>
              <tr>
                  <td><?php echo $urun["categoryId"]; ?></td>
                  <td><?php echo $urun["productName"]; ?></td>
                  <td><?php echo $urun["offerCreateTime"]; ?></td>
                  <td><?php echo $urun["offerFinishedTime"]; ?></td>
                  <td> <img src="<?php $urun["productImage"];?>" width="80" height="80"></td>
                  <td><?php echo $urun["productDescription"]; ?></td>
                  <td><?php echo $urun["productSubDescription"]; ?></td>
                  <td><input type="text" name="teklif[]"><?php } ?></td>
              </tr>
              <input type="hidden" name="id" value="2">
              <input type="hidden" name="urun" value="ELEKTRONİK MALZEME">
              <tr><td><input type="submit" value="Teklif Ver"></td></tr>
              </form>
              
          </table>
      </div>
    </div>
  </section>
</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>