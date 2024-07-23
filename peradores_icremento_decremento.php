<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operadores de Incremento e Decremento</title>
</head>
<body>
	<h1>Operadores de Incremento e Decremento</h1>

	<h3>Pós-incremento</h3>
	<?php 

	// Pré-incremento(++$a) - Adiciona uma unidade ontes de retornar a $a
	// Pós-incremento($a++)
	// Pré-decremento(--$a)
	// Pós-decremento($a--)

	$a = 7;
	echo "O valor contido em a é $a <br />";
	echo 'O valor contido em a após  incremento é ' . $a++ . ' <br />';
	echo "O valor atualizado é $a";


	?>

	<h3>Pré-incremento</h3>
	<?php 
	$a = 7;
	echo "O valor contido em a é $a <br />";
	echo 'O valor contido em a pré  incremento é ' . ++$a . ' <br />';
	echo "O valor atualizado é $a";

	?>

	<h3>Pós-decremento</h3>
	<?php 
	$a = 7;
	echo "O valor contido em a é $a <br />";
	echo 'O valor contido em a pós o decremento é ' . $a-- . ' <br />';
	echo "O valor atualizado é $a";

	?>

	<h3>Pré-decremento</h3>
	<?php 
	$a = 7;
	echo "O valor contido em a é $a <br />";
	echo 'O valor contido em a pré  decremento é ' . --$a . ' <br />';
	echo "O valor atualizado é $a";

	?>

</body>
</html>