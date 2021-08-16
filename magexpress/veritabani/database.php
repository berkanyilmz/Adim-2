<?php

class Database {

public function baglan() {
    $baglanti = mysqli_connect("localhost", "root", "123456789");
    mysqli_set_charset($baglanti, "UTF8");
    
    if (mysqli_connect_errno()) {
        die ("baglanti hatasi : " . mysqli_connect_error());
    }

    return $baglanti;
}

public function girisSorgu($kullaniciAdi, $sifre) {
    $conn = $this->baglan();
    $sorgu = mysqli_query($conn,"SELECT * FROM offers.kullanici WHERE kullanici_adi='$kullaniciAdi' and sifre='$sifre'");
    $sonuc = mysqli_fetch_array($sorgu);
    mysqli_close($conn);

    return $sonuc;

}

public function kayitYap($kullaniciAdi, $sifre) {
    $conn = $this->baglan();
    $sorgu = mysqli_query($conn, "SELECT * FROM offers.kullanici WHERE kullanici_adi='$kullaniciAdi'");
    $sonuc = mysqli_fetch_array($sorgu);
    $kullanici = $sonuc["kullanici_adi"];
    
    if ($kullanici != $kullaniciAdi) {
        mysqli_query($conn, "INSERT INTO offers.kullanici (kullanici_adi, sifre) VALUES('$kullaniciAdi', '$sifre')");
        return true;
    }
    else {
        return false;
    }
}

public function urunListele($catid) {
    $conn = $this->baglan();
    $sorgu = mysqli_query($conn, "SELECT * FROM offers.products WHERE categoryId='$catid'");
    mysqli_close($conn);
    return $sorgu;
}

public function teklifVer($teklif, $catid, $urun) {
    $conn = $this->baglan();
    mysqli_query($conn, "INSERT INTO offers.offers (productId, offerHead, offerValue, offerCreateTime) VALUES ('$catid', 'NULL', '$teklif', NOW())");
    
    $tarih = date("Y-m-d H:i:s", strtotime('+7days'));
    date_modify($tarih, "+7 day");
    mysqli_query($conn, "INSERT INTO offers.products (categoryId, productName, offerCreateTime, offerFinishedTime, productImage, productDescription, productSubDescription)"
            . "VALUES ('$catid', '$urun', NOW(), '$tarih', 'NULL', 'Lorem', 'Suspendisse')");
    
    mysqli_close($conn);
}

    }

?>