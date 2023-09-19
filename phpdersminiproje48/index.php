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
$Icerik = "Merhaba benim adım Özgür Karakuş\nBen Yavuzlar takımı Üyesiyim.\nSiber Vatan";
$Dosya = "Belge.txt";
$DosyaAc = fopen($Dosya, "w");

if ($DosyaAc) {
    fwrite($DosyaAc, $Icerik);
    fclose($DosyaAc);
    echo "Dosya başarıyla oluşturuldu ve içeriği yazıldı.";
} else {
    echo "Dosya açma veya yazma hatası!";
}
?>

</body>
</html>

