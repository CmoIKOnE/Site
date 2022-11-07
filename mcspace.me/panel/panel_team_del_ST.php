<?
require_once "../cnt.php";
require_once "../rcon.php";

//cfg

$table = "mod_group_ST";
$link = "https://mcspace.me/panel/index.php?act=skytech_team";


//
$login = safeGet($_POST, 'login');
use Thedudeguy\Rcon;

$rcon = new Rcon($host_ST, $port_ST, $password_ST, $timeout_ST);
//if ($rcon->connect())
if(true)
{
	if(isset($login))
	{
		if(!empty($login))
		{		
			/*$rcon->sendCommand("pex user ".$login." group remove tech");
			$rcon->sendCommand("pex user ".$login." group remove curator");
			$rcon->sendCommand("pex user ".$login." group remove dev");
			$rcon->sendCommand("pex user ".$login." group remove gamediz");
			$rcon->sendCommand("pex user ".$login." group remove builder");
			$rcon->sendCommand("pex user ".$login." group remove glmoder");
			$rcon->sendCommand("pex user ".$login." group remove stmoder");
			$rcon->sendCommand("pex user ".$login." group remove moder");
			$rcon->sendCommand("pex user ".$login." group remove helper");
			$rcon->sendCommand("pex user ".$login." group remove newhelper");*/
			$sql = "UPDATE mod_group_ST SET mod_group=0 WHERE login='$login'";
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
}
