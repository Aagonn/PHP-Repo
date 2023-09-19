<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Döngüler</title>
</head>
<body>

<?php
$Esyalar = array ("Masa", "Sandalye","Dolap", "Halı","Koltuk");
foreach($Esyalar as $Deger){
    echo $Deger . "<br />";
    if ($Deger=="Dolap"){
        break;
    }
}
?>

</body>
</html>
