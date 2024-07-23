<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting tipos</title>
</head>
<body>
	<h1>Casting - troca de tipos nas variáveis</h1>

	<?php 

	// gettype() => espera um parametro, e retorna o tipo da variável

	$valor = true;

	// $valor = 15.35;
	// $valor2 = (real) $valor; //float, double, ou real
	// $valor2 = (string) $valor;

	// $valor2 = (int) $valor; //integer,
	// $valor2 = (string) $valor; 

	// $valor2 = (boolean) $valor; //ou boolean ou bool

	// $valor2 = (int) $valor;

	// casting de casting
	$valor2 = (string) $valor;
	$valor3 = (int) $valor2;

	echo $valor. ' ' . gettype($valor);
	echo "<br />";
	echo $valor2. ' ' . gettype($valor2);
	echo "<br />";
	echo $valor3. ' ' . gettype($valor3);

	?>

</body>
</html>