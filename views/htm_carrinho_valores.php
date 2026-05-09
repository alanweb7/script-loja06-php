<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<table class="table tabela_boa" >
	
	<tr>
		<td style='text-align:right; border-top:0px;' >DESCONTOS DO CUPOM <i class="fa fa-arrow-right" aria-hidden="true"></i></td>
		<td style='text-align:center; width:120px; font-weight:bold; border-top:0px;color:#000000; font-size: 16px;' >R$ <?=$valor_desconto_cupom_tratado?></td>
	</tr>
	
	<tr>
		<td style='text-align:right; border-top:0px;' >VALOR DO ENVIO <i class="fa fa-arrow-right" aria-hidden="true"></i></td>
		<td style='text-align:center; width:120px; font-weight:bold; border-top:0px;color:#000000; font-size: 16px;' >R$ <?=$valor_frete_tratado?></td>
	</tr>

	<tr>
		<td style='text-align:right; border-top:0px;' >TOTAL DO PEDIDO <i class="fa fa-arrow-right" aria-hidden="true"></i></td>
		<td style='text-align:center; width:120px; font-weight:bold; border-top:0px;color:#000000; font-size: 16px;' >R$ <?=$valor_total_pedido_tratado?></td>
	</tr>

</table>