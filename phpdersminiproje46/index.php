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
$Dizin = "./";
$DizinAc = opendir($Dizin);

if ($DizinAc) {
    while (($Oku = readdir($DizinAc)) !== false) {
        $DosyamiDizinmi = filetype($Dizin . $Oku);
        if ($DosyamiDizinmi == "file") {
            echo "Dizin Adı: " . $Oku . "<br />";
        }
    }
    closedir($DizinAc);
} else {
    echo "Dizin açma hatası!";
}
?>

</body>
</html>
