<?
require_once "cnt.php";
require_once "rcon.php";
$itemBtn = safeGet($_POST, 'itemBtn');
$amount = safeGet($_POST, 'amount');
$idItem = safeGet($_POST, 'idItem');
use Thedudeguy\Rcon;
$rcon = new Rcon($host_MMORPG, $port_MMORPG, $password_MMORPG, $timeout_MMORPG);


if($rcon->connect())
{

	$sql = "SELECT * FROM shop_MMORPG WHERE itemNumber = $idItem";
	$result = $pdo->query($sql);
	$rows = $result->fetchAll();

	foreach($rows as $data) 
	{
		$price = $data['itemPrice'];
		if (isset($itemBtn))
		{
			if($amount <= 0) { header('Location: '.$items.'&act=mmorpg&errorItem#slider-wrap'); exit(); }
			if(!preg_match("/[0-9]/", $amount)) { header('Location: '.$items.'&act=mmorpg&errorItem#slider-wrap'); exit(); }
			
			$readyItem = $price * $amount;
			$rubMinus = $rub - $readyItem;
			
			if($rub >= $readyItem) {
				
				$sql = "UPDATE users SET rub=".$rubMinus." WHERE login='".$_SESSION['user']."' LIMIT 1";
				$result = $pdo->exec($sql);
				
				$resultReady = ($result == 1) ? true : false;
				
				if($resultReady === true)
				{
					$rcon->sendCommand('give-item '.$_SESSION['user'].' '.$idItem.' 0 '.$amount);
					header('Location: '.$items.'&act=mmorpg&success#slider-wrap');
					exit();
				}
				else { header('Location: '.$items.'&act=mmorpg&errorItem#slider-wrap'); exit(); }
			}
			else { header('Location: '.$items.'&act=mmorpg&notRub#slider-wrap'); exit(); }
		} else { header('Location: '.$items.'&act=mmorpg#slider-wrap'); exit(); }
	}
} else { header('Location: '.$items.'&act=mmorpg&no#slider-wrap'); exit(); }
	
?>