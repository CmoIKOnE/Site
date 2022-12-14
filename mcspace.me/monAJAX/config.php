<?php
/*	Нельзя давать серверам одинаковые имена (name)!	*/
//$servers[]  = array('address' => '88.99.154.75:25565', 'name' => 'TechnoMagic');
$servers[]  = array('address' => '164.132.201.152', 'name' => 'MMORPG');
//$servers[]  = array('address' => '91.121.40.6:25887', 'name' => 'test1');
//$servers[]  = array('address' => 'zxczxcz.xxx:22222', 'name' => 'test4');


$config = array
(
	'template' => './template/Def/monitoring.php',// Путь к папке с шаблоном сайта относительно папки скрипта. Нужен для cron
	'json_mode' => true, // true - обращение идет напрямую к php. false - к его кэшированной части (потребуется подключить к cron ajax.php)
	'timecache' => 20, // Промежуток времени (в секундах) через который мониторинг будет обновляться
	'timeout' => 2, // Максимально время на ожидание ответа сервера майнкрафт
	'smoothBar' => true, // Плавное появление полосы
	'sErr' => 'Ошибка..', // Ответит браузер, если не сможет считать кэш
    'dir' => '//' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/', // Путь к скрипту (лучше не менять)
	'debug' => false // Отладка в случае проблем
);

date_default_timezone_set('Europe/Moscow');
