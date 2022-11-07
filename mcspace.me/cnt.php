<?php
require_once "cfg.php";
// cnt 1 DB
try {
	$pdo = new PDO($dsn, $user, $password);
} catch (Exception $e){
	$errorMsg = $e->getMessage();
	die("creation PDO object: ". $errorMsg);
}
// cnt 2 DB
try {
	$pdo_2 = new PDO($dsn_2, $user_2, $password_2);
} catch (Exception $e){
	$errorMsg_2 = $e->getMessage();
	die("creation PDO_2 object: ". $errorMsg_2);
}
// bd mmmo
try {
	$pdo_3 = new PDO($dsn_3, $user_3, $password_3);
} catch (Exception $e){
	$errorMsg_3 = $e->getMessage();
	die("creation PDO_3 object: ". $errorMsg_3);
}
// user cfg
	$data = $pdo->prepare('SELECT * FROM users WHERE login = :login');
	$data->execute(array('login' => $_SESSION['user']));
	while($row = $data->fetch(PDO::FETCH_ASSOC)) {
		$credit	= $row['credit'];
		$sex = $row['sex'];
		$timer = $row['timer'];
		$register = $row['register'];
		$rub = $row['rub'];
		$cloaksCheck = $row['cloak'];
		$code_invite_code = $row['code_invite'];
		$tele_id = $row['tele_id'];
		$email_acc = $row['email'];
	}

	$dataMod = $pdo->prepare('SELECT * FROM mod_group_ST WHERE login = :login');
	$dataMod->execute(array('login' => $_SESSION['user']));
	while($rowMod = $dataMod->fetch(PDO::FETCH_ASSOC)) {
		$loginMod = $rowMod['login'];
		$mod_group_ST = $rowMod['mod_group'];
	}

	$dataModMMORPG = $pdo->prepare('SELECT * FROM mod_group_MMO WHERE login = :login');
	$dataModMMORPG->execute(array('login' => $_SESSION['user']));
	while($rowModMMORPG = $dataModMMORPG->fetch(PDO::FETCH_ASSOC)) {
		$loginModMMORPG = $rowModMMORPG['login'];
		$mod_group_MMORPG = $rowModMMORPG['mod_group'];
	}

	$dataST = $pdo->prepare('SELECT * FROM groupsST WHERE login = :login');
	$dataST->execute(array('login' => $_SESSION['user']));
	while($rowST = $dataST->fetch(PDO::FETCH_ASSOC)) {
		$login_ST = $rowST['login'];
		$group_ST = $rowST['groupp'];
		$group_month_ST = $rowST['groupp_month'];
		$timer_group_db_ST = $rowST['set_group'];
	}

	$dataMMORPG = $pdo->prepare('SELECT * FROM groupsMMORPG WHERE login = :login');
	$dataMMORPG->execute(array('login' => $_SESSION['user']));
	while($rowMMORPG = $dataMMORPG->fetch(PDO::FETCH_ASSOC)) {
		$login_MMORPG = $rowMMORPG['login'];
		$group_MMORPG	= $rowMMORPG['groupp'];
		$group_month_MMORPG = $rowMMORPG['groupp_month'];
		$timer_group_db_MMORPG = $rowMMORPG['set_group'];
	}

