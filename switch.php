<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch case</title>
</head>
<body>
	<h1>Switche case na pratica.</h1>

	<?php 

	$parametro = 2;

	// Obs: no php, o tipo de verificação é por igualdade == exp: 1 == $parametro:
	// no javascript é por identidade===.

	switch ($parametro) {
		case 1:
			echo "Entrou no case 1...";
		break;

		case 2:
			echo "Entrou no case 2...";
		break;

		case 3:
			echo "Entrou no case 3...";
		break;
		
		default:
			echo "Não Entrou em nem um parametro...";
			// Se não...opcional como o else
		break;
	}

	?>

</body>
</html>