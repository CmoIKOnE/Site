<?php
require_once "cnt.php";
require_once "PHPMailerAutoload.php";

	$request = &$_POST;
	if(isset($_GET['email'])) $email =	safeGet($_GET, 'email'); else $email =	safeGet($request, 'email');
	$login 			= 	safeGet($request, 'login');
	$pass 			= 	safeGet($request, 'pass');
	$pass1 			= 	safeGet($request, 'pass1');
	$sex			= 	safeGet($request, 'sex');
	$code_invite	= 	safeGet($request, 'ref');
	
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$key = "6LelOsUUAAAAABk6RYTutBxrWBTDmNTaprlAmoFQ";
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
	$data = file_get_contents($query);

	if(!$_POST['g-recaptcha-response']) {
		header('Location: '.$reg.'&robot');
		exit();
	}
	if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
		header('Location: '.$reg.'&email');
		exit();
	}

	if($pass !== $pass1) {
		header('Location: '.$reg.'&pass');
		exit();
	}

	if(!preg_match("/^[a-zA-Z0-9_]+$/", $login)) {
		header('Location: '.$reg.'&login');
		exit();
	}

	if(!preg_match("/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/", $pass)) {
		header('Location: '.$reg.'&passErr');
		exit();
	}

	if(mb_strlen($login) >= 4 && mb_strlen($login) <= 16) {

	} else {
		header('Location: '.$reg.'&loginLeg');
		exit();
	}

	if(mb_strlen($pass) >= 6 && mb_strlen($pass) <= 48) {
		
	} else {
		header('Location: '.$reg.'&passLeg');
		exit();
	}

	$sqlLogin = "SELECT * FROM users WHERE login='$login' LIMIT 1";
	$sqlEmail = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$resultL = $pdo->query($sqlLogin);
	$resultE = $pdo->query($sqlEmail);
	$fetchL = $resultL->fetchAll();
	$fetchE = $resultE->fetchAll();
	$NULL = array();

	if($fetchL !== $NULL){
		header('Location: '.$reg.'&LoginUsed');
		exit();
	}

	if($fetchE !== $NULL){
		header('Location: '.$reg.'&EmailUsed');
		exit();
	}
	
	/*if($sex == 'male')
	{}
	elseif ($sex == 'female')
	{}
	else
	{
		header('Location: '.$reg.'&gghack');
		exit();
	}*/

	safeInsertUserAct($login, $email, $pass, 'male', $code_invite);

		$aMS = getMailSentAct($email);
		if($aMS == "1") $alreadyMailSent = true; else $alreadyMailSent = false;

		if ($alreadyMailSent === true) {
			
				$sqlMail = "UPDATE `activation` SET mailsent=0 WHERE email='$email' LIMIT 1";
				$resultMail = $pdo->query($sqlMail);

				if($resultMail == true)
				{

			        header('Location: mailSent.php?email='.$email);
			        exit();

				}
		} else header('Location: '.$accAct);

