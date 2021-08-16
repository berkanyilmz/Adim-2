<!DOCTYPE html>
<html>
    <head>
    <title>title</title>
</head>
<body>
<?php
include '../veritabani/database.php';

$veritabani = new Database;
$kullaniciAdi = $_GET["kullaniciadi"];
$sifre = $_GET["sifre"];
$flag = $veritabani->kayitYap($kullaniciAdi, $sifre);

if($flag) {?>
    <a href="../index.php"><?php echo 'Kayıt Başarılı ! Anasayfaya dönmek için tıklayınız'; ?></a>
<?php
}
else {?>
    <a href="kayitol.php"><?php echo 'Kullanıcı adı daha önce alınmış ! Bir önceki sayfaya dönmek için tıklayınız'; ?></a>
<?php
}
?>



</body>
</html>

