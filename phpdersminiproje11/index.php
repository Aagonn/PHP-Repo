<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP'de Sabitler</title>
</head>

<body>
    <?php
define("ISIM", "Ögür");
const SOYISIM = "KARAKUŞ";
$FirmaAdi = "PHP Eğitimi:";
define("SONUC", $FirmaAdi. " " . ISIM ." " . SOYISIM);
echo SONUC;
?>
</body>

</html>