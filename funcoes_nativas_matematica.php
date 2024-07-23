<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções nativas matemáticas</title>
</head>
<body>
	<h1>Funções nativas para tarefas matemáticas</h1>

	<?php 
	// ceil($numero) -> Arredonda o valor para cima
	// floor($numero) -> Arredonda o valor para baixo
	// round($numero) -> Arredonda o valor com base nas casas decimais
	// rand() -> Gera u inteiro aleatório
	// sqrt($numero) -> Retorna a raiz quadrada

	// $num = 7.4;

	// echo ceil($num); //muito cuidados com valores negativos -2.45
	// echo floor($num) //baixo
	// echo round($num) // base na fração(.0 e .4 -> baixo / .5 -> cima)

	// echo rand(10, 20); //gerar um valor aleatório (0 até randmax)
	// echo "<br />";
	// echo getrandmax();

	echo sqrt(25);

	 ?>

</body>
</html>