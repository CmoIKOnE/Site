<?php
require_once "cnt.php";

$_PARAMS = &$_POST;
$login = safeGet($_PARAMS, 'login');
$pass = safeGet($_PARAMS, 'pass');
if(empty($pass) and empty($login)){
	header("Location:" . $index.'&loginpasserror');
}
elseif(empty($login)){
	header("Location:" . $index.'&loginerror');
}
elseif(empty($pass)){
	header("Location:" . $index.'&passerror');
}
elseif(!empty($login) and !empty($pass)){
  $pass = md5(md5($pass));
  try { 
	$sql = "SELECT * FROM `users` WHERE login='$login' AND password='$pass' LIMIT 1";
	$result = $pdo->query($sql);
	$user = $result->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e){
		echo '==============';
		var_dump($e->getMessage());
	}
	if($user === false){
		$_SESSION['login'] = false;
		session_write_close();
		header("Location:" . $index.'&usererror');
	}else{
		$_SESSION['login'] = true;
		$_SESSION['user'] = $login;
		session_write_close();
		header("Location:" . $index);
	}
}
?>