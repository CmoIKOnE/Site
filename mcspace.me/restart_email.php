<? 	
require_once "cnt.php";
$email = safeGet($_POST, 'email');
$restart = safeGet($_POST, 'restart');
if(isset($restart))
{
	$stm = $pdo->query("SELECT UNIX_TIMESTAMP(register) AS timestamp FROM activation WHERE email='$email' LIMIT 1");
	$arr = $stm->fetch(PDO::FETCH_ASSOC);
	$timestamp = (isset($arr['timestamp'])) ? $arr['timestamp'] : NULL;
		$time = time();
		$timeIs = $timestamp + 300;
		if($time > $timeIs)
		{
			$timer = "Y-m-d H:i:s";
			$date = date($timer);
			$sqlMail = "UPDATE `activation` SET mailsent=1, register='$date' WHERE email='$email' LIMIT 1";
			$resultMail = $pdo->query($sqlMail);

			if($resultMail == true) header('Location: mailSent.php?email='.$email);

		} else header('Location: '.$accAct.'&5min&email='.$email);
} else header('Location: '.$accAct.'&no');

?>