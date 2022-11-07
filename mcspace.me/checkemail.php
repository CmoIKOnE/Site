<?php
require_once "cnt.php";
require_once "PHPMailerAutoload.php";
require_once "SendMailSmtpClass.php";


	$email = safeGet($_POST, 'email');
	$player = getName($email);
	$aMS = getMailSent($email);
	if($aMS == "1") $alreadyMailSent = true; else $alreadyMailSent = false;

	if(!$_POST['g-recaptcha-response']) {
		header('Location: '.$repairpass.'&robot');
		exit();
	}
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$key = "6LelOsUUAAAAABk6RYTutBxrWBTDmNTaprlAmoFQ";
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
	$data = file_get_contents($query);
		
	$timer = "Y-m-d H:i:s";	
	$date = date($timer);
	
		$sqlE = "SELECT id FROM `users` WHERE email='$email' LIMIT 1";
		$stm = $pdo->query($sqlE);
		$arr = $stm->fetch(PDO::FETCH_ASSOC);
	
		if($arr === false){ header('Location: '.$repairpass.'&emailfakerepair'); exit(); }
		
				if($alreadyMailSent === false)
				{
					$sql_c = "UPDATE `users` SET code='".randomCode()."', timer='".$date."', mailsent=1 WHERE email='".$email."' LIMIT 1";
					$query = $pdo->exec($sql_c);
										
					if($query == 1)
					{
			            header('Location: sentMailRepair.php?email='.$email);
			        	exit();
					}

				} else header('Location: '.$sendpass_setlink);