// donate cfg ST
	$dataSTR = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTR->execute(array('donat' => 'RedStone'));
	while($rowSTR = $dataSTR->fetch(PDO::FETCH_ASSOC)) {
		$red30	= $rowSTR['price_m'];
		$redF = $rowSTR['price_f'];
	}
	
	$dataSTL = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTL->execute(array('donat' => 'Lapis'));
	while($rowSTL = $dataSTL->fetch(PDO::FETCH_ASSOC)) {
		$lapis30	= $rowSTL['price_m'];
		$lapisF = $rowSTL['price_f'];
	}

	$dataSTG = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTG->execute(array('donat' => 'Gold'));
	while($rowSTG = $dataSTG->fetch(PDO::FETCH_ASSOC)) {
		$gold30	= $rowSTG['price_m'];
		$goldF = $rowSTG['price_f'];
	}

	$dataSTD = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTD->execute(array('donat' => 'Diamond'));
	while($rowSTD = $dataSTD->fetch(PDO::FETCH_ASSOC)) {
		$diamond30	= $rowSTD['price_m'];
		$diamondF = $rowSTD['price_f'];
	}

	$dataSTE = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTE->execute(array('donat' => 'Emerald'));
	while($rowSTE = $dataSTE->fetch(PDO::FETCH_ASSOC)) {
		$emerald30	= $rowSTE['price_m'];
		$emeraldF = $rowSTE['price_f'];
	}

	$dataSTDM = $pdo->prepare('SELECT * FROM donate_ST WHERE donat = :donat');
	$dataSTDM->execute(array('donat' => 'DonMod'));
	while($rowSTDM = $dataSTDM->fetch(PDO::FETCH_ASSOC)) {
		$mod30	= $rowSTDM['price_m'];
		$modF = $rowSTDM['price_f'];
	}

	// cfg donate MMORPG

	$dataMMORPGR = $pdo->prepare('SELECT * FROM donate_MMORPG WHERE donat = :donat');
	$dataMMORPGR->execute(array('donat' => 'RedStone'));
	while($rowMMORPGR = $dataMMORPGR->fetch(PDO::FETCH_ASSOC)) {
		$red30MMORPG	= $rowMMORPGR['price_m'];
		$redFMMORPG = $rowMMORPGR['price_f'];
	}
	
	$dataMMORPGL = $pdo->prepare('SELECT * FROM donate_MMORPG WHERE donat = :donat');
	$dataMMORPGL->execute(array('donat' => 'Lapis'));
	while($rowMMORPGL = $dataMMORPGL->fetch(PDO::FETCH_ASSOC)) {
		$lapis30MMORPG	= $rowMMORPGL['price_m'];
		$lapisFMMORPG = $rowMMORPGL['price_f'];
	}

	$dataMMORPGG = $pdo->prepare('SELECT * FROM donate_MMORPG WHERE donat = :donat');
	$dataMMORPGG->execute(array('donat' => 'Gold'));
	while($rowMMORPGG = $dataMMORPGG->fetch(PDO::FETCH_ASSOC)) {
		$gold30MMORPG	= $rowMMORPGG['price_m'];
		$goldFMMORPG = $rowMMORPGG['price_f'];
	}

	$dataMMORPGD = $pdo->prepare('SELECT * FROM donate_MMORPG WHERE donat = :donat');
	$dataMMORPGD->execute(array('donat' => 'Diamond'));
	while($rowMMORPGD = $dataMMORPGD->fetch(PDO::FETCH_ASSOC)) {
		$diamond30MMORPG	= $rowMMORPGD['price_m'];
		$diamondFMMORPG = $rowMMORPGD['price_f'];
	}

	$dataMMORPGE = $pdo->prepare('SELECT * FROM donate_MMORPG WHERE donat = :donat');
	$dataMMORPGE->execute(array('donat' => 'Emerald'));
	while($rowMMORPGE = $dataMMORPGE->fetch(PDO::FETCH_ASSOC)) {
		$emerald30MMORPG	= $rowMMORPGE['price_m'];
		$emeraldFMMORPG = $rowMMORPGE['price_f'];
	}

// ST

// for red
$lapisRed = $lapisF - $redF;
$goldRed = $goldF - $redF;
$diamondRed = $diamondF - $redF;
$emeraldRed = $emeraldF - $redF;
$modRed = $modF - $redF;
// for lapis
$goldLapis = $goldF - $lapisF;
$diamondLapis = $diamondF - $lapisF;
$emeraldLapis = $emeraldF - $lapisF;
$modLapis = $modF - $lapisF;
// for gold
$diamondGold = $diamondF - $goldF;
$emeraldGold = $emeraldF - $goldF;
$modGold = $modF - $goldF;
// for diamond
$emeraldDiamond = $emeraldF - $diamondF;
$modDiamond = $modF - $diamondF;
// for emerald
$modEmerald = $modF - $emeraldF;

// MMORPG

$lapisRedMMORPG = $lapisFMMORPG - $redFMMORPG; // 1000 - 500 = 500
$goldRedMMORPG = $goldFMMORPG - $redFMMORPG;
$diamondRedMMORPG = $diamondFMMORPG - $redFMMORPG;
$emeraldRedMMORPG = $emeraldFMMORPG - $redFMMORPG;
// for lapis
$goldLapisMMORPG = $goldFMMORPG - $lapisFMMORPG;
$diamondLapisMMORPG = $diamondFMMORPG - $lapisFMMORPG;
$emeraldLapisMMORPG = $emeraldFMMORPG - $lapisFMMORPG;
// for gold
$diamondGoldMMORPG = $diamondFMMORPG - $goldFMMORPG;
$emeraldGoldMMORPG = $emeraldFMMORPG - $goldFMMORPG;
// for diamond
$emeraldDiamondMMORPG = $emeraldFMMORPG - $diamondFMMORPG;

