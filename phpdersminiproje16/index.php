<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Diziler</title>
</head>

<body>
    <?php
$Isimler = array("Deger1" => "özgür","Deger2" => "özcan");
$Renkler = array("Deger3" => "mavi", "Deger4" => "siyah" , "Deger5" => "Pembe");
$Araclar = array("Deger6" => "YürüyenUçak" , "Deger7" => "Tren" , "Deger8" => "Araba");
$Esyalar = array("Deger9" => "Masa" , "Deger10" => "Sandalye");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

echo "<pre>";
print_r($Araclar);
echo "</pre><br />";

echo "<pre>";
print_r($Esyalar);
echo "</pre><br />";

$Sonuc = $Isimler + $Renkler + $Araclar + $Esyalar;

echo "<pre>";
print_r($Sonuc);
echo "</pre><br />";

echo $Sonuc["Deger1"] . "<br />";
echo $Sonuc["Deger2"] . "<br />";
echo $Sonuc["Deger3"] . "<br />";
echo $Sonuc["Deger4"] . "<br />";
echo $Sonuc["Deger5"] . "<br />";
echo $Sonuc["Deger6"] . "<br />";
echo $Sonuc["Deger7"] . "<br />";
echo $Sonuc["Deger8"] . "<br />";
echo $Sonuc["Deger9"] . "<br />";
echo $Sonuc["Deger10"];
?>
</body>

</html>