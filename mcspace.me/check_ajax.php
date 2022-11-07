<?php 
require_once "cnt.php";
$request = &$_POST;

$login4ajax	= 	safeGet($request, 'login');
$email 		= 	safeGet($request, 'email');
$pass 		= 	safeGet($request, 'pass');
$pass1 		= 	safeGet($request, 'pass1');
$sex		= 	safeGet($request, 'sex');
$func		= 	safeGet($request, 'func');

if(!empty($login4ajax)){
	
	$sql_c = "SELECT login FROM `ajax` WHERE formid='".$formid."'";
	$stm = $pdo->query($sql_c);
	$arr = $stm->fetch(PDO::FETCH_ASSOC);
	$result = (isset($arr['login'])) ? true : false;
	
	if($result === true)
	{
		$sql = "UPDATE ajax SET login='$login4ajax', email='$email', pass='$pass', pass1='$pass1', sex='$sex', formid='$formid'";
		$result = $pdo->exec($sql);
		
	}
	else 
	{
		$sql = "INSERT INTO ajax (login, email, pass, pass1, sex, formid) VALUES ('$login4ajax', '$email', '$pass', '$pass1', '$sex', '$formid')";
		$result = $pdo->exec($sql);
	}	
}
else {
	//echo "пустой login";
	echo json_encode(array('result' => 'fail'));
}







?>