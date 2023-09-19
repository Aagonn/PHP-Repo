<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kontro Yapıları</title>
</head>

<body>
<?php
$Gelenisimdegeri = $_REQUEST["Kullaniciismi"] ?? "Hata";
$Gelensoyisimdegeri = $_REQUEST["Kullanicisoyadi"] ?? "Hata";
echo "Formdan Gelen Isim Değeri : " . $Gelenisimdegeri . "<br />";
echo "Formdan Gelen Soyisim Değeri : " . $Gelensoyisimdegeri . "<br />";
?>
</body>

</html>