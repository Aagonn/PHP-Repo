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
 $Deger = "Ödevi Yaptım.";

 $mesaj1 = "Tebrikler Yavuzlarla devam edebilrisin.";
 $mesaj2 = "Zayotem hayırlı olsun.";

 $sonuc = ($Deger= "Ödevi Yaptım.") ? $mesaj1 : $mesaj2;

 echo $sonuc;
?>
</body>

</html>