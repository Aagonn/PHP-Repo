<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fonksiyonlar</title>
</head>
<body>

<?php
function Deneme(array $Deger): string {
    $Islem = implode("<br />", $Deger);
    return $Islem;
}

$Ornek = array("Enes", "Umut", "Samet", "Sezer");
$Sonuc = Deneme($Ornek);
echo $Sonuc;
?>

</body>
</html>
