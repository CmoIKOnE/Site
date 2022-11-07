<?
require_once "../cnt.php";

//cfg

$table = "mod_list";
$link = "https://mcspace.me/panel/index.php?act=skytech_shop";


//

$modTitle = safeGet($_POST, 'modTitle');

if(isset($modTitle))
{
	if(!empty($modTitle))
	{
		$sql = "DELETE FROM ".$table." WHERE modTitle='$modTitle'";
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