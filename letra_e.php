<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$fahrenheit = 90;
$celsius = ($fahrenheit - 32) / 18;
$celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
echo "A temperatura em fahrenheit de 90º já em Celsius é de :" . $celsius;
echo "<br>";
$fahrenheit = 77;
$celsius = ($fahrenheit - 32) / 18;
$celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
echo "A temperatura em fahrenheit de 77º já em Celsius é de :" . $celsius;
echo "<br>";
$fahrenheit = 52;
$celsius = ($fahrenheit - 32) / 18;
$celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
echo "A temperatura em fahrenheit de 52º já em Celsius é de :" . $celsius;
echo "<br>";
$fahrenheit = 12;
$celsius = ($fahrenheit - 32) / 18;
$celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
echo "A temperatura em fahrenheit de 12º já em Celsius é de :" . $celsius;
?>

</body>
</html>