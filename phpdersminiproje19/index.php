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
$Isimler =array("ali","ahmet","ayşe");
echo"<pre>";
print_r($Isimler);
echo "</pre>";

array_push($Isimler, "Ögür", "özcan");

echo"<pre>";
print_r($Isimler);
echo "</pre>";
?>
</body>

</html>