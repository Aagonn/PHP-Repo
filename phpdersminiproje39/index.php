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
function ParaBirimi($Birim, $Tutar) {
    if ($Birim == "Türk Lirası") {
        $Kur = 1;
    } elseif ($Birim == "Amerikan Doları") {
        $Kur = 27.87;
    } elseif ($Birim == "Euro") {
        $Kur = 31.02;
    } else {
        $Kur = 0;
    }
    Hesapla($Birim, $Kur, $Tutar);
}

function Hesapla($BirimBilgisi, $KurBilgisi, $TutarBilgisi) {
    $Sonuc = $KurBilgisi * $TutarBilgisi;
    echo $TutarBilgisi . " Tutarlı " . $BirimBilgisi . " Karşılığı Türk Lirası Değeri : " . $Sonuc . "TL<br />Kur : " . $KurBilgisi;
}

ParaBirimi("Amerikan Doları", 1000);
?>

</body>
</html>
