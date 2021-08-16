<html>
    <head>
    <title>title</title>
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
    <div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">

            <!--Üst Menü -->
            <ul class="top_nav">
                <li><a href="admin.php">Admin Sayfası</a></li>
                <li><a href="cikis.php">Çıkış</a></li>
            </ul>
            <!--Üst Menü -->


          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">SANAYİ<strong>PAZARIM</strong></a></div>
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
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">DEMİR ÇELİK</a></li>
            <li><a href="pages/single.html">ELEKTRONİK MALZEME</a></li>
            <li><a href="pages/contact.html">ELEKTRONİK MOTOR</a></li>
            <li><a href="pages/404.html">REDÜKTÖR</a></li>
            <li><a href="pages/404.html">RULMAN, KEÇE VE KAYIŞ</a></li>
            <li><a href="pages/404.html">HIRDAVAT</a></li>
            <li><a href="pages/404.html">LAZER KESİM VE PLAZMA ÜRÜNLERİ</a></li>
            <li><a href="pages/404.html">SANAYİ MAKİNALARIR</a></li>
            <li><a href="pages/404.html">KALIP SANAYİ</a></li>
            <li><a href="pages/404.html">DİŞLİ SANAYİ</a></li>
            <li><a href="pages/404.html">ALÜMİNYUM</a></li>
          </ul>
        </div>
      </div>
    </nav>
      <?php
      session_start();
      $baglanti = mysqli_connect("localhost", "root", "123456789");
      $sorgu = mysqli_query($baglanti, "SELECT * FROM offers.offers");
    ?>
    <table class="table">
<thead>
    <tr>
        <th>Ürün ID</th>
        <th>Açıklama</th>
        <th>Teklif</th>
        <th>Teklif Oluşturma Tarihi</th>
    </tr>
</thead>
<?php
if (isset($_SESSION["kullanici"])) {
    while ($sonuc = mysqli_fetch_assoc($sorgu)) {
?>
               <tbody>
                   <tr>
                       <td><?php echo $sonuc["productId"];?></td>
                       <td><?php echo $sonuc["offerHead"]; ?></td>
                       <td><?php echo $sonuc["offerValue"]; ?></td>
                       <td><?php echo $sonuc["offerCreateTime"];?></td>
<?php }} else { ?>     <td><?php echo 'BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK ! GÖRÜNTÜLEMEK İÇİN GİRİŞ YAPINIZ';}?></td>
                   </tr>
               </tbody>
           </table>
  </div>
</div>

            

<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>

