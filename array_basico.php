<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Basico</title>
</head>
<body>
	<h1>Arrat Basico php</h1>

	<?php 

	// sequenciais (numéricos)
	// $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
	// ou
	$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

	// adicionando
	$lista_frutas[] = 'Abacaxi';

	// exibir por indice
	echo $lista_frutas[2];

	// para debugar o array passamos
	echo "<pre>";
	var_dump($lista_frutas);
	echo "</pre>";
	echo "<br />";
	echo "<pre>";
	print_r($lista_frutas);
	echo "</pre>";




	//associativos


	 ?>

</body>
</html>