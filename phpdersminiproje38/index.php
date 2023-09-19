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
$Deger = "Yavuzlar";
if ($Deger=="Zayotem"){
function Yaz(){
    echo "Merhaba Zayotem Takımı";
}
}elseif($Deger=="Cuberium"){
    function Yaz(){
        echo "Merhaba Cuberium takımı";

    }
}elseif($Deger=="Yavuzlar"){
    function Yaz(){
        echo "HEY TAKIM! NABER?";
    }
    }
Yaz()
;?>

</body>
</html>