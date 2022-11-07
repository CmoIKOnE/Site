<?
require_once "../cnt.php";
require_once "../rcon.php";

$login = 		safeGet($_POST, 'login');
$mod_group_ST = safeGet($_POST, 'mod_group_ST');

switch($mod_group_ST)
{
	case 'Стажёр':
		$mod_group_ST_val = 1;
	break;
	case 'Помощник':
		$mod_group_ST_val = 2;
	break;
	case 'Модератор':
		$mod_group_ST_val = 3;
	break;
	case 'Ст. Модератор':
		$mod_group_ST_val = 4;
	break;
	case 'Гл. Модератор':
		$mod_group_ST_val = 5;
	break;
	case 'Строитель':
		$mod_group_ST_val = 6;
	break;
	case 'Геймдизайнер':
		$mod_group_ST_val = 7;
	break;
	case 'Разработчик':
		$mod_group_ST_val = 8;
	break;
	case 'Куратор':
		$mod_group_ST_val = 9;
	break;
	case 'Тех. Админ':
		$mod_group_ST_val = 10;
	break;
}

switch($mod_group_ST_val)
{
	case 1:
		$mod_group_ST_val_RCON = 'newhelper';
	break;
	case 2:
		$mod_group_ST_val_RCON = 'helper';
	break;
	case 3:
		$mod_group_ST_val_RCON = 'moder';
	break;
	case 4:
		$mod_group_ST_val_RCON = 'stmoder';
	break;
	case 5:
		$mod_group_ST_val_RCON = 'glmoder';
	break;
	case 6:
		$mod_group_ST_val_RCON = 'builder';
	break;
	case 7:
		$mod_group_ST_val_RCON = 'gamediz';
	break;
	case 8:
		$mod_group_ST_val_RCON = 'dev';
	break;
	case 9:
		$mod_group_ST_val_RCON = 'curator';
	break;
	case 10:
		$mod_group_ST_val_RCON = 'tech';
	break;
}
use Thedudeguy\Rcon;

$rcon = new Rcon($host_ST, $port_ST, $password_ST, $timeout_ST);
//if ($rcon->connect())
if (true)
{
	if(isset($login))
		{
		if(!empty($login))
			{
			if(isset($mod_group_ST))
				{
				if(!empty($mod_group_ST))
					{
						$sql = "UPDATE mod_group_ST SET mod_group=".$mod_group_ST_val." WHERE login='$login'";
						$result = $pdo->query($sql);
						
						/*$rcon->sendCommand("pex user ".$login." group remove tech");
						$rcon->sendCommand("pex user ".$login." group remove curator");
						$rcon->sendCommand("pex user ".$login." group remove dev");
						$rcon->sendCommand("pex user ".$login." group remove gamediz");
						$rcon->sendCommand("pex user ".$login." group remove builder");
						$rcon->sendCommand("pex user ".$login." group remove glmoder");
						$rcon->sendCommand("pex user ".$login." group remove stmoder");
						$rcon->sendCommand("pex user ".$login." group remove moder");
						$rcon->sendCommand("pex user ".$login." group remove helper");
						$rcon->sendCommand("pex user ".$login." group remove newhelper");

						$rcon->sendCommand("pex user ".$login." group add ".$mod_group_ST_val_RCON."");*/
						
						header('Location: https://mcspace.me/panel/index.php?act=skytech_team&yes');
						exit();
					}
					else 
					{
						header('Location: https://mcspace.me/panel/index.php?act=skytech_team&no');
						exit();	
					}
				}
				else 
				{
					header('Location: https://mcspace.me/panel/index.php?act=skytech_team&no');
					exit();	
				}
			}
			else 
			{
				header('Location: https://mcspace.me/panel/index.php?act=skytech_team&no');
				exit();	
			}
		}
		else 
		{
			header('Location: https://mcspace.me/panel/index.php?act=skytech_team&no');
			exit();	
		}
}