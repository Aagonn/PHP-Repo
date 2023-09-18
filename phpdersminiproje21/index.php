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
$Isimler = array ("özgür", "özcan", array("enes","umut"), "sezer");

echo "<pre>";
print_r($Isimler);
echo "</pre><br /><br />";

$Sonuc = end($Isimler[2]);
echo "Dizi Göstericisinin Son Konumundaki Eleman Değeri : " . $Sonuc;

?>
</body>

</html>