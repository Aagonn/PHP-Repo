<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Veri Türleri</title>
</head>
<body>

<?php
$dosya = "Dosya.txt";
$dosyaac = fopen($dosya, "r");

if ($dosyaac) {
    $OKU = fgets($dosyaac);
    echo $OKU;
    fclose($dosyaac);
} else {
    echo "Dosya açma hatası!";
}
?>

</body>
</html>

