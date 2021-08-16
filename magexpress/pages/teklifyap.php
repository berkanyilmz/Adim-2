<!doctype html>
<html>
    <head>
    <title>title</title>
</head>
<body>
<?php

include '../veritabani/database.php';
$db = new Database;

$fiyat;
$id = $_GET["id"];
$urunisim = $_GET["urun"];

echo 'ID : ' . $id . "<br>";

if ($_GET["teklif"][0] != "") {
    echo "Teklifiniz başarı ile eklendi !";
    $fiyat = $_GET["teklif"][0];
    $db->teklifVer($fiyat, $id, $urunisim);
}
else {
    //Bu döngü teklif verilen ürünü bulmak için
    for ($i = 0; $_GET["teklif"][$i] == ""; $i++) {}}
$fiyat = $_GET["teklif"][$i];

if (isset($fiyat)) {
    $ekle = $db->teklifVer($fiyat, $id, $urunisim);
    echo 'Teklif başarı ile eklendi !';
}
else {
    echo 'Lütfen teklif veriniz !';
}



?>
    <p>Ana sayfaya dönmek için <a href="../index.php">tıklayınız.</a></p>
</body>
</html>


