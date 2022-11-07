<?
require_once "cnt.php";
$itemBtn = safeGet($_POST, 'itemBtn');
$amount = safeGet($_POST, 'amount');
$idItem = safeGet($_POST, 'idItem');

$sql = "SELECT * FROM shop_ST WHERE id_item = $idItem";
$result = $pdo->query($sql);
$rows = $result->fetchAll();

foreach($rows as $data) {
	
	$price = $data['itemPrice'];

	if (isset($itemBtn))
	{
		//$timer = "Y-m-d H:i:s";	
		//$date = date($timer_g);
		
		if($amount <= 0) { header('Location: '.$items.'&act=skytech&errorItem#slider-wrap'); exit(); }
		if(!preg_match("/[0-9]/", $amount)) { header('Location: '.$items.'&act=skytech&errorItem#slider-wrap'); exit(); }
		
		$readyItem = $price * $amount;
		$crMinus = $credit - $readyItem;
		
		if($credit >= $readyItem) {
			
			$sql = "UPDATE users SET credit=".$crMinus." WHERE login='".$_SESSION['user']."' LIMIT 1";
			$result = $pdo->exec($sql);
			
			$resultReady = ($result == 1) ? true : false;
			
		
			if($resultReady === true)
			{
				$sql = "INSERT INTO `shopcart` (type, item, player, amount) VALUES ('item', '".$idItem."', '".$_SESSION['user']."', $amount)";
				$result = $pdo_2->query($sql);
				header('Location: '.$items.'&act=skytech&success#slider-wrap');
				exit();
			}
			else { header('Location: '.$items.'&act=skytech&errorItem#slider-wrap'); exit(); }
		}
		else { header('Location: '.$items.'&act=skytech&notRub#slider-wrap'); exit(); }
	
	} else { header('Location: '.$items.'&act=skytech#slider-wrap'); exit(); }
	
	
	
}

	
?>