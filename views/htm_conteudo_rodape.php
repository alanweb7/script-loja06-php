<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; }

// echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];

include('htm_css_rodape_'.$conteudo_sessao['data_rodape']->modelo.'.php');

if($conteudo_sessao['data_rodape']->imagem_fundo){
	$fundo_rodape = PASTA_CLIENTE.'img_rodape/'.$conteudo_sessao['data_rodape']->imagem_fundo;
	echo "
	<style>
	.rodape{
		background-image:url(".$fundo_rodape.");
		background-size: cover; background-position: bottom; background-repeat: no-repeat;
	}
	</style>
	";
}

if($conteudo_sessao['data_rodape']->font_family){ 
	echo "
	<style>
	.rodape{
		font-family: ".$conteudo_sessao['data_rodape']->font_family." !important;
	}
	</style>
	";
}

$botao_aviso = $conteudo_sessao['botao_aviso'];

?>

<?php if($conteudo_sessao['data_rodape']->modelo == 1){ ?>

	<footer class="rodape"  >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-8" >
					<div class="footer-grid">
						<h3 style="font-weight: bold">ACESSO RÁPIDO</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

									//calcula quantos itens por coluna
									$itens = count($conteudo_sessao['menu']);
									$porcoluna = round($itens/2);

									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n <= $porcoluna){

											echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>				  
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n > $porcoluna){

											echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-1 col-md-1" >
				</div>

				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="footer-grid">
						<h3 style="font-weight: bold">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos'>

						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><?=$conteudo_sessao['data_rodape']->email?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>

					</div>

					<div>
						<?php
						$listaredes = $_base['redessociais'];
						foreach ($listaredes as $key => $value) {

							echo "
							<div class='redessociais hvr-float-shadow'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";

						}

						?>
						<div style="clear: both;"></div>
					</div>

				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['18']?>; color:<?=$cores['21']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>


<?php if($conteudo_sessao['data_rodape']->modelo == 2){ ?>


	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-2 col-md-2">
					
					<div style="margin-top:15px; margin-bottom: 20px;"><img src="<?=$_base['imagem']['159432484772768']?>" style="width:70%;"></div> 

				</div>

				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="footer-grid">
						<h3 style="font-weight: bold; ">Fale Conosco</h3>
					</div>

					<div class='rodape_contatos' style="font-size: 16px; line-height: 30px; ">
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><?=$conteudo_sessao['data_rodape']->email?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-3" >
					<div class="footer-grid">
						<h3 style="font-weight: bold">ACESSO RÁPIDO</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

									foreach ($conteudo_sessao['menu'] as $key => $value) {

										echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";


									}
									?>
								</ul>				  
							</div> 
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-3" >
					<div style="text-align: center; margin-top: 20px; ">
						<?php
						$facebook = "";
						foreach ($_base['redessociais'] as $key => $value) {
							if( ($value['titulo'] == 'Facebook') OR ($value['titulo'] == 'facebook') ){
								$facebook = $value['endereco'];
							}
						}
						if($facebook){
							?>
							<iframe src="//www.facebook.com/plugins/likebox.php?href=<?=$facebook?>/&amp;width=350&amp;height=160&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:330px; height:160px;" allowTransparency="true"></iframe>
						<?php } ?>
					</div>
				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['19']?>; color:<?=$cores['22']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>



<?php if($conteudo_sessao['data_rodape']->modelo == 3){ ?>

	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-3" >

					<div class="logo_rodape" ><img src="<?=$_base['imagem']['159432484772768']?>"></div>
					
					<div class="logo_rodape" ><img src="<?=$_base['imagem']['159432484772779']?>"></div>

					<div style="margin-top: 100px;">
						<?php
						$listaredes = $_base['redessociais'];
						foreach ($listaredes as $key => $value) {

							echo "
							<div class='redessociais hvr-float-shadow'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";

						}

						?>
						<div style="clear: both;"></div>
					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-6" >
					<div class="footer-grid">
						<h3 style="font-weight: bold"><i class="fa fa-arrow-down" aria-hidden="true"></i> CATEGORIAS</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php

								//calcula quantos itens por coluna
									$itens = count($conteudo_sessao['menu']);
									$porcoluna = round($itens/2);

								//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n <= $porcoluna){

											echo "<li><a href='".$value['destino']."' ><i class='fas fa-caret-right'></i> ".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>				  
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) {
										if($n > $porcoluna){

											echo "<li><a href='".$value['destino']."' ><i class='fas fa-caret-right'></i> ".$value['titulo']."</a></li>";

										}
										$n++;
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="footer-grid">
						<h3 style="font-weight: bold"><i class="fa fa-arrow-down" aria-hidden="true"></i> FALE CONOSCO</h3>
					</div>

					<div class='rodape_contatos'>

						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco1?></span>
						<span style="font-weight: bold;"><?=$conteudo_sessao['data_rodape']->endereco2?></span>

						<span style="margin-top:10px;"><i class="fa fa-envelope" aria-hidden="true"></i> <?=$conteudo_sessao['data_rodape']->email?></span>
						<span><i class="fab fa-whatsapp" aria-hidden="true"></i> <?=$conteudo_sessao['data_rodape']->fone1?></span>
						<span><?=$conteudo_sessao['data_rodape']->fone2?></span>
						
						<div class="logo_pagementos" ><img src="<?=$_base['imagem']['159432484772778']?>"></div>

					<div style="margin-top: 20px;">
						
					</div>

				</div>

			</div>
			<div style="width: 100%; padding-top:30px;"></div>
		</div>

		<div class="rodape_copy" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12" >					
						<a href="" target="_blank" ><?=$conteudo_sessao['data_rodape']->copy?></a>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['20']?>; color:<?=$cores['23']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>




<?php if($conteudo_sessao['data_rodape']->modelo == 4){ ?>

	<footer class="rodape" >
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-3" >

					<div class="logo_rodape" ><img src="<?=$_base['imagem']['159432484772768']?>"></div>

					<div style="margin-top: 20px;">
						<?php
						$listaredes = $_base['redessociais'];
						foreach ($listaredes as $key => $value) {
							
							echo "
							<div class='redessociais hvr-float-shadow'>
							<a href='".$value['endereco']."' target='_blank' >
							<img src='".$value['imagem']."'>
							</a>
							</div>
							";

						}

						?>
						<div style="clear: both;"></div>
					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-6" >
					<div class="footer-grid">
						
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-md-5">
								
								<div class="rodape_contatos">
									<div><i class="fab fa-whatsapp"></i> <?=$conteudo_sessao['data_rodape']->fone1?></div>
									<div><?=$conteudo_sessao['data_rodape']->fone2?></div>
									<div><?=$conteudo_sessao['data_rodape']->email?></div>
								</div>
								
								<div style="margin-top: 20px;">
									<ul>
										<li><a href='#' onclick="modal('<?=DOMINIO?><?=$controller?>/ligamospravc', 'Nós Ligamos pra Você');" >Nós Ligamos pra Você</a></li>
										<li><a href='<?=DOMINIO?><?=$controller?>/imoveis_favoritos' >Imóveis Favoritos</a></li>
									</ul>
								</div>
								
							</div>
							<div class="col-xs-12 col-sm-7 col-md-7">
								<ul>
									<?php
									//lista colunas
									$n = 1;
									foreach ($conteudo_sessao['menu'] as $key => $value) { 

										echo "<li><a href='".$value['destino']."' >".$value['titulo']."</a></li>";

										$n++;
									}
									?>
								</ul>
							</div>
						</div>

						<div class="rodape_copy" >
							<?=$conteudo_sessao['data_rodape']->copy?>
						</div>

					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					
					

				</div> 

			</div> 
		</div>

	</footer>

	<?php
	if( (!isset($_SESSION['cookies'])) AND ($conteudo_sessao['data_rodape']->mostrar_aviso == 1) ){
		?>
		<div class="fot-fixd politica_cookies" style="background-color: <?=$cores['25']?>; color:<?=$cores['24']?>; " ><div class="fot-fixd-msg"><?=$conteudo_sessao['data_rodape']->aviso_conteudo?></div><div class="fot-fixd-box clearfix"><?=$botao_aviso?></div></div>
		<?php
	}
	?>

<?php } ?>


<script type="text/javascript">
	function aceitar_cokies(){
		$.post('<?=DOMINIO?>index/cookies_aceitar', {token: '<?=time()?>'},function(data){
			if(data){
				$('.politica_cookies').hide();
			}
		});
	}
</script>


<?php if($conteudo_sessao['data_rodape']->mostrar_whats == 1){ ?>

	<!-- START Widget WhastApp -->
<a href="https://wa.me/55<?=$conteudo_sessao['data_rodape']->whatsapp?>" class="bt-whatsApp" target="_blank" style="left:25px; position:fixed;width:60px;height:60px;bottom:40px;z-index:100;">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGhlaWdodD0iMjU2cHgiIHN0eWxlPSJzaGFwZS1yZW5kZXJpbmc6Z2VvbWV0cmljUHJlY2lzaW9uOyB0ZXh0LXJlbmRlcmluZzpnZW9tZXRyaWNQcmVjaXNpb247IGltYWdlLXJlbmRlcmluZzpvcHRpbWl6ZVF1YWxpdHk7IGZpbGwtcnVsZTpldmVub2RkOyBjbGlwLXJ1bGU6ZXZlbm9kZCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMjU2MDAwIDI1NTk5OCIgd2lkdGg9IjI1NnB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPgogICA8IVtDREFUQVsKICAgIC5maWwzIHtmaWxsOm5vbmV9CiAgICAuZmlsMSB7ZmlsbDojNTRDQzYxfQogICAgLmZpbDAge2ZpbGw6I0VFRUVFRX0KICAgIC5maWwyIHtmaWxsOiNGRkZGRkV9CiAgIF1dPgogIDwvc3R5bGU+PC9kZWZzPjxnIGlkPSJMYXllcl94MDAyMF8xIj48ZyBpZD0iXzM5NDU4NTU3NiI+PHBhdGggY2xhc3M9ImZpbDAiIGQ9Ik03OTE2OSAyMzA2NDlsLTYwNzY5IDE5MzM5IC0xODQwMCA1ODU2IDI1ODQ5IC03NjM0OWMtNDMzOCwtNzk3NCAtNzc3NCwtMTY0MjAgLTEwMjIxLC0yNTE2OCAtMjk3MCwtMTA2MTQgLTQ0NjgsLTIxNTgzIC00NDY4LC0zMjYwNSAwLC0zMjQzMCAxMjkwMiwtNjMxNzUgMzU5MDUsLTg1OTkzIDIzMDc3LC0yMjg5MCA1NDA1MiwtMzU1NzQgODY1NTEsLTM1NTc0IDMyNDg3LDAgNjM0NDYsMTI2OTkgODY1MDQsMzU1OTMgMjI5OTMsMjI4MzEgMzU4ODAsNTM1ODQgMzU4ODAsODYwMTMgMCwzMjQyNiAtMTI5MDEsNjMxNjggLTM1ODk3LDg1OTgzIC0yMzA2OCwyMjg4OCAtNTQwMzQsMzU1NzYgLTg2NTI0LDM1NTc2IC0xMDMwNywwIC0yMDU3NywtMTI3MiAtMzA1NjQsLTM4MjcgLTgyMzcsLTIxMDcgLTE2MjMwLC01MDc2IC0yMzg0NiwtODg0NHoiLz48cGF0aCBjbGFzcz0iZmlsMSIgZD0iTTI0NjIzNiAxMjE3NjFjMCwtMzA4ODAgLTEyNjA5LC01ODg0MyAtMzI5OTUsLTc5MDg0IC0yMDM4NCwtMjAyNDEgLTQ4NTM2LC0zMjc1OSAtNzk2MjUsLTMyNzU5IC0zMTExNiwwIC01OTI4MywxMjUxMyAtNzk2NzUsMzI3NDMgLTIwNDAzLDIwMjM4IC0zMzAxOCw0ODE5NCAtMzMwMTgsNzkwNjEgMCwxMDM2MiAxNDMzLDIwNDE4IDQxMDcsMjk5NzQgMjY1Nyw5NDk1IDY1NDQsMTg0ODQgMTE0NzEsMjY3ODNsLTE5NTE4IDU3NjQ5IC0xNTQzIDQ1NTcgNDU4NCAtMTQ1OSA2MDAzMiAtMTkxMDRjNzk0Nyw0Mjc3IDE2NDUxLDc2MjkgMjUzNzksOTkxMyA4OTk0LDIzMDEgMTg0MjEsMzUyMiAyODE0NCwzNTIyIDMxMTAyLDAgNTkyNjAsLTEyNTE1IDc5NjQ4LC0zMjc0MiAyMDM5NiwtMjAyMzcgMzMwMDksLTQ4MTkyIDMzMDA5LC03OTA1NHoiLz48cGF0aCBjbGFzcz0iZmlsMiIgZD0iTTExNTI5NSA5MTIzMWMtNDk0LC05OTUgLTMzNDgsLTc4OTEgLTU5ODAsLTE0MjQ1IC0xNjgyLC00MDYzIC0zMjg2LC03OTM3IC0zNjAxLC04Njg3IC0yOTYyLC03MDY0IC02MjM3LC02ODUxIC04NzUwLC02Njg4IC0xNjUsMTAgLTMyMywyMSAtNTM2LDIxIC04NzYsMCAtMTczOCwtNTQgLTI2MzAsLTExMSAtMTExNiwtNzEgLTIyNzUsLTE0NCAtMzM3MCwtMTQ0IC0xNDU2LDAgLTM0MzgsMzAyIC01NTI2LDEyNzkgLTE1NDksNzI0IC0zMTQ1LDE4MTUgLTQ2MDgsMzQyMiAtMjEyLDIzMCAtMzczLDM5OSAtNTQ4LDU4MiAtMzQ3OCwzNjU2IC0xMTA1OSwxMTYyNSAtMTEwNTksMjY5MzIgMCwxNjA1NiAxMTU3OCwzMTMyNCAxMzI3OSwzMzU2N2wtNiA0IDE1IDIxIDIwIDE5YzY2LDg2IDMxMiw0NDUgNjc2LDk3NyA0Mjc1LDYyNTMgMjM5MzIsMzUwMDIgNTM4MTUsNDY2NzQgMjcxMTAsMTA1NzggMzIwMTUsOTM5MSAzNjM5Nyw4MzMxIDc0NiwtMTgwIDE0NzQsLTM1NyAyMjYyLC00MjkgMzU0OSwtMzM0IDkzNTMsLTI3NjMgMTQyMzgsLTYxNzQgNDA1MiwtMjgzMCA3NTg5LC02NDA2IDg5NDMsLTEwMTcyIDEyMDgsLTMzNjYgMTg5MiwtNjQ5MyAyMjA5LC05MDY4IDQ2MCwtMzczOSA5NSwtNjY4MiAtNTg1LC03ODE5bC05IC05Yy0xMDM1LC0xNzA1IC0yODI0LC0yNTQ5IC01NTA5LC0zODE2IC00NzQsLTIyNCAtOTc5LC00NjMgLTE0NjYsLTY5OGwyIC0zYy0xODUxLC05NDIgLTgyNTUsLTQwNzMgLTEzNzI5LC02NjYwIC0zNTM3LC0xNjcyIC02NjgwLC0zMTA5IC03OTI1LC0zNTU2IC0xNzUwLC02MjkgLTMyNzYsLTExMDUgLTQ5MTIsLTkxOSAtMTg1MywyMDkgLTM0NzEsMTE2MyAtNDk3MCwzNDM0bC01IC0yYy03NTMsMTEzMCAtMjA4MCwyODI2IC0zNTMwLDQ2MDMgLTIyOTYsMjgxMyAtNTAzNSw1OTcxIC02MjAzLDcyOThsMCA5Yy00OTgsNTY3IC05MjgsODc3IC0xMzQ5LDkyNyAtNTg2LDcxIC0xMzkwLC0xNjkgLTI1MDMsLTcxNSAtNzEyLC0zNTYgLTE0MDUsLTY1NiAtMjI2MSwtMTAyNiAtNDMyOSwtMTg2NyAtMTI3NjEsLTU1MDUgLTIyMzcwLC0xNDAxMyAtMzQzNywtMzA0MyAtNjQ2MiwtNjM2OSAtODk4OCwtOTQ4OSAtNDA5MSwtNTA1MSAtNjg1MywtOTU1MSAtNzk1MiwtMTE0NDYgLTg2NywtMTQ4NiA5NywtMjQ1MCA5ODUsLTMzMzlsLTMgLTVjOTgzLC05ODMgMjA5NSwtMjMyMCAzMjEyLC0zNjYxIDUwOCwtNjEyIDEwMTcsLTEyMjQgMTYzNiwtMTkzNmwxMCAtMTBjMTUwNiwtMTc1MSAyMTI5LC0zMDI3IDI5NzMsLTQ3NDggMTQ2LC0yOTggMzAwLC02MTMgNDU0LC05MjFsMTAgLTljNzQwLC0xNDk0IDkzMCwtMjkxNCA3OTIsLTQyNDUgLTEyOSwtMTIzOSAtNTQzLC0yMzQ1IC0xMDQ5LC0zMzM0bDQgLTN6Ii8+PC9nPjwvZz48cmVjdCBjbGFzcz0iZmlsMyIgaGVpZ2h0PSIyNTU5OTgiIHdpZHRoPSIyNTU5OTgiIHg9IjEiLz48L3N2Zz4=" alt="" width="60px">
</a>
<span id="alertWapp" style="left:30px; visibility: hidden; position:fixed;	width:17px;	height:17px;bottom:90px; background:red;z-index:101; font-size:11px;color:#fff;text-align:center;border-radius: 50px; font-weight:bold;line-height: normal; "> 1 </span>
<div id="msg1" style="left: 90px; visibility: hidden; background: #fff;color: #000;position: fixed;width: 100px;bottom: 55px;font-size: 12px;line-height: 13px;padding: 3px; border-radius: 10px; border:1px solid #e2e2e2; box-shadow: 2px 2px 3px #999;z-index:100; ">Como podemos te ajudar?</div>
<script type="text/javascript">function showIt2() {document.getElementById("msg1").style.visibility = "visible";}    setTimeout("showIt2()", 5000); function hiddenIt() {document.getElementById("msg1").style.visibility = "hidden";}setTimeout("hiddenIt()", 15000); function showIt3() {document.getElementById("msg1").style.visibility = "visible";} setTimeout("showIt3()", 25000);  msg1.onclick = function() {document.getElementById('msg1').style.visibility = "hidden"; };function alertW() { document.getElementById("alertWapp").style.visibility = "visible";	} setTimeout("alertW()", 15000); </script>


	<?php } ?>