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
$Isimler [] ="Arda";
$Isimler["HTML5Egitmeni"] ="Özgür";
$Isimler ["CSS3Egitmeni"] ="Özcan";
$Isimler [] = "Enes";
$Isimler ["XmlEgitmeni"] ="Umut";

echo "<pre>";
print_r($Isimler);
echo "</pre><br /><br />";

echo $Isimler[0]."<br />";
echo $Isimler ["HTML5Egitmeni"] . "<br />";
echo $Isimler ["CSS3Egitmeni"] . "<br />";
echo $Isimler[1] . "<br />";
echo $Isimler ["XmlEgitmeni"];
?>
</body>

</html>