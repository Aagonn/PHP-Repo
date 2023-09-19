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
$Deger = "Özgür Karakuşt"; 
$DegerIcerigininIlkVeriTuru = gettype($Deger); 

echo "İçeriğin İlk Hali : " . $Deger . "<br />";
echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";

settype($Deger, "boolean"); 
$DegerIcerigininSonVeriTuru = gettype($Deger);

echo "İçeriğin Son Hali : " . $Deger . "<br />";
echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininSonVeriTuru;
?>

</body>
</html>
