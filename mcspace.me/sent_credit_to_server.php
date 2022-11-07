<?php
require_once "cnt.php";
require_once "rcon.php";

$server = $_POST['server'];
$amount = $_POST['amount'];
$btn 	= $_POST['CRBtn'];

if($server == "SkyTech 1.7.10")
{
	$host = $host_ST;
	$port = $port_ST;
	$password = $password_ST;
	$timeout = $timeout_ST;
}
else
{
	header('Location: '.$credits.'&servererror');
	exit();
}

use Thedudeguy\Rcon;

$rcon = new Rcon($host, $port, $password, $timeout);
error_reporting(E_ALL);
//var_dump($rcon->lastResponse);
if(isset($btn))
{
	if($rcon->connect())
	{echo "+";
		if(isset($credit))
		{echo "+";

			$amount = round($amount);
			if($credit > 0 || $credit < 0)
			{echo "+";
					
				$sql = "SELECT credit FROM `users` WHERE login='".$_SESSION['user']."' LIMIT 1";
				$stm = $pdo->query($sql);
				$result = $stm->fetch(PDO::FETCH_ASSOC);
			
				
				
					if($result['credit'] >= 0) $minus_credit = $result['credit'] - $amount;
					else 
					{
						header('Location: '.$credits.'&notRub');
						exit();	
					}
					
						if($minus_credit <= 0)
						{
							header('Location: '.$credits.'&notRub');
							exit();	
						}
						
							$sql_g = "UPDATE `users` SET credit=".$minus_credit." WHERE login='".$_SESSION['user']."' LIMIT 1";
							$count = $pdo->exec($sql_g);
							$result1 = ($count == 1) ? true : false;
							echo "+";
								if($result1 === true)
								{echo "+";
									$rcon->sendCommand("money give ".$_SESSION['user']." ".$amount."");
									header('Location: '.$credits.'&trsuccess');
									exit();
								}
			}
			else 
			{
				header('Location: '.$credits.'&trno');
				exit();	
			}
		}
		else 
		{
			header('Location: '.$credits.'&trno');
			exit();
		}
	}
}
else 
{
	header('Location: '.$credits.'&trno');
	exit();
}


?>