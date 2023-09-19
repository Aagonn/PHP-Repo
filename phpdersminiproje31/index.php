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
$Deger = 3;
if ($Deger==1){
goto Genel ;
}elseif ($Deger==2){
goto Yönetim ; 
}elseif ($Deger==3){
    goto Eğitimci ;
}else {
    goto Diger;
}
 Genel :

 echo "özgür karakuş<br />";

 Yönetim :

 echo "özcan karakuş<br />";
 echo "enes yıldız<br />";

 Eğitimci :

 echo "umut tan<br />";
 echo "elif polat<br />";

 if(($Deger!=1) and ($Deger!=2) and ($Deger!=3)) {
    Diger :
    echo "Kişi yok.";
 }
?>
</body>

</html>