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
$Renkler  = array("Siyah","Beyaz",array("mavi","Kırmızı", array("Özgür","Özcan","Sema")),"Yeşil");

echo"<pre>";
print_r($Renkler);
echo "</pre><br />";

list($A1 , $A2 , list($B1 , $B2 , list($C1 , $C2 , $C3)), $A3) = $Renkler;

echo $A1 . "<br />";
echo $A2 . "<br />";
echo $B1 . "<br />";
echo $B2 . "<br />";
echo $C1 . "<br />";
echo $C2 . "<br />";
echo $C3 . "<br />";
echo $A3 ;

?>
</body>

</html>