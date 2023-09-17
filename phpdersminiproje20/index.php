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

$Isimler =array("özgür", "özcan" , "enes" , "umut", "sezer");
echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Ilkelemanisil = array_shift($Isimler);
$Sonelemanisil = array_pop($Isimler);

echo "<pre>";
print_r($Isimler);
echo "</pre>";

echo "Silinen İlk Elemanın Değeri : " . $Ilkelemanisil . "<br />";
echo "Silinen Son Elemanın Değeri : " . $Sonelemanisil;


?>
</body>

</html>