$sql_discount = "SELECT * FROM discount WHERE accept=1";
$result = $pdo->query($sql_discount);
$fetch = $result->fetch(PDO::FETCH_ASSOC);
$discount = abs(($fetch['dis'] / 100 ) - 1);
	// СКИДКА НА ST

	if($discount > 0){

		$redF = $redF * $discount;
		$red30 = $red30 * $discount;
		$lapisF = $lapisF * $discount;
		$lapis30 = $lapis30 * $discount;
		$goldF = $goldF * $discount;
		$gold30 = $gold30 * $discount;
		$diamond30 = $diamond30 * $discount;
		$diamondF = $diamondF * $discount;
		$emerald30 = $emerald30 * $discount;
		$emeraldF = $emeraldF * $discount;
		$mod30 = $mod30 * $discount;
		$modF = $modF * $discount;

} else {

		$redF = $redF;
		$red30 = $red30;
		$lapisF = $lapisF;
		$lapis30 = $lapis30;
		$goldF = $goldF;
		$gold30 = $gold30;
		$diamond30 = $diamond30;
		$diamondF = $diamondF;
		$emerald30 = $emerald30;
		$emeraldF = $emeraldF;
		$mod30 = $mod30;
		$modF = $modF;

}

	if($discount > 0){

		$lapisRed = $lapisRed * $discount; 
		$goldRed = $goldRed * $discount;
		$diamondRed = $diamondRed * $discount;
		$emeraldRed = $emeraldRed * $discount;
		$modRed = $modRed * $discount;
		// for lapis
		$goldLapis = $goldLapis * $discount;
		$diamondLapis = $diamondLapis * $discount;
		$emeraldLapis = $emeraldLapis * $discount;
		$modLapis = $modLapis * $discount;
		// for gold
		$diamondGold = $diamondGold * $discount;
		$emeraldGold = $emeraldGold * $discount;
		$modGold = $modGold * $discount;
		// for diamond
		$emeraldDiamond = $emeraldDiamond * $discount;
		$modDiamond = $modDiamond * $discount;
		// for emerald
		$modEmerald = $modEmerald * $discount;
		
	}
	// СКИДКА НА MMORPG

	if($discount > 0){

		$redFMMORPGdis = $redFMMORPG * $discount;
		$lapisFMMORPGdis = $lapisFMMORPG * $discount;
		$goldFMMORPGdis = $goldFMMORPG * $discount;
		$diamondFMMORPGdis = $diamondFMMORPG * $discount;
		$emeraldFMMORPGdis = $emeraldFMMORPG * $discount;
	}

	if($discount > 0){
		
		$lapisRedMMORPG = $lapisRedMMORPG * $discount; 
		$goldRedMMORPG = $goldRedMMORPG * $discount;
		$diamondRedMMORPG = $diamondRedMMORPG * $discount;
		$emeraldRedMMORPG = $emeraldRedMMORPG * $discount;
		// for lapis
		$goldLapisMMORPG = $goldLapisMMORPG * $discount;
		$diamondLapisMMORPG = $diamondLapisMMORPG * $discount;
		$emeraldLapisMMORPG = $emeraldLapisMMORPG * $discount;
		// for gold
		$diamondGoldMMORPG = $diamondGoldMMORPG * $discount;
		$emeraldGoldMMORPG = $emeraldGoldMMORPG * $discount;
		// for diamond
		$emeraldDiamondMMORPG = $emeraldDiamondMMORPG * $discount;

	}

$mystring = $email_acc;
$vkMCS   = 'vkMCS';
$teleMCS   = 'teleMCS';
$findTele = strpos($mystring, $teleMCS);
$findVk = strpos($mystring, $vkMCS);

if ($findTele !== false) $check_id = "teleMCS";
else if ($findVk !== false) $check_id = "vkMCS";

if(empty($tele_id)) $reg_type = 'Почта';
else if ($check_id == "teleMCS") $reg_type = 'Телеграм';
else if ($check_id == "vkMCS") $reg_type = 'ВКонтакте';


