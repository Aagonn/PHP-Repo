<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kontro Yapıları</title>
</head>

<body>
    <?php
$Ayadi = "Ocak";
if (($Ayadi=="Mart") or ($Ayadi=="Nisan") or($Ayadi=="Mayıs")):
     echo $Ayadi . " Ayı bir ilkbahar ayıdır.";
elseif (($Ayadi=="Haziran") or ($Ayadi=="Temmuz") or($Ayadi=="Ağustos")):
    echo $Ayadi . " Ayı bir yaz ayıdır.";
elseif (($Ayadi=="Eylül") or ($Ayadi=="Ekim") or($Ayadi=="Kasım")):
     echo $Ayadi . " Ayı bir sonbahar ayıdır.";
elseif (($Ayadi=="Aralık") or ($Ayadi=="Ocak") or($Ayadi=="Şubat")):
     echo $Ayadi . " Ayı bir kış ayıdır.";
else:
    echo "Girilen Değer ( { $Ayadi } )  bir ay adı değildir.";
endif;
?>
</body>

</html>