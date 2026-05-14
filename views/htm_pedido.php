<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Detalhes do Pedido <?=$data_pedido->id?> - <?=$data_pagina->meta_titulo?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>" />

	<meta name="description" content="<?=$data_pagina->meta_titulo?>" />
	<meta property="og:description" content="<?=$data_pagina->meta_titulo?>" />
	<meta name="author" content="<?=AUTOR?>" />
	<meta name="classification" content="Website" />
	<meta name="robots" content="index, follow" />
	<meta name="Indentifier-URL" content="<?=DOMINIO?>" />

	<link href="<?=LAYOUT?>api/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/hover-master/css/hover-min.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet" type="text/css" />

	<?php include_once('htm_css.php'); ?>
	<?php include_once('htm_css_resp.php'); ?>

	<style type="text/css">
	body {
		background-color:<?=$pagina_cores[1]?>;
	}
</style>

<?=$botao_style?>

</head>
<body>
	
	<?=$_base['analytics']?>
	
	<?php include_once('htm_modal.php'); ?>
	
	<?php
	// topo 
	foreach ($layout_lista as $key_layout => $value_layout) {

		if($value_layout['full'] != 1){
			echo "<div class='container' >";
		}
		echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

		if($value_layout['colunas'] == 1){
			?>

			<div class="col-md-12 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }

		if($value_layout['colunas'] == 2){

			if($value_layout['formato'] == '6_6'){
				?>      

				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>          
				</div>

			<?php }

			if($value_layout['formato'] == '4_8'){
				?>        

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '8_4'){
				?>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>        
			<?php }

		}

		if($value_layout['colunas'] == 3){

			if($value_layout['formato'] == '4_4_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '2_5_5'){
				?>      

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '5_2_5'){
				?>      

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '5_5_2'){
				?>        

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

		}

		if($value_layout['colunas'] == 4){

			if($value_layout['formato'] == '3_3_3_3'){
				?>                                

				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }


			if($value_layout['formato'] == '4_2_2_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }

			if($value_layout['formato'] == '2_4_4_2'){
				?>

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

				<?php
			}

		}

		if($value_layout['colunas'] == 6){
			?>

			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna2'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna3'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna4'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna5'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>              
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna6'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'topo'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }


		echo "
		</div>
		";

		if($value_layout['full'] != 1){
			echo "</div>";
		}

	}
	
	// termina topo
	?>

	<section class="animate-effect" style="margin-top:50px; margin-bottom: 50px;">

		<div class="container">
			
			
			<div class="row">
				<div class="col-sm-12">

					<h2 class="titulo_padrao" >PEDIDO <span><?=$data_pedido->id?></span></h2>
					<div class="titulo_padrao_linha" ></div>
					
					<div class="bt_alterar_dados" style="margin-top: -70px; margin-bottom:30px;">

						<?php
						if($data_pedido->status <= 3){
							?>
							<button type="button" class="botao_padrao <?=$botao_css?>" style="width: 250px; background-color: red !important; border-color:red !important; color:#fff  !important; " onClick="confirma_cancelamento('<?=DOMINIO?><?=$controller?>/cancelar_pedido/codigo/<?=$data_pedido->codigo?>');" ><i class="fa fa-times" aria-hidden="true"></i> CANCELAR PEDIDO</button>
							<?php
						}
						?>

						<button type="button" class="botao_padrao <?=$botao_css?>" style="width: 200px;" onClick="window.location='<?=DOMINIO?><?=$controller?>/minhaconta';" ><i class="fa fa-arrow-left" aria-hidden="true"></i> VOLTAR</button>

					</div>

				</div>
			</div>


			<div class="row">
				

				<div class="col-sm-12">					

					<div><strong>✔STATUS DO PEDIDO:</strong> <?=$status?></div>

					<div style="padding-top:15px;" ><strong><i class="fa fa-calendar" aria-hidden="true"></i> VENCIMENTO:</strong> <?=date('d/m/Y', $data_pedido->vencimento)?></div>

					<div style="padding-top:15px;" ><strong><i class="fa fa-link" aria-hidden="true"></i> FORMA DE ENVIO:</strong> Digital</div>

					<?php if($data_pedido->codigo_envio){ ?>

						<?php if( ($data_pedido->frete == 1) OR ($data_pedido->frete == 2) ){ ?>
							<div style="padding-top:20px;">
								<strong>Rastreamento:</strong> <a href="http://www.linkcorreios.com.br/<?=$data_pedido->codigo_envio?>" target="_blank"><?=$data_pedido->codigo_envio?></a>
							</div>
						<?php } else { ?>
							<div style="padding-top:20px;"><strong>Rastreamento:</strong> <?=$data_pedido->codigo_envio?> </div>
						<?php } ?>

					<?php } ?>

					<div style="padding-top:15px;" ><strong><i class="fa fa-credit-card" aria-hidden="true"></i> FORMA DE PAGAMENTO:</strong> <?=$forma_pagamento->titulo?></div>


					
					<?php if( ($forma_pagamento->id == 1) AND ($data_pedido->status <= 3) ){ ?>

						<div style="margin-top:20px;" >
							
							<form id="comprar_pagseguro" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
								<input type="hidden" name="code" id="code" value="<?=$data_pedido->id_transacao?>" />

								<button type="submit" class="botao_padrao <?=$botao_css?>" style="background-color: green !important; color:#fff  !important; " >Efetuar Pagamento</button>

							</form>
							
							<div style="font-size: 12px; margin-top: 10px;">Caso já tenha efetuado o pagamento aguarde a compensação.</div>
							
						</div>

					<?php } ?>

					

					<?php if($forma_pagamento->id == 2){ ?>

						<div style="padding:10px; margin-top:20px; background-color:#eee; font-size: 15px;" ><strong>Dados para Depósito:</strong><br><br><?=nl2br($forma_pagamento->deposito_dados)?></div>

						<?php
						if(!$data_pedido->comprovante){ ?>

							<div class="row">
								<div class='col-xs-12 col-sm-12 col-md-12'>
									<div style="padding: 10px; ">

										<form action="<?=DOMINIO?><?=$controller?>/enviar_comprovante_pg" name="anexo_comprovante" id="anexo_comprovante" method="post" enctype="multipart/form-data" >

											<h5 class="titulo_padrao" style="width: 400px; text-align: left; font-size:20px !important; ">Enviar comprovante</h5>
											<div class="titulo_padrao_linha" ></div>

											<div style="color:red; font-size: 14px; font-weight: 500; margin-bottom:20px;">Envie seu comprovante o mais rápido possível para darmos sequencia ao seu pedido.</div>

											<div class="form-group">
												<label >Comprovante</label>
												<div >
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Alterar</span>
																<span class="fileupload-new">Procurar arquivo</span>
																<input type="file" name="arquivo" required />
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
														</div>
													</div>
												</div>
											</div>

											<button type='button' class='btn botao_padrao <?=$botao_css?>' onClick="submit();" style="margin-top:20px;" >Anexar Comprovante</button>
											<input type="hidden" name="pedido" value="<?=$data_pedido->codigo?>">

										</form>
									</div>
								</div>
							</div>
						<?php } else {?>

							<div style="margin-top: 20px; font-size: 16px; font-weight: bold; color:#000;">Comprovante enviado!</div>

						<?php } ?>

					<?php } ?>


					
					<?php if( ($forma_pagamento->id == 3) AND ($data_pedido->status <= 3) ){ ?>

						<div style="margin-top:20px;" >
							
							<form id='envairpgmp' name='envairpgmp' method='POST'>
								<script src='https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js' data-preference-id='<?=$data_pedido->id_transacao?>' ></script>
							</form>
							
							<div style="font-size: 12px; margin-top: 10px;">Caso já tenha efetuado o pagamento aguarde a compensação.</div>
						</div>

					<?php } ?>


					<?php if( ($forma_pagamento->id == 8) AND ($data_pedido->status <= 3) ){ ?>

						<div style="margin-top:20px;" >
							
							<div style="font-size:15px; font-weight:500; color:#666;">Pague com QRCODE PIX</div>
							<div style="font-size:13px; font-weight:500; color:#666;">Favorecido: Josiane Silva e Silva - Mercado Pago</div>
							<div style="margin-top:0px; margin-left: -15px;">
								<img style='width:250px; height: 250px;' src='data:image/png;base64, <?=$data_pedido->pix_qrcode?>' > 
							</div>

							<textarea class="form-control" style="width:250px; height:30px;" id="chavepix"><?=$data_pedido->pix_chave?></textarea>
							<div style="margin-top:10px;"><a onclick="copiachave();" style="cursor: pointer;display: inline-block;" class="btn btn-default">Copiar Chave PIX</a></div>

							<div style="font-size: 12px; margin-top: 10px;">Caso já tenha efetuado o pagamento aguarde a compensação.</div>
						</div>

					<?php } ?>




					<?php if( ($forma_pagamento->id == 4) AND ($data_pedido->status <= 3) ){ ?>
						
						<div style="font-size: 12px; margin-top: 10px;">Caso já tenha efetuado o pagamento aguarde a compensação.</div>
						
						<div style="margin-top:20px; width: 70%; text-align: left;" >
							
							<?php

								// $forma_pagamento->paypal_conta
								// $forma_pagamento->paypal_clienteid
								// $forma_pagamento->paypal_clientesecret

							?>

							<div id="paypal-button-container"></div>

							<!-- Include the PayPal JavaScript SDK -->
							<script src="https://www.paypal.com/sdk/js?client-id=<?=$forma_pagamento->paypal_clienteid?>&currency=BRL"></script>

							<script>
								paypal.Buttons({

									createOrder: function(data, actions) {
										return actions.order.create({
											purchase_units: [{
												reference_id: '<?=$data_pedido->id?>',
												description: 'Pedido <?=$data_pedido->id?>',
												amount: {
													value: '<?=$valor_total_pedido_paypal?>'
												}
											}]
										});
									},

									onApprove: function(data, actions) {
										return actions.order.capture().then(function(details) {
											window.location='<?=DOMINIO?><?=$controller?>/pagamento_paypal/codigo/<?=$data_pedido->codigo?>/id/'+data.orderID+'/payerid/'+data.payerID+'/paymentid/'+data.paymentID;
										});
									}

								}).render('#paypal-button-container');
							</script>


							

						</div>

					<?php } ?>



					<?php if( ($forma_pagamento->id == 6) AND ($data_pedido->status <= 3) ){ ?>
						
						<div style="font-size: 12px; margin-top: 10px;">Clique abaixo para efetuar o pagamento (caso já tenha efetuado o pagamento aguarde a compensação).</div>

						<div style="margin-top:20px; width: 70%; text-align: left;" >
							<a href="<?=$data_pedido->link_cielo?>" target="_blank"><img src="<?=LAYOUT?>img/cielo.jpg" style="width: 100px;"></a>
						</div>

					<?php } ?>





					<div style="width: 100%; padding-top: 50px;"></div>



				</div>

			</div>


			<div class="row">
				


				<div class="col-sm-12">

					<div class="table-responsive" style="min-height: 250px; padding-bottom:50px; margin-top:10px;">
						<table class="table tabela_pedidos">

							<thead>
								<tr>
									<th><i class="fa fa-cube" aria-hidden="true"></i> PRODUTO</th>
									<th></th>
									<th style='text-align:center;' ><i class="fa fa-certificate" aria-hidden="true"></i> VALOR</th>
									<th style='text-align:center; width:50px;' >QUANTIDADE</th>
									<th style='text-align:center; width:120px;' >TOTAL</th>
								</tr>
							</thead>

							<?php

							$n = 0;
							foreach ($produtos['lista'] as $key => $value) {

								echo "
								<tr>

								<td colspan='2' >
								<div class='carrinho_lista_imagem' style='background-image:url(".$value['imagem'].");' ></div>
								<div class='carrinho_lista_texto' ><div style='padding-left:15px; padding-right:15px;'>".$value['titulo']."</div></div>
								</td>

								<td style='text-align:center;' >
								<div class='carrinho_lista_valor' >R$ ".$value['total_unitario']."</div>
								</td>

								<td style='text-align:center;' >
								<div class='carrinho_lista_valor' >
								".$value['quantidade']."
								</div>
								</td>

								<td style='text-align:center; ' >
								<div class='carrinho_lista_valor' >R$ ".$value['total_quantidade']."</div>
								</td>                                    

								</tr>
								";

								$n++;
							}



							if($n != 0){


								echo "
								<tr>
								<td colspan='4' style='text-align:right; ' >Sub-total</td>
								<td style='text-align:center;  width:120px; font-weight:bold;' >R$ ".$produtos['subtotal_tratado']."</td>                           
								</tr>

								<tr>
								<td colspan='4' style='text-align:right; ' >Total de Descontos</td>
								<td style='text-align:center;  width:120px; font-weight:bold;' >R$ ".$valor_desconto_cupom_tratado."</td>
								</tr>

								<tr>
								<td colspan='4' style='text-align:right; ' >Total de Frete</td>
								<td style='text-align:center;  width:120px; font-weight:bold;' >R$ ".$valor_frete_tratado."</td>
								</tr>

								<tr>
								<td colspan='4' style='text-align:right; ' >Total do Pedido</td>
								<td style='text-align:center;  width:120px; font-weight:bold;' >R$ ".$valor_total_pedido_tratado."</td>
								</tr>
								"; 


							} else {

								echo "
								<tr>
								<td colspan='5' style='text-align:center; padding-top:120px; padding-bottom:120px; font-size:20px;' >Não encontramos produtos neste pedido!</td>
								</tr>
								";

							}

							?>
						</table>
					</div>

				</div>

			</div>



			<div class="row"> 


				<div class="col-sm-2"></div>

				<div class="col-sm-8">

					<h5 class="titulo_padrao" style="width: 100%; font-size: 22px;">😀 MENSAGENS</h5>
					<h5 class="titulo_padrao" style="width: 100%; font-size: 16px;">✔ AQUI VOCÊ SE COMUNICA COM NOSSA EQUIPE E TAMBEM RECEBE O SEU PRODUTO DIGITAL, ESTEJA SEMPRE ATENTO NAS MENSAGENS.</h5>
					<div class="titulo_padrao_linha" ></div>

					<div style="margin-top:-10px;">
						<?php

						$n = 0;
						foreach ($mensagens as $key => $value) {

							if($value['usuario'] == 1){
								$quemenviou = 'ATENDIMENTO - 🏭 FÁBRICA DO SITE';
							} else {
								$quemenviou = '😀 VOCÊ';
							}

							if($value['anexo']){
								$anexo = "
								<div class='pedido_anexo' ><a href='".$value['anexo']."' target='_blank' >Anexo</a></div>
								";
							} else {
								$anexo = '';
							}

							if(!($n % 2)) { $bg = " style='background-color:#f2f2f2;' "; } else { $bg = ""; }  

							echo "
							<div class='pedido_msg' $bg >
							<div class='pedido_usuario'><strong>".$quemenviou."</strong> em: ".$value['data']."</div>
							<div style='color:#000;'>".$value['msg']." </div>
							".$anexo."
							</div>
							";

							$n++;
						}

						?>
					</div>					

					<hr>


					<?php if($data_pedido->status != 6){ ?>

						<div style="margin-top:20px; margin-left: -10px;">
							<form action="<?=DOMINIO?><?=$controller?>/pedido_envia_msg" method="post" enctype="multipart/form-data" >

								<fieldset>

									<div class="form-group">
										<div class="col-md-12">
											<textarea class="form-control" name="mensagem" placeholder="Digite uma mensagem" style="border-radius:0px; margin-bottom:15px; height: 120px;" ></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-12" >Anexo</label>
										<div class="col-md-12">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="fa fa-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-default btn-file">
														<span class="fileupload-exists">Alterar</span>
														<span class="fileupload-new">Procurar arquivo</span>
														<input type="file" name="arquivo" />
													</span>
													<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group"> 
										<div class="col-md-12">
											<button type='button' class='botao_padrao <?=$botao_css?>'  onClick="submit();" style="margin-top:20px; width: 100%;" >Enviar</button>
											<input type="hidden" name="pedido" value="<?=$data_pedido->codigo?>">
										</div>
									</div>

								</fieldset>

							</form>
						</div>

					<?php } ?>


					<div style="width: 100%; padding-top: 50px;"></div>

				</div>

				<div class="col-sm-2"></div>

			</div>

		</div>

	</section>


	
	<?php

	// rodape
	foreach ($layout_lista as $key_layout => $value_layout) {
		
		if($value_layout['full'] != 1){
			echo "<div class='container' >";
		}
		echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

		if($value_layout['colunas'] == 1){
			?>

			<div class="col-md-12 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }

		if($value_layout['colunas'] == 2){

			if($value_layout['formato'] == '6_6'){
				?>      

				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-6 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>          
				</div>

			<?php }

			if($value_layout['formato'] == '4_8'){
				?>        

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '8_4'){
				?>
				<div class="col-md-8 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>        
			<?php }

		}

		if($value_layout['colunas'] == 3){

			if($value_layout['formato'] == '4_4_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '2_5_5'){
				?>      

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }


			if($value_layout['formato'] == '5_2_5'){
				?>      

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

			if($value_layout['formato'] == '5_5_2'){
				?>        

				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-5 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }

		}

		if($value_layout['colunas'] == 4){

			if($value_layout['formato'] == '3_3_3_3'){
				?>                                

				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-3 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>

			<?php }


			if($value_layout['formato'] == '4_2_2_4'){
				?>

				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

			<?php }

			if($value_layout['formato'] == '2_4_4_2'){
				?>

				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna1'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna2'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-4 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna3'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div>
				<div class="col-md-2 corrige_cedulas_principais">
					<?php

					$conteudo_coluna = $value_layout['coluna4'];
					if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

						$conteudo_id = $conteudo_coluna['id'];
						$conteudo_sessao = $conteudo_coluna['conteudo'];
						include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

					}

					?>
				</div> 

				<?php
			}

		}

		if($value_layout['colunas'] == 6){
			?>

			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna1'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna2'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna3'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna4'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna5'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>              
			<div class="col-md-2 corrige_cedulas_principais">
				<?php

				$conteudo_coluna = $value_layout['coluna6'];
				if(!empty($conteudo_coluna['tipo']) && $conteudo_coluna['tipo'] == 'rodape'){

					$conteudo_id = $conteudo_coluna['id'];
					$conteudo_sessao = $conteudo_coluna['conteudo'];
					include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

				}

				?>
			</div>

		<?php }


		echo "
		</div>
		";

		if($value_layout['full'] != 1){
			echo "</div>";
		}

	}

	// termina rodape
	?>

	<script type="text/javascript" src="<?=LAYOUT?>js/jquery-2.2.4.min.js" ></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>  
	<script type="text/javascript" >function dominio(){ return '<?=DOMINIO?>'; }</script>
	<script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
	<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/animation.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?=LAYOUT?>api/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>

	<?php
	
	foreach ($layout_lista as $key_layout => $value_blocos) {
		$n_col = 1;
		while ($n_col <= $value_blocos['colunas']) {

			$value_layout = $value_blocos['coluna'.$n_col];
			
			if(isset($value_layout['tipo'])){
				
				if($value_layout['tipo'] == 'topo'){
					
					$conteudo_id = $value_layout['id'];
					$conteudo_sessao = $value_layout['conteudo'];
					$id_script = '#slider_topo_'.$conteudo_id;
					
					?>
					<script>

						<?php if($conteudo_sessao['data_topo']->modelo  == 11){ ?>

							$("<?=$id_script?>").responsiveSlides({
								auto: true,
								pager: false,
								nav: false,
								speed: 500,
								pause: true,
								pauseControls: true,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							});

						<?php } ?>
						
						$(document).ready(function(){
							$(window).on('scroll', function() {
								var posicao_topo = $(window).scrollTop();

								<?php if($conteudo_sessao['data_topo']->modelo  == 6){ ?>

									if(posicao_topo > 100){          
										$(".topo6").addClass("topo6_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo6").removeClass("topo6_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 7){ ?>

									if(posicao_topo > 100){          
										$(".topo7").addClass("topo7_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo7").removeClass("topo7_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 8){ ?>

									if(posicao_topo > 100){          
										$(".topo8").addClass("topo8_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo8").removeClass("topo8_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 9){ ?>

									if(posicao_topo > 100){          
										$(".topo9").addClass("topo9_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo9").removeClass("topo9_decendo");
									}

								<?php } ?>

								<?php if($conteudo_sessao['data_topo']->modelo  == 10){ ?>

									if(posicao_topo > 100){          
										$(".topo10").addClass("topo10_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo10").removeClass("topo10_decendo");
									}

								<?php } ?>
								
								<?php if($conteudo_sessao['data_topo']->modelo  == 13){ ?>

									if(posicao_topo > 100){          
										$(".topo13").addClass("topo13_decendo");
									}
									if(posicao_topo < 100){          
										$(".topo13").removeClass("topo13_decendo");
									}
									
								<?php } ?>
								
							});
						});

					</script>
					<?php
				}
			}
			$n_col++;
		}

    // termina lista
	}

	?>

	<?php if($data_pagina->bloqueio == 1){ ?>

		<script type="text/javascript">

			$(document).ready(function(){
				$(document).bind("contextmenu",function(e){
					return false;
				});

				$('body').bind('contextmenu', function(event) {
					event.preventDefault();
				});

				$('body').bind('selectstart dragstart', function(event) {
					event.preventDefault();
					return false;
				});

				$("body").bind("cut copy paste", function() {
					return false;
				});

				$('body').focus(function() {
					$(this).blur();
				});

			});
		</script>

	<?php } ?>

	<script>

		function confirma_cancelamento(endereco) {
			if(confirm('Tem certeza que deseja cancelar o pedido?')){
				window.location=endereco;
			} else {
				return false;
			}
		}

		// abrir janela pagseguro $('#comprar_pagseguro').submit();

		// copia chave		
		function copiachave(){			
			const inputTest = document.querySelector("#chavepix");
			inputTest.select();
			document.execCommand('copy');
		}

	</script>

</body>
</html>