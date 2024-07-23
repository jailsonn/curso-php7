<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções</title>
</head>
<body>
	<h1>Funções</h1>

	<?php 
	// void (sem retorno)
	function exibirBoasVindas() {
		echo "Bem vindo ao curso de PHP!";
	}

	exibirBoasVindas();
	
	echo "<br />";
	echo "--------------------------------------------";
	echo "<br />";

	// return (com retorno)
	function calcularAreaTerreno($largura, $comprimento) {
		$area = $largura * $comprimento;
		return $area;

	}

	// echo calcularAreaTerreno(30, 10);
	// ou atribuir o retorno a uma variável
	$resultado = calcularAreaTerreno(30, 12);
	echo $resultado;

	 ?>

</body>
</html>