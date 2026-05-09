<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

$paginacao = $conteudo_sessao['paginacao'];
$categorias = $conteudo_sessao['categorias'];
$categoria_selecionada = $conteudo_sessao['categoria_selecionada'];
$marca_selecionada = $conteudo_sessao['marca_selecionada'];
$banners_esquerda = $banners_esquerda;
$banners_direita = $banners_direita;
$ordem = $conteudo_sessao['ordem'];

?>
<style type="text/css">
	.category-products{
		border:1px solid <?=$cores['99']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?>{

	}
	#div_categorias_prod_<?=$conteudo_id?> .left-sidebar{
		background-color: <?=$cores['100']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> .category-products .panel{
		background-color: <?=$cores['100']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> .category-products .panel-default .panel-heading{
		background-color: <?=$cores['100']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> .category-products .panel-default .panel-heading .panel-title a{
		color: <?=$cores['101']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> .category-products .panel-default .panel-heading .panel-title a.ativo{
		color: <?=$cores['118']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> i{
		color: <?=$cores['101']?> !important;
	}
	#div_categorias_prod_<?=$conteudo_id?> .panel-body ul li a{
		color: <?=$cores['102']?> !important;
	}

	#div_categorias_prod_<?=$conteudo_id?> .bx-wrapper .bx-viewport {
		background: <?=$cores['48']?> !important;
	}	
	.produtos_item_destaque_<?=$conteudo_id?> .product-image-wrapper{
		border:1px solid <?=$cores['103']?> !important;
		background-color: <?=$cores['104']?> !important;
	}

	.produtos_item_destaque_<?=$conteudo_id?> .produto_titulo_lista{
		color: <?=$cores['105']?> !important;
	}
	.produto_sobconsulta_lista{
		color: <?=$cores['113']?> !important;
	}
	.produtos_linha{
		margin-top:10px;
		border-top:1px solid <?=$cores['112']?> !important;
		margin-bottom: 10px;
	}

	.produtos_item_destaque_<?=$conteudo_id?> .produto_devalor_lista{
		padding-top:3px;
		color: <?=$cores['106']?> !important;
		font-size:13px;
		text-decoration:line-through;
		text-align:center;
	}

	.produtos_item_destaque_<?=$conteudo_id?> .produto_porvalor_lista{ 
		color: <?=$cores['107']?> !important;
		text-align: center;
	}

	.produtos_item_destaque_<?=$conteudo_id?> a.indisponivel{ 

	}

	.produtos_item_destaque_<?=$conteudo_id?> a.bt_comprar_lista{ 

	}

	.produtos_item_destaque_<?=$conteudo_id?> a.bt_comprar_lista i{

	}

</style>

<div id="section-produtos-<?=$conteudo_id?>" class="container-fluid animate-effect" style="width:100%; padding-top:40px; padding-bottom:30px; background-color: <?=$cores[48]?>; ">

	<?php if($conteudo_config->mostrar_titulo == 1){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div>
					<h2 class="titulo_padrao" style="color:<?=$cores[49]?> !important; border-color:<?=$cores[49]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[49]?>; " ></div> 
				</div>
			</div>
		</div>

	<?php } ?>

	<div style="width: 100%; padding-top:30px;"></div>

	<div class='row' >

		<?php
		if(
			($conteudo_config->mostrar_banners == 1) OR 
			($conteudo_config->mostrar_banners == 3) OR 
			($conteudo_config->mostrar_categorias == 1)
		){
			?>

			<div class='col-xs-12 col-sm-3 col-md-3' >

				<?php

				if($conteudo_config->mostrar_categorias == 1){

					?>

					<div id="div_categorias_prod_<?=$conteudo_id?>">

						<div class="left-sidebar">

							<div class="panel-group category-products" id="accordian_<?=$conteudo_id?>">
								<div class="panel panel-default">
									<?php

									foreach ($categorias as $key => $value) {

										if($value['codigo'] == $categoria_selecionada){
											$ativo = " class='ativo' ";
											$ativo_sub = "";
										} else {
											$ativo = "";
											$ativo_sub = "collapse";
										}

										$filhos = monta_sub_categorias_prod($value['subcategorias'], $value['id'], $controller, $conteudo_id, $categoria_selecionada);

										if($filhos['ativo']){
											$ativo = " class='ativo' ";
											$ativo_sub = "";
										}

										if($filhos['lista']){

											echo "
											<div class='panel-heading' >
											<h4 class='panel-title' >
											<a data-toggle='collapse' data-parent='#accordian_".$conteudo_id."' href='#catepai_".$conteudo_id."_".$value['id']."' ".$ativo." >
											<span class='badge pull-right' ><i class='fa fa-plus' ></i></span> 
											".$value['titulo']."
											</a>
											</h4>
											</div>
											";

											echo "
											<div id='catepai_".$conteudo_id."_".$value['id']."' class='panel-collapse ".$ativo_sub."' >
											<div class='panel-body' style='padding-top:5px; padding-bottom:5px;' >
											<ul>
											".$filhos['lista']."
											</ul>
											</div>
											</div>";

										} else {

											$endereco_cat = DOMINIO.$controller."/inicial/categoria_".$conteudo_id."/".$value['codigo'].'/#section-produtos-'.$conteudo_id;

											echo "
											<div class='panel-heading' >
											<h4 class='panel-title' >
											<a href='".$endereco_cat."' ".$ativo.">
											".$value['titulo']."
											</a>
											</h4>
											</div>
											";

										}

									}

									?>
								</div>
							</div>                 

						</div>

					</div>


					<div class="produtos_lista_ordem" >

						<select class="select2 produtos_select_ordem" onChange="ordena_lista(this.value);" style="width: 100%;" >

							<?php

							$end_ord = DOMINIO.$controller."/inicial/";
							if($categoria_selecionada){
								$end_ord .= "categoria_".$conteudo_id."/".$categoria_selecionada."/";
							}
							if($marca_selecionada){
								$end_ord .= "marca_".$conteudo_id."/".$marca_selecionada."/";
							}

							$end_ord .= "ordem_".$conteudo_id."/";
							?>
							<option value='<?=$end_ord?>1/#section-produtos-<?=$conteudo_id?>' <?php if($ordem == 1){ echo "selected"; } ?> >Ordenar por maior preço </option>
							<option value='<?=$end_ord?>2/#section-produtos-<?=$conteudo_id?>' <?php if($ordem == 2){ echo "selected"; } ?> >Ordenar por menor preço </option>
							<option value='<?=$end_ord?>3/#section-produtos-<?=$conteudo_id?>' <?php if($ordem == 3){ echo "selected"; } ?> >Ordenar por nome </option>
							<option value='<?=$end_ord?>4/#section-produtos-<?=$conteudo_id?>' <?php if($ordem == 4){ echo "selected"; } ?> >Ordenar por mais recentes </option>

						</select>


					</div>
				<?php } ?>


				<?php

				if( ($conteudo_config->mostrar_banners == 1) OR ($conteudo_config->mostrar_banners == 3) ){

					echo "<div class='banners_esquerda_responsivo1'>";
					include 'htm_conteudo_banners_esq.php';
					echo '</div>';

				}

				?>


			</div><!-- termina coluna -->




			<!-- inicia coluna do meio ou inteira  -->
			<?php

		}



		if( ($conteudo_config->mostrar_banners == 0) AND ($conteudo_config->mostrar_categorias == 0) ){
			echo "<div class='col-xs-12 col-sm-12 col-md-12 ' >";
		} else {
			if(
				($conteudo_config->mostrar_banners == 3) OR 
				( ($conteudo_config->mostrar_banners == 2) AND ($conteudo_config->mostrar_categorias == 1) ) OR 
				( ($conteudo_config->mostrar_banners == 1) AND ($conteudo_config->mostrar_categorias == 2) )
			){
				echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
			} else {
				echo "<div class='col-xs-12 col-sm-9 col-md-9' >";
			}
		}

		?>



		<?php


		$produtos_lista = $conteudo_sessao['lista'];


		if($conteudo_config->formato == 1){

				// lista de produtos tipo loja

			$itens_listados = 1;
			$n_row = 1;

			foreach ($produtos_lista as $key => $value) {

				if( ($itens_listados <= $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){

					if($n_row == 1){ echo "<div class='row' >"; }

					if($conteudo_config->itens_por_linha == 1){
						echo "<div class='col-xs-12 col-sm-12 col-md-12' >";
					}
					if($conteudo_config->itens_por_linha == 2){
						echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
					}
					if($conteudo_config->itens_por_linha == 3){
						echo "<div class='col-xs-12 col-sm-4 col-md-4' >";
					}
					if($conteudo_config->itens_por_linha == 4){
						echo "<div class='col-xs-12 col-sm-3 col-md-3' >";
					}

					$endereco = DOMINIO.$controller."/produto/id/".$value['id']."/";						
					$botao_comprar = str_replace("aquivaiolink", " href='".$endereco."' ", $conteudo_sessao['botao']);

					if($value['ref']){
						$ref = $value['ref']." - ";
					} else {
						$ref = "";
					}


					if($value['desconto'] > 0){

						$desconto = "
						<div style='position:absolute; top:10px; right:10px; background-image:url(".LAYOUT."img/promo.png); background-size:cover; width:60px; height:60px; padding-top:12px; padding-left:1px; text-align:center; color:#fff; font-weight:bold; font-size:13px; z-index:999;' >".$value['desconto']."%<br>OFF</div>
						";

						$de_valor = '<div class="produto_devalor_lista" >De R$ <span style="font-weight:bold;" >'.$value['valor_falso'].'</span></div>';

					} else {

						$de_valor = '';
						$desconto = '';

					}

                        // imagem

					if($value['imagem']){
						$imagem = $value['imagem'];
					} else {
						$imagem = LAYOUT."img/semimagem.png";
					}

					$esconder_valor = false;
					if($value['esconder_valor'] == 1){
						if(!$_cod_usuario){
							$esconder_valor = true;
						}
					}

					echo '
					<div class="produtos_item_destaque_'.$conteudo_id.' '.$classes_css.'" >
					<div class="product-image-wrapper">
					<div class="single-products">
					'.$desconto.'
					<div class="productinfo text-center">
					<div class="produto_imagem '.$classes_css_img.'" style="background-image:url('.$imagem.');" onClick="window.location=\''.$endereco.'\';" ></div>
					<div style="padding-left:20px; padding-right:20px;">
					<div class="produto_titulo_lista" onClick="window.location=\''.$endereco.'\';" >'.$value['titulo'].'</div> 
					<div class="produtos_linha" ></div>
					';

					if($value['sobconsulta'] == 1){
						$esconder_valor = true;
						echo '
						<div class="produto_sobconsulta_lista" >
						SOB-CONSULTA
						</div>
						';
					}

					if(!$esconder_valor){

                           // se tiver em estoque
						if($value['disponivel']){

							echo $de_valor.'
							<div class="produto_porvalor_lista" >
							Por R$ <span style="font-size:20px; font-weight:bold;" >'.$value['valor'].'</span>
							</div>
							<div style="padding-top:10px; padding-bottom:15px;" >
							'.$botao_comprar.'
							</div>';

						} else {

							echo $de_valor.'
							<div class="produto_porvalor_lista" >
							Por R$ <span style="font-size:20px; font-weight:bold;" >'.$value['valor'].'</span>
							</div>
							<div class="produto_devalor_lista" style="text-decoration:none; padding-top:5px; text-align:center; padding-bottom:15px;" >
							Indisponível
							</div>
							';
						}

					} else {

						echo '
						<div style="padding-top:10px; " >
						<a href="'.$endereco.'" class="btn btn-default add-to-cart bt_comprar_lista" > <i class="fa fa-shopping-cart" aria-hidden="true"></i> Detalhes </a>
						</div>
						</div>
						';

					}

					echo '
					</div>
					</div>
					</div>
					</div>
					</div>
					</div> 
					';



					if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

				}

				$itens_listados++;
			}
			if($n_row != 1){ echo "</div>"; }


			if( ($itens_listados < $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){
				?>
				<style type="text/css">

					.pagination li a, .pagination li span{
						background-color: <?=$cores[114]?> !important;
						color: <?=$cores[115]?> !important;
						border-radius:3px !important;
					}
					.pi-pagenav li .active{
						background-color: <?=$cores[116]?> !important;
						color: <?=$cores[117]?> !important;
						border-radius:3px !important;
					}

				</style>



				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >
						<div class="pi-pagenav" style="padding-top:10px; margin-bottom:30px; " >
							<?=$paginacao?>
						</div>
					</div>
				</div>
				<?php
			}

		}

		?>



		<?php 


				// destaques simples para inicial

		if($conteudo_config->formato == 2){


			echo "<div class='owl-carousel produtos_destaques_".$conteudo_id."' >";


			$itens_listados = 1;

			foreach ($produtos_lista as $key_proddesk => $value_proddesk) { 

				if( ($itens_listados <= $conteudo_config->max_itens) OR ($conteudo_config->max_itens == 0) ){



					if($value_proddesk['ref']){
						$ref = $value_proddesk['ref']." - ";
					} else {
						$ref = "";
					}

					if($value_proddesk['desconto'] > 0){

						$desconto = "
						<div class='' style='position:absolute; top:10px; right:10px; background-image:url(".LAYOUT."img/promo.png); background-size:cover; width:50px; height:50px; padding-top:10px; padding-left:1px; text-align:center; color:#fff; font-weight:bold; font-size:11px; z-index:999;' >".$value_proddesk['desconto']."%<br>OFF</div>
						";

						$de_valor = '<div class="produto_devalor_lista" >De R$ <span style="font-weight:bold;" >'.$value_proddesk['valor_falso'].'</span></div>';

					} else {
						$de_valor = '';
						$desconto = '';
					}

					if($value_proddesk['imagem']){
						$imagem = $value_proddesk['imagem'];
					} else {
						$imagem = LAYOUT."img/semimagem.png";
					}

					$esconder_valor = false;
					if($value_proddesk['esconder_valor'] == 1){
						if(!$_cod_usuario){
							$esconder_valor = true;
						}
					}

					$endereco = DOMINIO.$controller."/produto/id/".$value_proddesk['id']."/";
					$botao_comprar = str_replace("aquivaiolink", " href='".$endereco."' ", $conteudo_sessao['botao']);

					echo '
					<div class="item produtos_item_destaque_'.$conteudo_id.' '.$classes_css.'" onClick="window.location=\''.$endereco.'\';" >
					<div class="product-image-wrapper">
					<div class="single-products">
					'.$desconto.'
					<div class="productinfo text-center">
					<div class="produto_imagem '.$classes_css_img.'" style="background-image:url('.$imagem.');" ></div>
					<div style="padding-left:15px; padding-right:15px;">
					<div class="produto_titulo_lista"  >'.$value_proddesk['titulo'].'</div>
					<div style="font-size:12px;"  >'.$value_proddesk['previa'].'</div>
					
					<div class="produtos_linha" ></div>
					';



					if($value_proddesk['sobconsulta'] == 1){
						$esconder_valor = true;
						echo '
						<div class="produto_sobconsulta_lista" >
						SOB-CONSULTA
						</div>
						';
					}

					if(!$esconder_valor){

						if($value_proddesk['disponivel']){

							echo $de_valor.'
							<div class="produto_porvalor_lista" >
							Por R$ <span style="font-size:20px; font-weight:bold;" >'.$value_proddesk['valor'].'</span>
							</div>
							<div style="padding-top:10px; padding-bottom:15px;" >
							'.$botao_comprar.'
							</div>';

						} else {

							echo $de_valor.'
							<div class="produto_porvalor_lista" >
							Por R$ <span style="font-size:20px; font-weight:bold;" >'.$value_proddesk['valor'].'</span>
							</div>
							<div class="produto_devalor_lista" style="text-decoration:none; padding-top:5px; text-align:center; padding-bottom:15px;" >
							Indisponível
							</div>
							';
						}

					} else {

						echo '
						<div style="padding-top:10px; " >
						<a  class="btn btn-default add-to-cart bt_comprar_lista" > <i class="fa fa-shopping-cart" aria-hidden="true"></i> Detalhes </a>
						</div>
						';

					}

					echo '
					</div>
					</div>
					</div>
					</div>
					</div>
					';

				}
				$itens_listados++;
			}

			echo "</div>";
		}

		?>



	</div> <!-- termina coluna do meio ou inteira  -->


	<?php if( $conteudo_config->mostrar_banners >= 1 ){ ?>

		<div class='col-xs-12 col-sm-3 col-md-3' >

			<?php

			if( ($conteudo_config->mostrar_banners == 2) OR ($conteudo_config->mostrar_banners == 3) ){

				echo "<div class='banners_esquerda_responsivo2'>";
				include 'htm_conteudo_banners_esq.php';
				echo '</div>';

				include 'htm_conteudo_banners_dir.php';

			}

			?>


		</div>

		<?php
	}
	?> 
</div> <!-- termina row   -->

</div>
