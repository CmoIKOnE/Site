<?php
require_once "cnt.php";

	$pass = safeGet($_POST, 'pass');
	$pass1 = safeGet($_POST, 'pass1');
	$code = safeGet($_POST, 'code');
	
	if(!$_POST['g-recaptcha-response']) {
		header('Location: '.$setnewpass_form.'&robot');
		exit();
	}
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$key = "6LelOsUUAAAAABk6RYTutBxrWBTDmNTaprlAmoFQ";
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
	$data = file_get_contents($query);
	
	if(empty($pass)) {
		header('Location: '.$setnewpass_form.'&emptypass');
		exit();
	}
  
	if(mb_strlen($pass) < 8 || mb_strlen($pass) > 25) {
		header('Location: '.$setnewpass_form.'&passerror3');
		exit();
	}
	
	if($pass !== $pass1) {
		header('Location: '.$setnewpass_form.'&pass111');
		exit();
	}
	
	if(!preg_match("/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/", $pass)){
		header('Location:'.$setnewpass_form.'&passerror3');
		exit();
	}
	
	try { 
	
	$sql = "UPDATE `users` SET `password`='".md5(md5($pass))."', `mailsent`=0, `code`='', `timer`='' WHERE `code`='".$code."' LIMIT 1";
	$updatePass = $pdo->exec($sql);
	$result = ($updatePass != false) ? true : false;

	
	} catch (Exception $e)
	{
		echo '==============';
		var_dump($e->getMessage());
		
	}
	
	if ($result !== false)
		header('Location: '.$changedpass.'&yespass=true');
	else
		header('Location: '.$changedpass.'&yespass=false');
?>