<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<?php
// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];

$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

?>
<div id="section-acordeon-<?=$conteudo_id?>" class="container-fluid animate-effect" style="position: relative; padding-top:60px; padding-bottom: 60px; background-color: <?=$cores['1']?>; ">
	<div class="row">

		<?php if($conteudo_config->mostrar_titulo == 1){ ?>

			<div class='row' >
				<div class='col-xs-12 col-sm-12 col-md-12' >
					<div>
						<h2 class="titulo_padrao" style="color:<?=$cores[2]?> !important; border-color:<?=$cores[2]?> !important; " ><?=$conteudo_config->titulo?></h2>
						<div class="titulo_padrao_linha" style="color:<?=$cores[2]?>; " ></div> 
					</div>
				</div>
			</div>

		<?php } ?>

		<?php

		$n_acord = 0;
		$n_row = 1;
		foreach ($conteudo_sessao['lista'] as $key => $value) {

			if($n_row == 1){ echo "<div class='row' >"; }

			if($conteudo_config->itens_por_linha == 2){
				echo "<div class='col-xs-12 col-sm-6 col-md-6' >";
			}
			if($conteudo_config->itens_por_linha == 3){
				echo "<div class='col-xs-12 col-sm-4 col-md-4' >";
			}
			if($conteudo_config->itens_por_linha == 4){
				echo "<div class='col-xs-12 col-sm-3 col-md-3' >";
			}
			if($conteudo_config->itens_por_linha == 6){
				echo "<div class='col-xs-12 col-sm-2 col-md-2' >";
			}
			
			echo "
			<div class='accordion' >
			<div class='card z-depth-0 bordered'>
			<div class='card-header' id='heading".$n_acord."'>
			<h5 class='mb-0'>
			<button class='btn btn-link acordeon_titulo ".$classes_css."'  type='button' data-toggle='collapse' data-target='#collapse_".$value['id']."_".$n_acord."' aria-expanded='true' aria-controls='collapse".$n_acord."' style='color:".$cores['235']."; background-color:".$cores['234'].";' ><i class='fas fa-chevron-down'></i>
			".$value['titulo']."
			</button>
			</h5>
			</div>
			<div id='collapse_".$value['id']."_".$n_acord."' class='collapse' aria-labelledby='heading".$n_acord."' >
			<div class='card-body' >
			<div class='row'>
			";
			
			if($value['imagem']){

				echo "
				<div class='col-xs-12 col-sm-8 col-md-8' >
				<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
				".$value['descricao']."
				</div>
				</div>
				<div class='col-xs-12 col-sm-4 col-md-4' >
				<div class='acordeon_img'  >
				<img src='".$value['imagem']."' class='".$classes_css_img."'>
				</div>
				</div>
				";

			} else {

				echo "
				<div class='col-xs-12 col-sm-12 col-md-12' >
				<div class='acordeon_descricao' style='color:".$cores['2']."; ' >
				".$value['descricao']."
				</div>
				</div>
				";

			}

			echo "
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			";

			if($n_row == $conteudo_config->itens_por_linha){ echo "</div>"; $n_row = 1; } else { $n_row++; }

			$n_acord++;
		}
		if($n_row != 1){ echo "</div>"; }

		?>

	</div>
</div>