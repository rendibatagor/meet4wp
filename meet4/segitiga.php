<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
<a href="index.php">home</a>
    <?php 
    $alas=8;
    $tinggi=10;
    $sisi1=6;
    $sisi2=8;
    $sisi3=10;
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;
    ?>

    <h1>segitiga</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling =<?=$keliling; ?> </h4>
    <img src="segitiga.png" alt="" srcset="">
</body>
</html>