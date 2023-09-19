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
function Saydir(){
    $Sayi =1;
    while ($Sayi <= 50){
        echo $Sayi . "<br />";
        $Sayi++;
    }
}
echo "Fonksiyon 1. Defa Çağırıldı : <br />";
Saydir();
echo "Fonksiyon 2. Defa Çağırıldı : <br />";
Saydir();
echo "Fonksiyon 3. Defa Çağırıldı : <br />";
Saydir();
echo "Fonksiyon 4. Defa Çağırıldı : <br />";
Saydir();
echo "Fonksiyon 5. Defa Çağırıldı : <br />";
Saydir();

?>

</body>
</html>