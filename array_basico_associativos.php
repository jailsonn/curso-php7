<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Basico</title>
</head>
<body>
	<h1>Arrat Basico associativos php</h1>

	<?php 

	
	//associativos
	$lista_frutas = array(
		'a' => 'Banana',
		'b' => 'Maçã',
		'x' => 'Morango',
		'z' => 'Uva',
		'2' => 'Abacate');


	$lista_frutas['w'] = 'Goiaba';

	echo "<pre>";
	var_dump($lista_frutas);
	echo "</pre>";

	echo $lista_frutas['x'];
	echo $lista_frutas['2'];

	 ?>

</body>
</html>