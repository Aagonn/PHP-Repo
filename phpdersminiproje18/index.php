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
$Isimler = array ("Özgür", "Özcan", array("Sezer"),"Enes", "Umut");
echo "<pre>";
print_r($Isimler);
echo "</pre>";

$Islem = array_unshift($Isimler[2], "Kırca", "Samet", "Metin");

echo "<pre>";
print_r($Isimler);
echo "</pre>";
echo "işlem isimli değişkenin içerisindeki 2 anahtarına sahip dzinin içerdiği veri : " . $Islem;
?>
</body>

</html>