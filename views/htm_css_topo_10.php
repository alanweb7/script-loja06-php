<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.margemtopo{
		position: relative;
		width: 100%;
		height:74px;
		display: none;
	}
	
	.header-middle .container .row {
		border-bottom: 0px;
	}
	.header-middle .container .row {
		border-bottom: 0px;
		margin-bottom: 0px;
		padding-bottom: 0px;
		margin-top: 0px;
		padding-top: 0px;
	}
	.header-bottom {
		padding:0px;
		margin: 0px;
		border-top:0px;
		padding-top:0px;
	}
	.logo{
		text-align: left;
		margin-top:20px;
	}
	.logo img{ 
		max-width:100%;
		margin-top: 0px;
	}
	.busca_div{
		margin-top:15px;
		margin-bottom:0px;
		text-align: center;
		width: 100%;
	}

	a.botao_carrinho{
		position: relative;
		display: inline-block;
		width: 160px; 
		margin-left:15px;
		overflow: hidden;  
	}
	a.botao_carrinho i{ 
	}
	.botao_carrinho_esq{
		width:30%; 
		margin-left:15%;
		margin-right:5%;
		float: left;
		margin-top:10px;
		text-align:center;
		font-size:38px;
	}
	.botao_carrinho_dir{
		width:100%; 
		float: left;
		text-align: center;
		padding-top:15px;
	}
	.botao_carrinho_dir span{
		font-weight: bold;
		font-size: 16px; 
	}
	.div_botoes_topo{
		text-align: right;
		width: 100%; 
	}
	.div_botoes_topo i{
		font-size:19px; 
	}
	a.botao_conta_topo{
		display: block;
		float: left;
		padding-left: 10px;
		padding-right: 10px;
		padding-top:9px;
		padding-bottom:10px;
		text-align: center;
	}
	a.botao_conta_topo span{
		display:block;
		font-size:10px;
		font-weight: 400;
		padding-top:8px; 
	}
	.fone_topo{
		float: left;
		margin-top:5px;
		font-size: 12px;
		font-weight:500;
		padding-top:4px;
		padding-left:5px; 
		text-align: left;
	}
	.fone_topo i{
		font-size: 13px;
		margin-right:5px;
	}
	.whats_topo{
		float: left;
		margin-top:5px;
		font-size: 12px;
		font-weight: 500;
		padding-top:4px;
		text-align: left;
		padding-left:20px;
		padding-right:20px;
	}
	.whats_topo i{
		font-size: 13px;
		margin-right:5px;
	}

	.redes_topo{
		float: right;
		text-align: center;
		padding-top: 5px;
		padding-left: 20px;
	}
	a.redes_topo_item{
		display: inline-block;
		padding-left:5px;
		padding-right: 5px;
		margin-top:0px;
	}
	a.redes_topo_item img{
		height:18px;
	}
	.mainmenu ul li a{ 
		font-weight: 400;
	}
	.mainmenu ul li a { 
		font-size: 20px;
	}
	.mainmenu ul li a:hover{
		font-weight: 400;
	}
	.mainmenu ul li a.active{ 
		font-weight: 500;
	}
	.navbar-header{
		width: 100%;
		text-align: center;
	}
	.mainmenu ul {
		width: 100%;
		height: 95px;
		text-align: center; 
	}
	.mainmenu ul li{
		float: none;
		display: inline-block;
		margin:0px;
		padding:0px;
		position:inherit;
		height:92px;
	}


	.mainmenu_txt{
		padding-top:0px;
		display: block;
		font-size: 12px;
		text-align: center;
		line-height: 15px;
		width: 100%;
		height:25px; 
	}
	.mainmenu_img{
		display: block;
		width:100%;
		height:42px;
		text-align: center;
	}
	.mainmenu ul li img{
		max-width: 42px;
		max-height: 42px;
	}
	.mainmenu ul li ul{
		position: absolute;
		top:87px;
		width:100%;
		min-width:100%;
		height: auto;
		min-height:20px; 
		margin-left:20px;
		margin-right:20px;
		margin-top: 0px;
	}
	.mainmenu ul li ul li{
		position: relative;
		width:100%;
		height: auto;
		padding: 0px;
		margin: 0px;
		text-align: left;
		max-width: 100%;
		display: block;
		float: left; 
	}
	.mainmenu ul li ul li a{
		position: relative; 
		width: auto;
		height: auto;		
		padding:10px !important;
		text-align: left;
		display: block;
		line-height: 20px; 
		text-decoration: none;
		background-color: transparent !important;
	}
	.mainmenu ul li ul li a:hover{
		position: relative; 
		width: auto;
		height: auto; 
		padding:10px !important;
		text-align: left;
		display: block;
		text-decoration: none;		
		background-color: transparent !important;
	}
	.mainmenu ul li ul li .mainmenu_txt{
		margin-left: 0px;
		text-align: left; 
		background-color:transparent;
		font-size: 14px;  
	}
	.mainmenu ul li ul li:hover{
		background-color: transparent;
	}
	.submenu_esq{
		float: left;
		width: 45%;
		padding-bottom: 20px;
	}
	.submenu_esq a{ 
	}

	.submenu_meio{
		float: left;
		width: 20%;
		padding-bottom: 20px;
	}
	.submenu_dir{
		float: right;
		width: 35%;
	}
	.mainmenu_titulo{
		padding-left:20px;
		padding-top:40px;
		padding-bottom:20px;
		text-align: left;
		font-size: 22px;
		font-weight: 700;
		width:100%;
	}
	.mainmenu_banner{
		width:100%;
		height:auto;
		max-width: none;
		max-height: none;   
	}
	.mainmenu ul li ul img{
		width: 100%;
		height:auto;
		max-width:none;
		max-height:none;
	}

	.topo10{
		background-color: <?=$cores['213']?>;
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		z-index: 999;
		transition: 0.4s ease-out;
		-o-transition: 0.4s ease-out;
		-webkit-transition: 0.4s ease-out;
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
	}
	
	.topo10_decendo{
		background-color: <?=$cores['224']?>;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
	}
	
	.menu_fixo{
		background-color: <?=$cores['224']?>;
		transition: 0.4s ease-out;
		-o-transition: 0.4s ease-out;
		-webkit-transition: 0.4s ease-out;
	}

	.main_header{
		position: relative;
		top: 0px;
		z-index: 999999;
		width: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
	}	
	.main_header, header{
		background: transparent;
	}
	.logo_div{
		padding-top: 10px;
		padding-bottom: 10px;
		width: 100%;
	}
	a.logo{
		display: inline-block;
		width: 100%;
		margin: 0px;
	}
	a.logo img{
		width: 100%;
		max-width: 100%;
	}
	.menu_fixo a.logo{
		width:70%;
		transition: 0.4s ease-out;
		-o-transition: 0.4s ease-out;
		-webkit-transition: 0.4s ease-out;
	}
	.mainmenu ul{
		text-align: right !important;
		margin-top:15px;
	}
	.menu_fixo .mainmenu ul{
		margin-top:0px;
		transition: 0.4s ease-out;
		-o-transition: 0.4s ease-out;
		-webkit-transition: 0.4s ease-out;
	}
	.mainmenu ul li{
		height: auto;
	}
	.mainmenu ul li a{
		width: auto;
		padding:10px !important;
		display: inline-block;
		text-transform: uppercase;
		transition: 0.2s ease-out;
		-o-transition: 0.2s ease-out;
		-webkit-transition: 0.2s ease-out;
		margin-top: 15px;
		background-color:<?=$cores[214]?>;
		border-top:0px solid transparent !important;
	}
	.mainmenu_txt{
		height: auto;
		font-size: 13px;
		font-weight: 500;
		color:<?=$cores[222]?>;
	}
	.mainmenu ul li a:hover {
		background-color:<?=$cores[218]?> !important;
		padding:10px !important; 
		color: <?=$cores[219]?> !important;
		border-radius:2px; 
	}
	.mainmenu ul li a:hover .mainmenu_txt{
		color: <?=$cores[219]?> !important;
	}

	.mainmenu ul li ul{
		top:40px;
		left:-20px;
		width:300px;
		min-width:300px;
		background-color: transparent;
		border:0px;
	}
	.mainmenu ul li ul .setasub{
		position: absolute;
		top: 0px;
		left:10px;
	}
	.submenu_esq{
		width: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
		padding-top:10px;
		margin-top:10px;
		border-radius:2px; 
		min-width:200px;
		background-color: <?=$cores[220]?>;
	}
	.mainmenu ul li ul li a:hover, .mainmenu ul li ul li a{
		border-bottom:0px !important; 
		margin-left:10px !important;
		margin-right:10px !important;		
		margin-top:0px !important;
		margin-bottom: 0px !important;
	}

	.mainmenu ul li ul li .mainmenu_txt{
		font-weight: 400;
		color: <?=$cores[221]?>;
		font-size: 12px;
	}

	.botao_carrinho2{
		display: none;
	}
	.topo_botao_user2{
		display: none;
	}

	.mainmenu ul li{
		position: relative;
	}
 	
 
	
	@media only screen and (max-width:1200px) {
		
		.margemtopo{
			height:64px;
		}
		.mainmenu ul {
			margin-top:10px;
		}
		.mainmenu_txt{
			font-size: 12px;
		}
		.mainmenu ul li ul a .mainmenu_txt{
			font-size: 11px;
		}

	}


	@media only screen and (max-width:990px) {

		.margemtopo{
			height:64px;
		}

		.mainmenu ul li a{
			width: auto; 
		}

		.mainmenu_txt{
			font-size: 10px;
		}

		.mainmenu ul li ul{
			top:40px;
			left:-30px;
			width:300px;
			min-width:300px;
			background-color: transparent;
			border:0px;
		}

		.mainmenu ul li ul li a:hover, .mainmenu ul li ul li a{
			margin-top:10px !important;
		}
		.mainmenu ul li ul li .mainmenu_txt{
			font-size: 10px;
			padding-top:0px;
			padding-bottom:0px;
		}
		.topo_faixasuperior{
			width: 100%;
			margin: 0px;
		}
		.fone_topo{
			font-size: 11px;
		}
		.fone_topo i{
			font-size: 11px;
		}
		.whats_topo{
			font-size: 11px;
		}
		.whats_topo i{
			font-size: 11px;
		}

		.mainmenu ul li ul li a:hover, .mainmenu ul li ul li a{
			margin-top: 0px;
		}
	}

	@media only screen and (max-width:770px) {

		.carousel-pause{
			display: none;
		}
		.navbar-toggle{
			background-color: transparent !important;
			color: <?=$cores[223]?>;
			font-size: 25px;
			right:-165px;
			top:-50px;
			margin-top: -20px;
			padding-top: 0px;
		}
		.topo10{
			position: relative;
		}

		a.logo{
			width:100%;
			text-align: center;
		}
		a.logo img{
			width:100%;
		}
		
		.mainmenu{
			text-align: left !important;
		}
		.mainmenu ul li ul{
			width: 100%;
			min-width: 100%;
			top:0px;
			background-color: transparent;
		}
		.submenu_esq{
			background-color: transparent;			
			border:0px solid #fff;
		}		
		.header-bottom {
			background-color:transparent !important;
		}		 
		.logo_div{
			width: 100%;
			text-align: left;
		}
		.logo_div img{
			width:100%;
		}
		.logo{
			text-align: center;
			width:100%;
		}
		

		.mainmenu_txt{
			color:<?=$cores[223]?> !important;
		}
		.mainmenu ul li ul li a .mainmenu_txt{
			color:<?=$cores[223]?> !important;
		}
		.menu ul li a .mainmenu_txt:hover{
			color:<?=$cores[223]?> !important;
		}
		.mainmenu ul li{
			width: 100% !important;
			max-width: 100% !important;
		} 
		.mainmenu{
			background-color: <?=$cores[215]?> !important;
			z-index: 999999;
		}
		.navbar-collapse.collapse{
			padding-top: 20px;
			box-shadow:none;
		}
		.mainmenu a{
			width: 100% !important;
			display: block !important;
			color: #ffffff !important;
			background-color: #ffffff !important;
			padding-top: 20px;
		}
		.navbar-collapse.collapse{
			margin-top: 0px;
		}
		.menu ul li a{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores[223]?> !important;
			background-color: transparent !important;
		}
		.menu ul li a:hover{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores[223]?> !important;
			background-color: #fffff !important;
		}
		.menu ul li a .mainmenu_txt{
			text-align: left;
			margin-left: 20px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			color: <?=$cores[223]?> !important;
			font-weight: bold;
		}
		.mainmenu ul li ul{
			padding: 0px !important;
			margin: 0px !important;
			background-color: transparent !important;
		}
		.menu ul li ul{
			top: 0px;
			position: relative;
			width: 100% !important;
			min-width:100% !important;
			height: auto !important;
			min-height:10px;
			background-color: transparent !important;
		}
		.mainmenu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li{
			width: 100% !important;
			max-width:100% !important;
		}
		.mainmenu ul{
			height: auto !important;
		}
		.submenu_esq{
			background-color: transparent !important;
			border: none;
			box-shadow:none;
			padding: 0px;
			margin: 0px; 	
		}
		.mainmenu ul li{
			background-color: #ffffff !important;
		}
		.menu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[223]?> !important;
			text-decoration: none;
		}
		.navbar-collapse.collapse{
			background-color: transparent !important;
		}
		.mainmenu_txt{
			text-align: left;
		}
		.navbar-collapse.collapse, .mainmenu{
			background-color: transparent !important;
		}
		.mainmenu ul li a{
			padding-left: 20px;
		}

		.mainmenu ul li ul{
			height: auto !important;
			min-height: 10px;
		}
		.mainmenu ul li ul li a i{
			display: none;
		}

		.navbar-collapse.collapse{
			padding-top: 0px;
		}

		.logo_div{
			padding-top:10px;
			padding-bottom: 15px;
			text-align: left !important;
			width:100%;
		}
		.logo_div img{
			width: auto !important;
			height: 60px !important;
		}
		a.logo{
			text-align: center !important;
			width: auto !important;
			height: 60px !important;
		}
		.navbar-header{
			margin-top:0px;
		}
		.topo10{
			background-color:<?=$cores[215]?> !important;
			box-shadow: 0 6px 12px rgba(0,0,0,.175);
			height: 80px !important;
		}
		.mainmenu ul li a{
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.mainmenu ul li a{
			border-top: 0px !important;
			margin-top:15px !important;
			padding-top: 0px !important;
		}
		.mainmenu ul li a:hover{
			border-top: 0px !important;
			margin-top:5px !important;
			padding-top: 0px !important;
			color: <?=$cores[223]?> !important;
		}
		.mainmenu ul li a:hover .mainmenu_txt{
			border-top: 0px !important;
			color: <?=$cores[223]?> !important;
		}
		.mainmenu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[223]?> !important;
		}
		.header-middle .container .row .col-sm-4{
			padding-left:15px !important;
		}
		.navbar-toggle{
			display: inline-block !important;
			float: none !important;
		}
		 
		.mainmenu ul li a{
			border:0px !important; 
			padding-top: 5px;
		}
		.mainmenu ul li a:hover{
			border:0px !important;
		}
		.mainmenu ul li a .mainmenu_txt{
			font-size: 16px;
		}
		.mainmenu ul li ul li a{
			margin-top:10px;
			margin-bottom: 10px;
		}
		.submenu_esq{
			float: none !important;
		}
		.mainmenu ul li ul{
			position: relative !important;
		}
		.mainmenu ul li ul li a{
			padding-left:40px !important;
			margin-top:5px;
		}
		.mainmenu ul li ul li a:hover{
			padding-left:40px !important;
			margin-top:5px !important;
		}
		.mainmenu ul li ul li a:hover, .mainmenu ul li ul li a{
			margin-top: 0px !important;
		}

		.margemtopo{
			height: 80px;
		}

	}

	@media only screen and (max-width:360px) {	
		
	}

</style>