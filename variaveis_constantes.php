<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variáveis Constantes</title>
</head>
<body>
	<?php 
// Variáveis Constantes (SEMPRE MAIUSCULA)
	define('BD_URL', 'endereco_bd_dev');
	define('BD_USUARIO', 'usuario_dev');
	define('BD_SENHA', 'senha_dev');

	// para recuperar variável constante nao precisa usar o $
	echo BD_URL . '<br>';
	echo BD_USUARIO . '<br>';
	echo BD_SENHA;

	?>

</body>
</html>