<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
$conteudo_config = $conteudo_sessao['data_grupo'];
$classes_css = str_replace(".", "", $conteudo_config->classes);
$classes_css_img = str_replace(".", "", $conteudo_config->classes_img);

?>

<div id="section-duvidas-<?=$conteudo_id?>" class="container-fluid animate-effect" style="padding-top:50px; padding-bottom:80px; background-color: <?=$cores[34]?>; ">

	<?php if($conteudo_config->mostrar_titulo == 1){ ?>

		<div class='row' >
			<div class='col-xs-12 col-sm-12 col-md-12' >
				<div>
					<h2 class="titulo_padrao" style="color:<?=$cores[35]?> !important; border-color:<?=$cores[35]?> !important; " ><?=$conteudo_config->titulo?></h2>
					<div class="titulo_padrao_linha" style="color:<?=$cores[35]?>; " ></div> 
				</div>
			</div>
		</div>

	<?php } ?>

	<?php

	$duvidas = $conteudo_sessao['lista'];

	?>

	<div class="row">

		<?php if($conteudo_config->tipo_menu == 0){ $tipo = ''; ?>				
		<div class="col-sm-4">
		<?php } else { $tipo = '_topo'; ?>
		<div class="col-sm-12">
		<?php } ?>

		<div style="margin-top: 30px; background-color:<?=$cores['88']?>; padding-left:20px; padding-right: 20px; padding-bottom: 20px; padding-top: 10px; <?php if($conteudo_config->tipo_menu == 1){ echo "text-align:center;";  } ?>">
			<?php

			$primeira_duvida = '';
			$n_duv = 0;
			foreach ($duvidas as $key => $value) {

				if($n_duv == 0){
					$primeira_duvida = $value['codigo'];
					if($conteudo_config->tipo_menu == 1){ 
						$borderleft = "border-left:1px solid ".$cores['89']."; padding-left: 10px; ";
					} else {
						$borderleft = "";
					}
				} else {
					$borderleft = "";
				}

				if($conteudo_config->tipo_menu == 1){ 
					$borderright = " border-right:1px solid ".$cores['89']."; ";
				} else {
					$borderright = "";
				}

				if($primeira_duvida == $value['codigo']){
					$ativo = "";
				} else {
					$ativo = '';
				}

				echo "
				<a class='duvidas_lista".$tipo."".$ativo." $classes_css' style='color:".$cores['89']."; ".$borderleft." ".$borderright." ' onclick=\"duvidas_respostas_".$conteudo_id."('".$value['codigo']."');\" >".$value['pergunta']."</a>
				";

				$n_duv++;
			}

			?>
		</div>
	</div>

	<?php if($conteudo_config->tipo_menu == 0){ ?>
		<div class="col-sm-8">
		<?php } else { ?>
			<div class="col-sm-12">
			<?php } ?>

			<div class="duvidas_div $classes_css" id="duvidas_div-<?=$conteudo_id?>" style="color:<?=$cores['35']?> !important;" >

			</div>
		</div>

	</div>

</div>