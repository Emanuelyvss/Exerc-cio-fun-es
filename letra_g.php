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


if ($num_inteiro = array(10, 20, 30, 40)) {

    foreach ($num_inteiro as $value) {

        echo "Os números cadastrados no sistema: " . "$value <br>";
    }

    echo " A soma dos valores cadastrados é de" . " " . array_sum($num_inteiro);
}
echo "<br>";


?>
</body>
</html>