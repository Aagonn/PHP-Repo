<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="Content-Languange"content="tr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP'de Ön Tanımlı Sabitler</title>
</head>

<body>
    <?php
trait OzellikBir{
    function YazBir() { 
      $Deger1 = __TRAIT__ ;  
      echo $Deger1;
    }
    }
    trait OzellikIki{
    function YazIki () {
    $Deger2 = __TRAIT__; 
    echo $Deger2;
    }
}
    class ExtraEgitim{
    use OzellikBir;
    use OzellikIki;
    }
    $Islem = new ExtraEgitim;
    $Islem ->YazBir();
    echo "<br />";
    $Islem->YazIki();

?>
</body>

</html>