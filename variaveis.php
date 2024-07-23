<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variáveis</title>
</head>
<body>
	<?php 
	// string
	$nome = 'Jailson da Silva';

	// int
	$idade = 29;

	// float
	$peso = 82.5;


	// boolean
	$fumante_sn = true;

	?>

	<h1>Ficha cadastral</h1>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Fumante: <?= $fumante_sn ?></p>


</body>
</html>