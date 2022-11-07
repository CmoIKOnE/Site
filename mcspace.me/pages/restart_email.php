<? 	
require_once "cnt.php";
$email = safeGet($_POST, 'email');
$restart = safeGet($_POST, 'restart');

var_dump($_POST);
/*
if(isset($restart)){

	$sqlMail = "UPDATE `activation` SET mailsent=1 WHERE email='$email' LIMIT 1";
	$resultMail = $pdo->query($sqlMail);

	if($resultMail == true) header('Location: '.$accAct.'&yesEmail&email='.$email);

}

?>