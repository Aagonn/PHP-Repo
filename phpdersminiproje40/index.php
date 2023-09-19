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
function Bir(){
    $Sayi = 0;
    $Sayi = $Sayi + 1;
    echo "Say Değeri : $Sayi <br />";
}

Bir();
Bir();
Bir();
Bir();
Bir();
echo "<br /><br />";

function Iki(){
    static $Rakam = 0;
    $Rakam = $Rakam + 1;
    echo "Say Değeri : $Rakam <br />";
}

Iki();
Iki();
Iki();
Iki();
Iki();
Iki();
Iki();
Iki();
Iki();
Iki();
?>

</body>
</html>
