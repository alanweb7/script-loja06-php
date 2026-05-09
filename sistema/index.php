<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("Brazil/East");
require_once('../_config.php');
define('TOKEN2', md5($config['token2'].$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
define('TOKEN1', $config['token2']);
define("SERVIDOR", $config['SERVIDOR']);
define("USUARIO", $config['USUARIO']);
define("SENHA", $config['SENHA']);
define("BANCO", $config['BANCO']);

$config_dominio = (isset($_SERVER['HTTPS']) ? "https" : "http")."://" .$_SERVER['HTTP_HOST']."/";
if(!empty($config['PASTA'])){
	$config_dominio = $config_dominio.$config['PASTA']."/";
}

//$config_dominio = "https://".$_SERVER['HTTP_HOST']."/";
//if($config['PASTA']){
//	$config_dominio = $config_dominio.$config['PASTA']."/";
//}
//if(!isset($_SERVER['HTTPS'])){
//    header('Location: '.$config_dominio.'/sistema');
//    exit;
//}

define("DOMINIO", $config_dominio."sistema/");
define("PASTA_CLIENTE", $config_dominio."arquivos/");
define("AUTOR", "S3M.com.br");
define("TITULO_VIEW", "Gerenciador - S3M");
define("CONTROLLERS", "_controllers/");
define("VIEWS", "_views/");
define("MODELS", "_models/");
define("LAYOUT", DOMINIO.VIEWS);
define("FAVICON", LAYOUT."img/favicon.png");
require_once("_system/system.php");
require_once("_system/mysql.php");
require_once("_system/pdo.php");
require_once("_system/controller.php");
require_once("_system/model.php");
function auto_carregador($arquivo){ if(file_exists(MODELS.$arquivo.".php")){ require_once(MODELS.$arquivo.".php"); } else { echo "Erro: Um arquivo importante do sistema não foi encontrado ($arquivo)!"; exit; }} spl_autoload_register("auto_carregador");
$start = new system();
$start->run();