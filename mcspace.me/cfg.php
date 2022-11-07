<?php
/*
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('track_errors', '1');
ini_set('error_reporting', '-1');
ini_set('error_log', '1');
*/
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
ob_start();
error_reporting(0);
@session_start();


$path_to_images = "../img/";
$img = "../skins/";

$server = false;
if($server){

	// FIRST DB
	$dsn = 'mysql:dbname=mcspace_me_db;host=127.0.0.1;charset=utf8';
	$user = 'root'; // mcspace_me_usr
	$password = 'D5bwNv6vzgq4HCkY'; // ZRR4B8KrH0R0FC75
	
	// SECOUND DB
	$dsn_2 = 'mysql:dbname=s215_skytech;host=127.0.0.1;charset=utf8';
	$user_2 = 'u215_mIU1Vnf9xh';
	$password_2 = '1IR3HeqabzLP63ff';

	// 3 DB
	$dsn_3 = 'mysql:dbname=s232_mmo;host=127.0.0.1;charset=utf8';
	$user_3 = 'u232_SqQGjCdzlU';
	$password_3 = 'faurl0DjOd4PJC7C';
	
	$host_MMORPG = '164.132.201.152';
	$port_MMORPG = 25575;
	$password_MMORPG = 't4f2NyE885QleZt3';
	$timeout_MMORPG = 3;

	$host_ST = '164.132.201.152';
	$port_ST = 25575;
	$password_ST = '3084gH834hG30EkDFnKD';
	$timeout_ST = 3;

	$php = '/';
	$page = 'page/';
	$info = 'info/';
	
	$secretMCRATE = 'KnEFXadlVukNYlUe';

	$hostMail = 'ssl://smtp.yandex.ru';
	$userMail = 'support@mcspace.me';
	$passMail = 'sZHFh2brtL2FAf6C';
	$sslMail  = 'ssl';
	$portMail = 465;


	//prizes votes

	$st = 500;
	$nd = 400;
	$rd = 300;
	
	//votes

	$vote1 = 150;
	$vote2 = 150;
	$vote3 = 200;
	
} else {
	$dsn = 'mysql:dbname=maxm;host=127.0.0.1';
	$user = 'maxm';
	$password = '1234567';
	$php = 'index.php';
	$page = '?page=';
	$php_info = 'information.php';
	$info = '?info=';
	
}
	$reg = 				$php.$page.'reg';
	$accAct =			$php.$page.'account_activation';
	$account = 			$php.$page.'account';
	$changedpass = 		$php.$page.'changedpass';
	$download = 		$php.$page.'download';
	$index = 			$php.$page.'index';
	$repairpass = 		$php.$page.'repairpass';
	$rules = 			$php.$page.'rules';
	$sendpass_setlink = $php.$page.'sendpass_setlink';
	$setnewpass_form = 	$php.$page.'setnewpass_form';
	$changepass = 		$php.$page.'changepass';
	$donate = 			$php.$page.'donate';
	$shops = 			$php.$page.'shops';
	$ur = 				$php.$page.'underregister';
	$servers = 			$php.$page.'servers';
	$technomagic = 		$php.$page.'technomagic';
	$skytech =			$php.$page.'servers?srv=skytech';
	$mmorpg =			$php.$page.'servers?srv=mmorpg';
	$pr_team =			$php.$page.'team';
	$sent_acc_reg = 	$php.$page.'sent_acc_reg';
	$items = 			$php.$page.'items';
	$shopST = 			$php.$page.'shops?act=skytech'; // #slider-wrap
	$shopMMORPG = 		$php.$page.'shops?act=mmorpg';  // #slider-wrap
	$votes =			$php.$page.'votes';
	$banlist =			$php.$page.'banlist';
	$credits =			$php.$page.'credits';
	$help =		 		$php.$page.'help';
	$info_mmorpg =		$php_info.$info.'info_mmorpg';
	
require_once "_funcs.php";

