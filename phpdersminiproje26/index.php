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
$Saat = 20;
if(($Saat == 0)or($Saat == 1)or($Saat == 2)or($Saat == 3)or($Saat == 4)or($Saat == 5)or($Saat == 6)){
    echo "İyi Geceler.";
}elseif(($Saat == 7)or($Saat == 8)or($Saat == 9)){
    echo "Günaydın.";
}elseif (($Saat == 10)or($Saat == 11)or($Saat == 12)or($Saat == 13)or($Saat == 14)or($Saat == 15)or($Saat == 16)or($Saat == 17)){
    echo "İyi Günler.";
}elseif (($Saat == 18)or($Saat == 19)or($Saat == 20)or($Saat == 21)or($Saat == 22)or($Saat == 23)or($Saat == 24)){
    echo "İyi Akşamlar.";
}else {
    echo "belirtilen Değer ( {$Saat}) Bir Saat Dilimi Değildir.";
}
?>
</body>

</html>