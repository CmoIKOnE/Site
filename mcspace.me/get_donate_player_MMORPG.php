<?
require_once "cnt.php";
require_once "rcon.php";

use Thedudeguy\Rcon;
$rcon = new Rcon($host_MMORPG, $port_MMORPG, $password_MMORPG, $timeout_MMORPG);

$table_DB = 'groupsMMORPG';
$table_DB_users = 'users';
$polya1 = 'groupp';
$polya2 = 'groupp_month';
$polya3 = 'set_group';
$polya4 = 'group_timer';

$decide_timer = $timer_group_db_MMORPG;
$decide_group = $group_MMORPG;
$link = $donate;

$redF = $redFMMORPG;
$lapisF = $lapisFMMORPG;
$goldF = $goldFMMORPG;
$diamondF = $diamondFMMORPG;
$emeraldF = $emeraldFMMORPG;

	// for red
	$lapisRed = $lapisF - $redF;
	$goldRed = $goldF - $redF;
	$diamondRed = $diamondF - $redF;
	$emeraldRed = $emeraldF - $redF;
	// for lapis
	$goldLapis = $goldF - $lapisF;
	$diamondLapis = $diamondF - $lapisF;
	$emeraldLapis = $emeraldF - $lapisF;
	// for gold
	$diamondGold = $diamondF - $goldF;
	$emeraldGold = $emeraldF - $goldF;
	// for diamond
	$emeraldDiamond = $emeraldF - $diamondF;

	if($discount > 0){

		// for red
		$lapisRed = $lapisRed * $discount; 
		$goldRed = $goldRed * $discount;
		$diamondRed = $diamondRed * $discount;
		$emeraldRed = $emeraldRed * $discount;
		// for lapis
		$goldLapis = $goldLapis * $discount;
		$diamondLapis = $diamondLapis * $discount;
		$emeraldLapis = $emeraldLapis * $discount;
		// for gold
		$diamondGold = $diamondGold * $discount;
		$emeraldGold = $emeraldGold * $discount;
		// for diamond
		$emeraldDiamond = $emeraldDiamond * $discount;

	}

if($_SESSION['login'] == true){
	if($rcon->connect())
	{
		if (isset($_POST['redFMMORPG']))
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
					$rcon->sendCommand("give-group ".$_SESSION['user']." red");
					header('Location: '.$link.'&success');
					exit();
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
						$rcon->sendCommand("give-group ".$_SESSION['user']." lapis");
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
						$rcon->sendCommand("give-group ".$_SESSION['user']." gold");
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
						$rcon->sendCommand("give-group ".$_SESSION['user']." diamond");
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
						$rcon->sendCommand("give-group ".$_SESSION['user']." emerald");
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
		else 
		{
			header('Location: '.$link.'&no');
			exit();
		}
	}
	else {
		header('Location: '.$link.'&no');
		exit();
	}
} else {
	header('Location: '.$link);
	exit();
}
?>