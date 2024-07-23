<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concatenação php</title>
</head>
<body>
	<?php 
		$nome = 'Jailson';
		$cor = 'verde';
		$idade = 30;
		$atividade_pref = 'caminhar';


		// (Operador .) para concatenar
		echo 'Olá ' . $nome . ', como vai, vi que a sua cor preferida é ' . $cor . ', e estou vendo que vc tambem possui ' . $idade . ' anos e que gosta de' . $atividade_pref;

		// Obs: Concatenação com aspas duplas
		echo'<br />';

		echo "Olá $nome ";

	 ?>

</body>
</html>