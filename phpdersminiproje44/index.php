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
$Bilgiler = 'a:5:{s:4:"Isim";s:6:"Özgür";s:7:"Soyisim";s:7:"Karakuş";s:5:"Sehir";s:9:"Istanbul";s:3:"Yas";i:22;s:8:"Cinsiyet";s:5:"Erkek";}';

$Sonuc = serialize($Bilgiler);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
?>

</body>
</html>
