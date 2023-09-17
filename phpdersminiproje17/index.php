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
$Degerler = array (
    "Özgür",
    "Özcan",
    array (
        "Mavi",
        array(
            array(
                "Halı",
                "Kilim",
                "Battaniye"
            ),
            "Masa",
            "Samdaliye"
        ),
        "Sarı",
        "Kırmızı",
        "Siyah"
    ),
    array(
        "PHP",
        "JS",
        "HTML",
        "CSS",
        "ASP",
        array(
            "photoshop",
            "corel",
            "paint"
        ),
        "XML"
    ),
    "Futbol Topu",
    "Basketbol Topu"
);

echo "<pre>";
print_r($Degerler);
echo "</pre><br />";

echo $Degerler[0] . "<br />";
echo $Degerler[1] . "<br />";
echo $Degerler[2][0] . "<br />";
echo $Degerler[2][1][0][0] . "<br />";
echo $Degerler[2][1][0][1] . "<br />";
echo $Degerler[2][1][0][2] . "<br />";
echo $Degerler[2][1][1] . "<br />";
echo $Degerler[2][1][2] . "<br />";
echo $Degerler[2][2] . "<br />";
echo $Degerler[2][3] . "<br />";
echo $Degerler[2][4] . "<br />";
echo $Degerler[3][0] . "<br />";
echo $Degerler[3][1] . "<br />";
echo $Degerler[3][2] . "<br />";
echo $Degerler[3][3] . "<br />";
echo $Degerler[3][3] . "<br />";
echo $Degerler[3][5][0] . "<br />";
echo $Degerler[3][5][1] . "<br />";
echo $Degerler[3][5][2] . "<br />";
echo $Degerler[3][6] . "<br />";
echo $Degerler[4] . "<br />";
echo $Degerler[5] . "<br />";


?>
</body>

</html>