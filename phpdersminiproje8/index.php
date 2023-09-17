<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Super Global</title>
</head>

<body>
    <?php
$_SESSION["Ad"] = "özgür";
$_SESSION["Soyad"] = "Karakuş";
?>
</body>

</html>