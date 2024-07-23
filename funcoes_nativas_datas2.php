<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Funções_nativas_datas</title>
</head>
<body>
	<h1>Funções nativas para manipular datas</h1>

	<?php 	

		// Calcular Data
	$data_inicial = '2018-04-24';
	$data_final = '2018-05-15';

	// timestamp
	// 01/01/1970  --2018-04-24  /Importante ano mes e dia

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	echo $data_inicial . ' - ' . $time_inicial;
	echo "<br />";
	echo $data_final .' - '. $time_final;


	// Calculando o tempo inicial - o tempo final
	$diferenca_times = $time_final - $time_inicial; //abs

	echo "<br />";
	echo ' a diferença é: ' . $diferenca_times;


	echo "<br />";
	$segundos_existem_dia = 24 * 60 * 60;
	echo 'Um dia possui: ' . $segundos_existem_dia . ' segundos';

	$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
	echo "<br />";
	echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;
	?>

</body>
</html>