<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Diziler</title>
</head>

<body>
    <?php
$Isimler = array("Özgür","Özcan",array("ali","ahmet","ayşe","elif","enes","fatma"), "hakan","umut","sezer");
echo "<pre>";
print_r($Isimler);
echo "</pre>";
$AGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $AGostericininAnahtari . "<br />";
$AGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $AGostericininElemani . "<br /><br />";

next($Isimler[2]);

$BGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $BGostericininAnahtari . "<br />";
$BGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $BGostericininElemani . "<br /><br />";

next($Isimler[2]);

$CGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $CGostericininAnahtari . "<br />";
$CGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $CGostericininElemani . "<br /><br />";

prev($Isimler[2]);

$DGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $DGostericininAnahtari . "<br />";
$DGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $DGostericininElemani . "<br /><br />";

next($Isimler[2]);

$EGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $EGostericininAnahtari . "<br />";
$EGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $EGostericininElemani . "<br /><br />";

next($Isimler[2]);

$FGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $FGostericininAnahtari . "<br />";
$FGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $FGostericininElemani . "<br /><br />" ;

reset($Isimler[2]);

$GGostericininAnahtari = key($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $GGostericininAnahtari . "<br />";
$GGostericininElemani = current($Isimler[2]);
echo "Dizinin Varsayılan Gösterici Konumundaki Anahtarı : " . $GGostericininElemani;
?>
</body>

</html>
