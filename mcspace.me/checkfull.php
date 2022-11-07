<?php 
require_once "cnt.php";
//require_once "backupSQL.php";

$email 		= 	safeGet($_POST, 'email');
$code		=	safeGet($_POST, 'code');

	$url = "https://www.google.com/recaptcha/api/siteverify";
	$key = "6LelOsUUAAAAABk6RYTutBxrWBTDmNTaprlAmoFQ";
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
	$data = file_get_contents($query);

	if(!$_POST['g-recaptcha-response']) {
		header('Location: '.$accAct.'&robot');
		exit();
	}
	else if(empty($code)) {
		header('Location: '.$accAct.'&codeerror');
		exit();
	}
	
	$sqlCode = "UPDATE `activation` SET `mailsent`=0, `activation`='' WHERE `activation`='".$code."' LIMIT 1";
	$updateCode = $pdo->exec($sqlCode);
	$resultCode = ($updateCode != false) ? true : false;

	if ($resultCode !== false){
		
		$data1 = $pdo->prepare('SELECT * FROM activation WHERE email= :email');
		$data1->execute(array('email' => $email));
		while($row1 = $data1->fetch(PDO::FETCH_ASSOC)) {
			$id = 			$row1['id'];
			$loginact = 	$row1['login'];
			$passact = 		$row1['password'];
			$emailact = 	$row1['email'];
			$sexact = 		$row1['sex'];
			$registeract = 	$row1['register'];
			$inviteact = 	$row1['code_invite'];
		}
				$sql = "INSERT INTO `users` (login, email, password, sex, register, uuid) 
				VALUES('$loginact', '$emailact', '$passact', '$sexact', '$registeract', UUID())";
				$deleteAcc = "DELETE FROM `activation` WHERE id=".$id;
				$qDel = $pdo->exec($deleteAcc);
				$result = $pdo->query($sql);

				$null_array = array();
				if($inviteact == "") $inviteact = 'null';
				$result = $pdo->query("SELECT * FROM users WHERE code_invite='".$inviteact."'");
				$rows = $result->fetchAll();
				if($rows !== $null_array) {
					//if($rows !== $null_array) $pdo->query("UPDATE users SET rub=rub+15 WHERE login='".$loginact."' LIMIT 1");
					if($rows !== $null_array) $pdo->query("UPDATE users SET isInvite=1, allInvite=allInvite+1 WHERE code_invite='".$inviteact."' LIMIT 1");
				}
				header('Location: '.$index.'&yes');
				exit();
	}
	else header('Location: '.$accAct.'&codeerror1&email='.$email);
  
?>
