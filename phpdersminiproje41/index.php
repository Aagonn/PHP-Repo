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
function Bir($IsimBir = "Özgür", $SoyisimBir = "Karakuş", $YasBir = 22){
    function Iki($IsimIki = "Özcan", $SoyisimIki = "Karakuş", $YasIki = 19){
        function Uc($IsimUc = "Umut", $SoyisimUc = "tan", $YasUc = 40) {
            echo $IsimUc . " " . $SoyisimUc . " Yaş : " . $YasUc;
        }
        Uc($IsimIki, $SoyisimIki, $YasIki);
    }
    Iki($IsimBir, $SoyisimBir, $YasBir);
}

Bir();
?>

</body>
</html>

