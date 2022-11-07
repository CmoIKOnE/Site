<?php
require_once "cnt.php";
$btn = $_POST['CRBtn'];
$amount = $_POST['amount'];

if(isset($btn))
{
	if(isset($amount))
	{

		$amount = round($amount);
		if($amount > 0 || $amount < 0)
		{
				
			$sql = "SELECT credit, rub FROM `users` WHERE login='".$_SESSION['user']."' LIMIT 1";
			$stm = $pdo->query($sql);
			$result = $stm->fetch(PDO::FETCH_ASSOC);
			
			$creditInAmount = 25 * $amount;
			$translateRubCredit = $amount;
			
				if($result['rub'] >= 0) $minus_rub = $result['rub'] - $translateRubCredit;
				else 
				{
					header('Location: '.$credits.'&notRub');
					exit();	
				}
				if($minus_rub <= 0)
				{
					header('Location: '.$credits.'&notRub');
					exit();	
				}
				
				if($result['credit'] >= 0)	$plus_credit = $result['credit'] + $creditInAmount;
				else 
				{
					header('Location: '.$credits.'&trno');
					exit();	
				}
					
					$sql_g = "UPDATE `users` SET credit=".$plus_credit.", rub=".$minus_rub." WHERE login='".$_SESSION['user']."' LIMIT 1";
					$count = $pdo->exec($sql_g);
					$result1 = ($count == 1) ? true : false;
						
					if($result1 === true)
					{
						header('Location: '.$credits.'&trsuccess');
						exit();
					}
		}
		else 
		{
			header('Location: '.$credits.'&no');
			exit();	
		}
	}
	else 
	{
		header('Location: '.$credits.'&no');
		exit();
	}
}
else 
{
	header('Location: '.$credits.'&no');
	exit();
}




?>