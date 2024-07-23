<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções String</title>
</head>
<body>
	<h1>Funções para manipular String</h1>
	<?php 

	$texto = 'Curso Completo de PHP';

	// string to lower(menusculo)
	echo $texto . '<br />';
	echo strtolower($texto);

	echo "<br />";
	// string to to upper(MAIUSCULO)
	echo $texto . '<br />';
	echo strtoupper($texto);


	echo "<hr />";
	// upper case first(Primeira M)
	echo $texto . '<br />';
	echo ucfirst($texto);


	echo "<hr />";
	//string lenght(tamanho da string contar)
	echo $texto . '<br />';
	echo strlen($texto);


	echo "<hr />";
	// string replace(supistitui, um string por outro)
	echo $texto . '<br />';
	echo str_replace('PHP', 'JavaScript', $texto);
	echo '<br />';
	// comum em banco de Dados, trocar (,) por (.)
	echo str_replace('.', ':', '22.200');


	echo "<hr />";
	// recupera trexo de uma string
	echo $texto . '<br />';
	// Curso Completo de PHP
	// 0,1,2,3,4,5 ... 20
	echo substr($texto, 1, 4);

	 ?>

</body>
</html>