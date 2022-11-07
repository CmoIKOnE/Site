<?php
require_once "cnt.php";

	$pass = safeGet($_POST, 'pass');
	$pass1 = safeGet($_POST, 'pass1');
	
	
	if(!$_POST['g-recaptcha-response']) {
		header('Location: '.$changepass.'&robot');
		exit();
	}
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$key = "6LelOsUUAAAAABk6RYTutBxrWBTDmNTaprlAmoFQ";
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
	$data = file_get_contents($query);
	//echo $data;
	
	if(empty($pass)) {
		header('Location: '.$changepass.'&emptypass');
		exit();
	}
  
	if(mb_strlen($pass) < 8 || mb_strlen($pass) > 25) {
		header('Location: '.$changepass.'&passerror3');
		exit();
	}
	
	if($pass !== $pass1) {
		header('Location: '.$changepass.'&pass111');
		exit();
	}
	
	if(!preg_match("/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/", $pass)){
		header('Location:'.$changepass.'&passerror4');
		exit();
	}
	
	try { 
	
	$sql = "UPDATE `users` SET `password`='".md5(md5($pass))."' WHERE `login`='".$_SESSION['user']."' LIMIT 1";
	$query_e = $pdo->query($sql);
	
	} catch (Exception $e){
		echo '==============';
		var_dump($e->getMessage());
		
	}
	
	if ($query_e)
		header('Location: '.$changedpass.'&yespass=true');
	else
		header('Location: '.$changedpass.'&yespass=false');
?>