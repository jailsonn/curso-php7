<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade para fixação</title>
</head>
<body>
	<h1>Atividade</h1>
	<p>Criar um aplicação capaz de indentificar se uma determinada pessoa pode ou não
		doar sangue.
	</p>

	<?php 
	// variáveis
	$idade = 40;
	$peso = 70.5;

	($idade >= 16 && $idade <= 69 && $peso >= 50) ? echo "Atende aos requisitos"; : echo "Não atende aos requisitos";

/*
	if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
		echo "Atende aos requisitos";
	} else {
		echo "Não atende aos requisitos";
	}
*/

	 ?>


</body>
</html>