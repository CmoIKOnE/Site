<?
require_once "cnt.php";
require_once "rcon.php";
 
use Thedudeguy\Rcon;

$rcon = new Rcon($host_ST, $port_ST, $password_ST, $timeout_ST);

$table_DB = 'groupsST';
$table_DB_users = 'users';
$polya1 = 'groupp';
$polya2 = 'groupp_month';
$polya3 = 'set_group';
$polya4 = 'group_timer';

$decide_timer = $timer_group_db_MMORPG;
$decide_group = $group_MMORPG;
$link = $shopST;
//if ($rcon->connect())
if($_SESSION['login'] == true)
{
	if(true)
	{
		if (isset($_POST['red30MMORPG']))
		{
			if($rub >= $red30)
			{
				if($timer_group_db_MMORPG == 0)
				{
					if($decide_group >= 2)
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else
					{
						$timer_g = "Y-m-d H:i:s";	
						$date_g = date($timer_g);
				
						$sql_g = "UPDATE ".$table_DB." SET ".$polya4."='".$date_g."', ".$polya3."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$count = $pdo->exec($sql_g);
						$result = ($count == 1) ? true : false;
					
						if($result === true)
						{
							$rubBuy = $rub - $red30;
							$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy.", ".$polya2."=2 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$sql1 = "UPDATE ".$table_DB." SET ".$polya2."=2 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$result = $pdo->query($sql);
							$result1 = $pdo->query($sql1);
							//$rcon->sendCommand("pex user ".$_SESSION['user']." group add red * 30day");
							header('Location: '.$link.'&success');
							exit();
						}
					}
				}
				else 
				{
					header('Location: '.$link.'&notime');
					exit();	
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['redFMMORPG']))
		{
			if($rub >= $redF)
			{	
				if($decide_group >= 2)
				{
					header('Location: '.$link.'&have');
					exit();
				}
					
				else if ($decide_group == 1)
				{
					$rubBuy = $rub - $redF;
				}
					$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy." WHERE login='".$_SESSION['user']."' LIMIT 1";
					$sql1 = "UPDATE ".$table_DB." SET ".$polya1."=2, ".$polya3."=0, ".$polya2."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
					$result = $pdo->query($sql);
					$result1 = $pdo->query($sql1);
					//$rcon->sendCommand("pex user ".$_SESSION['user']." group add red");
					header('Location: '.$link.'&success');
					exit();
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['lapis30MMORPG']))
		{
			if($rub >= $lapis30)
			{
				if($timer_group_db_MMORPG == 0)
				{
					if($decide_group >= 3)
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else
					{
						$timer_g = "Y-m-d H:i:s";	
						$date_g = date($timer_g);
				
						$sql_g = "UPDATE ".$table_DB." SET ".$polya4."='".$date_g."', ".$polya3."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$count = $pdo->exec($sql_g);
						$result = ($count == 1) ? true : false;
					
						if($result === true)
						{			
							$rubBuy = $rub - $lapis30;
							$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy.", ".$polya2."=3 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$sql1 = "UPDATE ".$table_DB." SET ".$polya2."=3 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$result = $pdo->query($sql);
							$result1 = $pdo->query($sql1);
							//$rcon->sendCommand("pex user ".$_SESSION['user']." group add lapis * 30day");
							header('Location: '.$link.'&success');
							exit();
						}
					}
				}
				else 
				{
					header('Location: '.$link.'&notime');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['lapisFMMORPG']))
		{
			if($rub >= $lapisRed) // min
			{
				if($rub >= $lapisF) // max
				{	
					if($decide_group >= 3) // have
					{
						header('Location: '.$link.'&have');
						exit();
					}	
					else if($decide_group == 2) 
					{
						$rubBuy = $rub - $lapisRed;
					}
					else if($decide_group == 1)
					{
						$rubBuy = $rub - $lapisF;	
					}
						$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy." WHERE login='".$_SESSION['user']."' LIMIT 1";
						$sql1 = "UPDATE ".$table_DB." SET ".$polya1."=3, ".$polya3."=0, ".$polya2."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$result = $pdo->query($sql);
						$result1 = $pdo->query($sql1);
						//$rcon->sendCommand("pex user ".$_SESSION['user']." group add lapis");
						header('Location: '.$link.'&success');
						exit();
				}
				else 
				{
					header('Location: '.$link.'&notRub');
					exit();
				}
			} 
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
				
			}

		}
		else if (isset($_POST['gold30MMORPG']))
		{
			if($rub >= $gold30)
			{
				if($timer_group_db_MMORPG == 0)
				{
					if($decide_group >= 4)
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else
					{
						$timer_g = "Y-m-d H:i:s";	
						$date_g = date($timer_g);
				
						$sql_g = "UPDATE ".$table_DB." SET ".$polya4."='".$date_g."', ".$polya3."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$count = $pdo->exec($sql_g);
						$result = ($count == 1) ? true : false;
					
						if($result === true)
						{	
							$rubBuy = $rub - $gold30;
							$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy.", ".$polya2."=4 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$sql1 = "UPDATE ".$table_DB." SET ".$polya2."=4 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$result = $pdo->query($sql);
							$result1 = $pdo->query($sql1);
							//$rcon->sendCommand("pex user ".$_SESSION['user']." group add gold * 30day");
							header('Location: '.$link.'&success');
							exit();
						}
					}
				}
				else 
				{
					header('Location: '.$link.'&notime');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['goldFMMORPG']))
		{
				
			if($rub >= $goldRed) // min
			{
				if($rub >= $goldF) // max
				{	
					if($decide_group >= 4) // have
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else if($decide_group == 3) 
					{
						$rubBuy = $rub - $goldLapis;
					}	
					else if($decide_group == 2) 
					{
						$rubBuy = $rub - $goldRed;
					}
					else if($decide_group == 1)
					{
						$rubBuy = $rub - $goldF;	
					}
						$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy." WHERE login='".$_SESSION['user']."' LIMIT 1";
						$sql1 = "UPDATE ".$table_DB." SET ".$polya1."=4, ".$polya3."=0, ".$polya2."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$result = $pdo->query($sql);
						$result1 = $pdo->query($sql1);
						//$rcon->sendCommand("pex user ".$_SESSION['user']." group add gold");
						header('Location: '.$link.'&success');
						exit();
				}
				else 
				{
					header('Location: '.$link.'&notRub');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['diamond30MMORPG']))
		{
			if($rub >= $diamond30)
			{	
				if($timer_group_db_MMORPG == 0)
				{
					if($decide_group >= 5)
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else
					{
						$timer_g = "Y-m-d H:i:s";	
						$date_g = date($timer_g);
				
						$sql_g = "UPDATE ".$table_DB." SET ".$polya4."='".$date_g."', ".$polya3."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$count = $pdo->exec($sql_g);
						$result = ($count == 1) ? true : false;
					
						if($result === true)
						{	
							$rubBuy = $rub - $diamond30;
							$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy.", ".$polya2."=5 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$sql1 = "UPDATE ".$table_DB." SET ".$polya2."=5 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$result = $pdo->query($sql);
							$result1 = $pdo->query($sql1);
							//$rcon->sendCommand("pex user ".$_SESSION['user']." group add diamond * 30day");
							header('Location: '.$link.'&success');
							exit();
						}
					}
				}
				else 
				{
					header('Location: '.$link.'&notime');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		elseif(isset($_POST['diamondFMMORPG']))
		{
			if($rub >= $diamondRed) // min
			{
				if($rub >= $diamondF) // max
				{	
					if($decide_group >= 5) // have
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else if($decide_group == 4) 
					{
						$rubBuy = $rub - $diamondGold;
					}	
					else if($decide_group == 3) 
					{
						$rubBuy = $rub - $diamondLapis;
					}	
					else if($decide_group == 2) 
					{
						$rubBuy = $rub - $diamondRed;
					}
					else if($decide_group == 1)
					{
						$rubBuy = $rub - $diamondF;	
					}
						$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy." WHERE login='".$_SESSION['user']."' LIMIT 1";
						$sql1 = "UPDATE ".$table_DB." SET ".$polya1."=5, ".$polya3."=0, ".$polya2."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$result = $pdo->query($sql);
						$result1 = $pdo->query($sql1);
						//$rcon->sendCommand("pex user ".$_SESSION['user']." group add diamond");
						header('Location: '.$link.'&success');
						exit();
				}
				else 
				{
					header('Location: '.$link.'&notRub');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['emerald30MMORPG']))
		{
			if($rub >= $emerald30)
			{	
				if($timer_group_db_MMORPG == 0)
				{
					if($decide_group >= 6)
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else
					{
						$timer_g = "Y-m-d H:i:s";	
						$date_g = date($timer_g);
				
						$sql_g = "UPDATE ".$table_DB." SET ".$polya4."='".$date_g."', ".$polya3."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$count = $pdo->exec($sql_g);
						$result = ($count == 1) ? true : false;
					
						if($result === true)
						{	
							$rubBuy = $rub - $emerald30;
							$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy.", ".$polya2."=6 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$sql1 = "UPDATE ".$table_DB." SET ".$polya2."=6 WHERE login='".$_SESSION['user']."' LIMIT 1";
							$result = $pdo->query($sql);
							$result1 = $pdo->query($sql1);
							//$rcon->sendCommand("pex user ".$_SESSION['user']." group add emerald * 30day");
							header('Location: '.$link.'&success');
							exit();
						}
					}
				}
				else 
				{
					header('Location: '.$link.'&notime');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		else if (isset($_POST['emeraldFMMORPG']))
		{
			if($rub >= $emeraldRed) // min
			{
				if($rub >= $emeraldF) // max
				{	
					if($decide_group >= 6) // have
					{
						header('Location: '.$link.'&have');
						exit();
					}
					else if($decide_group == 5) 
					{
						$rubBuy = $rub - $emeraldDiamond;
					}
					else if($decide_group == 4) 
					{
						$rubBuy = $rub - $emeraldGold;
					}	
					else if($decide_group == 3) 
					{
						$rubBuy = $rub - $emeraldLapis;
					}	
					else if($decide_group == 2) 
					{
						$rubBuy = $rub - $emeraldRed;
					}
					else if($decide_group == 1)
					{
						$rubBuy = $rub - $emeraldF;	
					}
						$sql = "UPDATE ".$table_DB_users." SET rub=".$rubBuy." WHERE login='".$_SESSION['user']."' LIMIT 1";
						$sql1 = "UPDATE ".$table_DB." SET ".$polya1."=6, ".$polya3."=0, ".$polya2."=1 WHERE login='".$_SESSION['user']."' LIMIT 1";
						$result = $pdo->query($sql);
						$result1 = $pdo->query($sql1);
						//$rcon->sendCommand("pex user ".$_SESSION['user']." group add emerald");
						header('Location: '.$link.'&success');
						exit();
				}
				else 
				{
					header('Location: '.$link.'&notRub');
					exit();
				}
			}
			else 
			{
				header('Location: '.$link.'&notRub');
				exit();
			}
		}
		}
	else 
	{
		header('Location: '.$link);
		exit();
	}
} else {
	header('Location: '.$link.'&no');
	exit();
}
?>