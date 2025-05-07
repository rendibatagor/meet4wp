<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trapesium</title>
</head>
<body>
<a href="index.php">home</a>
<?php
$a = 10;
$b = 6;
$tinggi = 5;
$c = 4;
$d = 5;
$luas = 0.5 * ($a + $b) * $tinggi;
$keliling = $a + $b + $c + $d;
?>
    <h1>trapesium</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling = <?=$keliling; ?></h4>
    <img src="trapesium.png" alt="" srcset="">
</body>
</html>