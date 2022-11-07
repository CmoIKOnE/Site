<?php 
require_once "cnt.php";

$request = &$_POST;

$login 		= 	safeGet($request, 'login');
$email 		= 	safeGet($request, 'email');
$pass 		= 	safeGet($request, 'pass');
$pass1 		= 	safeGet($request, 'pass1');
$sex		= 	safeGet($request, 'sex');
$func		= 	safeGet($request, 'func');
$func1		= 	safeGet($request, 'func1');

if($func == 'isLoginFree')
{
	$error = false;
	$errorMsg = "";
	$isLoginFree = false;
	$sql = "SELECT * FROM `users` WHERE login='$login' LIMIT 1";
	//$sqlA = "SELECT * FROM `activation` WHERE login='$login' LIMIT 1";
	try {
		$stm = $pdo->query($sql);
		$count = $stm->rowCount();
		//$stmA = $pdo->query($sqlA);
		//$countA = $stmA->rowCount();
		$isLoginFree = !( $count == 1 );
		
	} catch (Exception $e){
		$error = true;
		$errorMsg = $e->getMessage();
		
	}
	if ($error)
	{
		echo json_encode(array('result' => 'error', 'msg'=> $errorMsg)); // error
				
	}
	else // ошибка не возникла
	{
	
	if($isLoginFree)
		echo json_encode(array('result' => 'free', 'msg'=> "Ник свободен")); // ник свободен
	else
		echo json_encode(array('result' => 'exist', 'msg'=> "Ник уже занят")); // ник занят
	
	}
	
	
}

if($func1 == 'isEmailFree')
{
	$error = false;
	$errorMsg = "";
	$isEmailFree = false;
	$sql = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
	//$sqlAe = "SELECT * FROM `activation` WHERE email='$email' LIMIT 1";
	try {
		$stm = $pdo->query($sql);
		$count = $stm->rowCount();
		//$stmAe = $pdo->query($sqlAe);
		//$countAe = $stmAe->rowCount();
		$isEmailFree = !( $count == 1 );
		
	} catch (Exception $e){
		$error = true;
		$errorMsg = $e->getMessage();
		
	}
	if ($error)
	{
		echo json_encode(array('result' => 'error', 'msg'=> $errorMsg)); // error
				
	}
	else // ошибка не возникла
	{
	
	if($isEmailFree)
		echo json_encode(array('result' => 'free', 'msg'=> "E-mail свободен")); // E-mail свободен
	else
		echo json_encode(array('result' => 'exist', 'msg'=> "E-mail уже занят")); // E-mail занят
	
	}
	
	
}

?>