if(date(j) >= 1 and date(G) >= 0 and date(i) >= 00){

	$sql = "SELECT * FROM `restart_votes`";
	$stm = $pdo->query($sql);
	$arr = $stm->fetchAll();
	$time = time();
	if($arr[0]['time'] <= $time){
		$sql = "SELECT * FROM `restart_votes`";
		$sql1 = "UPDATE `restart_votes` SET isRestart=0";
		$pdo->query($sql1);
		$stm = $pdo->query($sql);
		$arr = $stm->fetchAll();
		$time = $time + 2500000;
		if($arr[0]['isRestart'] == 0){
			$sql = "UPDATE `restart_votes` SET isRestart=1,`time`=$time";
			$sql1 = "UPDATE `users` SET votes=0";
			$pdo->query($sql);
			$data10 = $pdo->prepare('SELECT * FROM users WHERE votes>:votes ORDER BY votes DESC LIMIT 3');
			$data10->execute(array('votes' => 0));
			while($row10 = $data10->fetch(PDO::FETCH_ASSOC)) {
				$loginRow10 = $row10['login'];
				$votesRow10 = $row10['votes'];
				$sql = "INSERT INTO wins_votes (login, votes) VALUES ('$loginRow10', $votesRow10)";
				$result = $pdo->query($sql);
				$num++;
			}
			$pdo->query($sql1);
		}
	}
	$sql = "SELECT * FROM `wins_votes`";
	$sql_del = "DELETE FROM `wins_votes`";
	$stm = $pdo->query($sql);
	$arr = $stm->fetchAll();
	$null = array();
	if($arr != $null){
		$sql1 = "UPDATE `users` SET rub=rub+$st WHERE login='".$arr[0][1]."'";
		$sql2 = "UPDATE `users` SET rub=rub+$nd WHERE login='".$arr[1][1]."'";
		$sql3 = "UPDATE `users` SET rub=rub+$rd WHERE login='".$arr[2][1]."'";
		$pdo->query($sql1);
		$pdo->query($sql2);
		$pdo->query($sql3);
		$pdo->query($sql_del);
	}
}


	
// ST

switch ($group_ST) {
	case 1:
		$userP_ST = 'Игрок';
		break;
	case 2:
		$userP_ST = 'RedStone';
		break;
	case 3:
		$userP_ST = 'Lapis';
		break;
	case 4:
		$userP_ST = 'Gold';
		break;
	case 5:
		$userP_ST = 'Diamond';
		break;
	case 6:
		$userP_ST = 'Emerald';
		break;
	case 7:
		$userP_ST = 'DonMod';
		break;
	case 8:
		$userP_ST = 'DonAdmin';
		break;

}

// ST

switch ($group_month_ST) {
	case 1:
		$userP_ST_month = 'Игрок';
		break;
	case 2:
		$userP_ST_month = 'RedStone';
		break;
	case 3:
		$userP_ST_month = 'Lapis';
		break;
	case 4:
		$userP_ST_month = 'Gold';
		break;
	case 5:
		$userP_ST_month = 'Diamond';
		break;
	case 6:
		$userP_ST_month = 'Emerald';
		break;
	case 8:
		$userP_ST_month = 'DonAdmin';
		break;
}

// ST

switch ($mod_group_ST) {
	case 0:
		$mod_user_ST = 'Игрок';
		break;
	case 1:
		$mod_user_ST = 'Тестер';
		break;
	case 2:
		$mod_user_ST = 'Помощник';
		break;
	case 3:
		$mod_user_ST = 'Модератор';
		break;
	case 4:
		$mod_user_ST = 'Ст.модератор';
		break;
	case 5:
		$mod_user_ST = 'Гл.модератор';
		break;
	case 6:
		$mod_user_ST = 'Строитель';
		break;
	case 7:
		$mod_user_ST = 'Геймдизайнер';
		break;
	case 8:
		$mod_user_ST = 'Разработчик';
		break;
	case 9:
		$mod_user_ST = 'Куратор';
		break;
	case 10:
		$mod_user_ST = 'Тех.Админ';
		break;
	case 11:
		$mod_user_ST = 'Администратор';
		break;
	case 12:
		$mod_user_ST = 'Владелец';
		break;
}

// MMORPG

switch ($group_MMORPG) {
	case 1:
		$userP_MMORPG = 'Игрок';
		break;
	case 2:
		$userP_MMORPG = 'RedStone';
		break;
	case 3:
		$userP_MMORPG = 'Lapis';
		break;
	case 4:
		$userP_MMORPG = 'Gold';
		break;
	case 5:
		$userP_MMORPG = 'Diamond';
		break;
	case 6:
		$userP_MMORPG = 'Emerald';
		break;
	case 8:
		$userP_MMORPG = 'DonAdmin';
		break;
}

// MMORPG

