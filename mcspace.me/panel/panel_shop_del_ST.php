<?
require_once "../cnt.php";

//cfg

$table = "shop_ST";
$link = "https://mcspace.me/panel/index.php?act=skytech_shop";


//

$itemTitle = safeGet($_POST, 'itemTitle');

if(isset($itemTitle))
{
	if(!empty($itemTitle))
	{
		$itemTitleEN = translitRU_EN($itemTitle);
		$sql = "DELETE FROM ".$table." WHERE itemTitle='$itemTitleEN'";
		$result = $pdo->query($sql);
		header('Location: '.$link.'&yes');
		exit();
		
	}
	else 
	{
		header('Location: '.$link.'&no');
		exit();	
	}
}
else 
{
	header('Location: '.$link.'&no');
	exit();	
}	