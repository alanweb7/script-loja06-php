<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<table class="table tabela_boa" >

	<thead>
		<tr>
			<th style='width:30px;'></th>
			<th>PRODUTO</th>
			<th></th>
			<th style='text-align:center;' >VALOR</th>
			<th style='text-align:center; width:50px;' >QUANTIDADE</th>
			<th style='text-align:center; width:120px;' >TOTAL</th>

		</tr>
	</thead>

	<?php

	$n = 0;

	foreach ($carrinho['lista'] as $key => $value) { 

		echo "
		<tr>

		<td>
		<div class='carrinho_lista_remover' ><a href='#' onClick=\"remove_carrinho('".$value['id']."');\" ><i class='fa fa-times' aria-hidden='true'></i></a></td></div>
		</td>

		<td colspan='2' >
		<div class='carrinho_lista_imagem' style='background-image:url(".$value['imagem'].");' ></div>
		<div class='carrinho_lista_texto' ><div style='padding-left:15px; padding-right:15px;'>".$value['titulo']."</div></div>
		</td>

		<td style='text-align:center;' >
		<div class='carrinho_lista_valor' >R$ ".$value['total_unitario']."</div>
		</td>

		<td style='width:200px;' >
		<div style='margin-top:30px; text-align:center;'>
		<input class='carrinho_quantidade_input' name='quantidade_".$value['id']."' id='quantidade_".$value['id']."' value='".$value['quantidade']."' onkeypress='Mascara(this,Integer)' onKeyDown='Mascara(this,Integer)' >
		<button type='button' class='botao_padrao ".$botao_css."' onClick=\"altera_quantidade('".$value['id']."')\" >Alterar</button>		 
		</div>
		</td>

		<td style='text-align:center; width:120px;' >
		<div class='carrinho_lista_valor' >R$ ".$value['total_quantidade']."</div>
		</td>

		</tr>
		";

		$n++;
	}

	if($n != 0){

		echo "
		<tr>
		<td colspan='5' style='text-align:right; ' >SUB-TOTAL</td>
		<td style='text-align:center;  width:120px; font-weight:bold;color:#00000; font-size: 16px;' >R$ ".$carrinho['subtotal_tratado']."</td> 
		</tr>
		";

	} else {

		echo "
		<tr>
		<td colspan='6' style='text-align:center; padding-top:120px; padding-bottom:120px; font-size:20px;' >SEU CARRINHO ESTÁ VAZIO!🤔.</td>
		</tr>
		";

	}

	?>

</table>