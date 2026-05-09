<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("Brazil/East");
require_once('_config.php');
define('TOKEN1', md5($config['token1'].$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
define('TOKEN2', md5($config['token1'].$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
define("SERVIDOR", $config['SERVIDOR']);
define("USUARIO", $config['USUARIO']);
define("SENHA", $config['SENHA']);
define("BANCO", $config['BANCO']);

if($config['SSL']){
	$config_dominio = "https://".$_SERVER['HTTP_HOST']."/";
	if(!empty($config['PASTA'])){
		$config_dominio = $config_dominio.$config['PASTA']."/";
	}
	if(!isset($_SERVER['HTTPS'])){
		header('Location: '.$config_dominio);
		exit;
	}
} else {
	$config_dominio = "http://".$_SERVER['HTTP_HOST']."/";
	if(!empty($config['PASTA'])){
		$config_dominio = $config_dominio.$config['PASTA']."/";
	}
}

define("DOMINIO", $config_dominio);
define("PASTA_CLIENTE", $config_dominio."arquivos/");
define("AUTOR", "s3m.com.br");
define("CONTROLLERS", "controllers/"); 
define("VIEWS", "views/");
define("MODELS", "models/");
define("LAYOUT", DOMINIO.VIEWS);
define("recaptcha_key", $config['recaptcha_key']);
define("recaptcha_secret", $config['recaptcha_secret']);
require_once('system/system.php');
require_once('system/mysql.php');
require_once('system/controller.php');
require_once('system/model.php');
function auto_carregador($arquivo){ if(file_exists(MODELS.$arquivo.".php")){ require_once(MODELS.$arquivo.".php"); } else {
	//echo "Erro: Um arquivo importante do sistema não foi encontrado $arquivo !";
	//exit;
}} spl_autoload_register("auto_carregador");
$start = new system();
$start->run();