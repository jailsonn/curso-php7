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
		// recuperação da data atual / data cirrente
		// dia/mes/ano horas:minutos
		echo date('d/m/Y - H:i');

		echo "<br />";
		// Definir timezone /Recuperar o timezone default da aplicação
		echo date_default_timezone_get();
		// Atualizar o timezone default da aplicação
		date_default_timezone_set('America/Sao_Paulo');
		echo "<br />";
		echo date('d/m/Y - H:i');

	 ?>

</body>
</html>