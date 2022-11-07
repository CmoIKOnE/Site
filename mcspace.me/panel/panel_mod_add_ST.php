<?
require_once "../cnt.php";

//cfg

$table = "modlist";
$link = "https://mcspace.me/panel/index.php?act=skytech_shop";


//

$modTitle = safeGet($_POST, 'modTitle');

$sql = "SELECT modTitle FROM ".$table;

$query = $pdo->query($sql);
//$count = $query->rowCount();

/*if($count == 1)
{	*/
	if(isset($modTitle))
	{
		if(!empty($modTitle))
		{
			$sql = "INSERT INTO ".$table." (modTitle) VALUES ('$modTitle')";
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
	}/*
}
else
{
	header('Location: '.$link.'&have');
	exit();	
}	*/
