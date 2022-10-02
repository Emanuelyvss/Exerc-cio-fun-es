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
    //d)completar com zeros a esquerda se a quantidade de dígitos for menor que 11. 
	echo '<h2>Formatação de CPF:</h2>';
	$cpf = "7777777";
	echo str_pad($cpf, 11, '0', STR_PAD_LEFT) . "<br>";
	//Use a função mb_strlen() para descobrir a quantidade de dígitos. 
	echo mb_strlen("7777777777") . "<br>";
	//E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.
	$cpf = "77777777777";
	$cpfFormatado = substr($cpf, 0, 3) . '.' .
		substr($cpf, 3, 3) . '.' .
		substr($cpf, 6, 3) . '-' .
		substr($cpf, 9, 2);
	echo "$cpfFormatado" . "<br>";
    ?>
</body>
</html>