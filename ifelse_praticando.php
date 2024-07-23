<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>if else praticando</title>
</head>
<body>
	<?php 
		// se cliete tem cartao da loja e a compra maior ou igual a 400, frete gratis.
		$usuario_possui_cartao_loja = true;
		$valor_compra = 450;
		$valor_frete = 50;
		$recebeu_desconto_frete = true;


		if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
			// recupera a variavel com o novo valor do frete
			$valor_frete = 0;
			

		} else if($usuario_possui_cartao_loja && $valor_compra >= 300) {
			$valor_frete = 10;
			

		} else if($usuario_possui_cartao_loja && $valor_compra >= 100) {
			$valor_frete = 25;
			
		} else {
			$recebeu_desconto_frete = false;
		}
	 ?>

	 <h1>Detalhes do pedido</h1>
	 <p>Possui cartão da loja?
	 	<?php 
	 		if ($usuario_possui_cartao_loja) {
	 			echo "SIM";
	 		} else {
	 			echo "NÃO";
	 		}
	 	 ?>
	 	
	 </p>

	 <p>Valor da compra: <?= $valor_compra ?></p>

	 <p>Recebeu desconto no frete?
	 	<?php 
	 		if ($recebeu_desconto_frete) {
	 			echo "SIM";
	 		} else {
	 			echo "NÃO";
	 		}
	 	 ?>
	 	
	 </p>

	 <p>Valor do frete: <?= $valor_frete ?></p>


</body>
</html>