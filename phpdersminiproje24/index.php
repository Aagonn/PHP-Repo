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
$Dizil = array("Deger1" => "Özgür", "Deger2" => "Özcan", "Deger3" => "Enes");
$Dizi2 = array (0 => "Gökçe", "Deger2" => "Banu", 2 => "Aslı", 3 => "Derya", "Deger1" => "Hale"); 
$Dizi3 = array("Deger2" => "Sarn", "Mavi", "Beyaz", "Deger1" => "Siyah");
$YeniDizi = array_merge_recursive ($Dizil, $Dizi2, $Dizi3);
echo "<pre>";
print_r($Dizil);
echo "</pre>";
echo "<pre>";
print_r($Dizi2);
echo "</pre>";
echo "<pre>";
print_r($Dizi3);
echo "</pre>";
echo "<pre>";
print_r($YeniDizi);
echo "</pre>";
?>
</body>

</html>