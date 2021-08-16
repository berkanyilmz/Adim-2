<html>
    <head>
    <title>title</title>
</head>
<body>
<?php

include '../veritabani/database.php';

session_start();
ob_start();
$_SESSION["kullanici"] = null;
  

        $database = new Database;
        $kullaniciAdi = $_GET["kullaniciadi"];
        $sifre = $_GET["sifre"];
        
        if ($kullaniciAdi == "root" and $sifre == "root") {
            $_SESSION["login"] = true;
            $_SESSION["kullanici"] = $kullaniciAdi;
            header("Location:admin.php");
        }
        
        $sorgu = $database->girisSorgu($kullaniciAdi, $sifre);
        echo $sorgu . "<br>";
        
        if (($sorgu["kullanici_adi"] == $kullaniciAdi) and ($sorgu["sifre"] == $sifre)) {
            $_SESSION["login"] = true;
            $_SESSION["kullanici"] = $kullaniciAdi;
            header("Location:../index.php");
        }
        else {
            echo 'Kullanıcı adı veya şifre hatalı';
        }

?>
</body>
</html>