switch ($mod_group_MMORPG) {
	case 0:
		$mod_user_MMORPG = 'Игрок';
		break;
	case 1:
		$mod_user_MMORPG = 'Тестер';
		break;
	case 2:
		$mod_user_MMORPG = 'Помощник';
		break;
	case 3:
		$mod_user_MMORPG = 'Модератор';
		break;
	case 4:
		$mod_user_MMORPG = 'Ст.модератор';
		break;
	case 5:
		$mod_user_MMORPG = 'Гл.модератор';
		break;
	case 6:
		$mod_user_MMORPG = 'Строитель';
		break;
	case 7:
		$mod_user_MMORPG = 'Геймдизайнер';
		break;
	case 8:
		$mod_user_MMORPG = 'Разработчик';
		break;
	case 9:
		$mod_user_MMORPG = 'Куратор';
		break;
	case 10:
		$mod_user_MMORPG = 'Тех.Админ';
		break;
	case 11:
		$mod_user_MMORPG = 'Администратор';
		break;
	case 12:
		$mod_user_MMORPG = 'Владелец';
		break;
}


if($timer_group_db_ST == 0){
	if($mod_group_ST >= 1) $userP_ST_account = $mod_user_ST;
	else $userP_ST_account = $userP_ST; 
}
elseif($timer_group_db_ST == 1) $userP_ST_account = $userP_ST_month;
else $userP_ST_account = $userP_ST;
	
$timerGroup = 2592000;
$timer_group_ST = delGroupTimer_ST($_SESSION['user'], $timerGroup);
$timer_group_ST_day = round(($timer_group_ST/24)/60/60); // из сек в день 
if ($timer_group_db_ST == 1){

	if($timer_group_ST_day == 1)
		$timer_group_ST_text = " : Осталось $timer_group_ST_day день";
	elseif($timer_group_ST_day == 2 || $timer_group_ST_day == 3 || $timer_group_ST_day == 4)
		$timer_group_ST_text = " : Осталось $timer_group_ST_day дня";
	elseif($timer_group_ST_day > 4)
		$timer_group_ST_text = " : Осталось $timer_group_ST_day дней";
	else 
		$timer_group_ST_text = " : Осталось $timer_group_ST секунд";
}
else 
	$timer_group_ST_text = "";

// MMORPG

if($timer_group_db_MMORPG == 0){
	if($mod_group_MMORPG >= 1) $userP_MMORPG_account = $mod_user_MMORPG;
	else $userP_MMORPG_account = $userP_MMORPG; 
}
elseif($timer_group_db_MMORPG == 1) $userP_MMORPG_account = $userP_MMORPG_month;
else $userP_MMORPG_account = $userP_MMORPG;
	
$timerGroup = 2592000;
$timer_group_MMORPG = delGroupTimer_ST($_SESSION['user'], $timerGroup);
$timer_group_MMORPG_day = round(($timer_group_MMORPG/24)/60/60); // из сек в день 
if ($timer_group_db_MMORPG == 1){

	if($timer_group_MMORPG_day == 1)
		$timer_group_MMORPG_text = " : Осталось $timer_group_MMORPG_day день";
	elseif($timer_group_MMORPG_day == 2 || $timer_group_MMORPG_day == 3 || $timer_group_MMORPG_day == 4)
		$timer_group_MMORPG_text = " : Осталось $timer_group_MMORPG_day дня";
	elseif($timer_group_MMORPG_day > 4)
		$timer_group_MMORPG_text = " : Осталось $timer_group_MMORPG_day дней";
	else 
		$timer_group_MMORPG_text = " : Осталось $timer_group_MMORPG секунд";
}
else 
	$timer_group_MMORPG_text = "";

require_once "regenModGroups.php";
require_once "regenGroups.php";
require_once "safeAcc.php";
require_once "insertCodeInvite.php";

$sql = "SELECT UNIX_TIMESTAMP(register) AS timestamp FROM `activation`";
$stm = $pdo->query($sql);
$arr = $stm->fetchAll();
$timestamp = (isset($arr[0]['timestamp'])) ? $arr[0]['timestamp'] : NULL;
$time = time();
$timeT = $time - $timestamp;
$min = 3600;
if($timeT > $min){
	$sql = "DELETE FROM activation WHERE UNIX_TIMESTAMP(register)=$timestamp  LIMIT 1";
	if($timeT > $min) $pdo->query($sql);
}

$selectQuery = $pdo->query("SELECT * FROM users WHERE login=''");
$fetchZero = $selectQuery->fetchAll();

$selectQueryE = $pdo->query("SELECT * FROM users WHERE email=''");
$fetchZeroE = $selectQueryE->fetchAll();

if(empty($fetchZero[0][1]) or empty($fetchZeroE[0][2])){
	$sql = "DELETE FROM users WHERE login='' LIMIT 1";
	$pdo->query($sql);
	$sql = "DELETE FROM users WHERE email='' LIMIT 1";
	$pdo->query($sql);
}
