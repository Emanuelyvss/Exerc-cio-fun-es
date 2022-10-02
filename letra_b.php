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
    //b) inverter o conteúdo de um vetor qualquer.
	echo '<h2>Inverter valor:</h2>';
	function Reverse($valor)
	{
		return strrev($valor);
	}
	$valor = "123456789";
	echo Reverse($valor) . "<br>";
    ?>
</body>
</html>