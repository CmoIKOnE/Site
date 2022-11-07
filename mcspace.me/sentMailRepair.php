<?
require_once "cnt.php";
require_once "SendMailSmtpClass.php";
$email 		= 	safeGet($_GET, 'email');

$codeAcc = getValidCode($email);
$player = getName($email);

if(isset($email)){

	$mailSMTP = new SendMailSmtpClass($userMail, $passMail, $hostMail, 'mcspace.me', 465);
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: MCSpace.me <support@mcspace.me>\r\n";

	$body = "Это Ваш игровой ник: ".$player."? Нажмите на ссылку, что бы сбросить пароль: https://mcspace.me".$setnewpass_form."&code=".$codeAcc.""; 
	/*		                
	$body .= "Если вы считаете, что данное сообщение отправлено вам ошибочно, <br>"; 
	$body .= "просто проигнорируйте его. <br><br>"; 
			                
	$body .= "Мы отправили это письмо, потому что вы или кто-то другой указал этот адрес на https://mcspace.me/ <br><br>"; 
			                
	$body .= "Нажмите на ссылку, что бы сбросить пароль: <br>"; 
	$body .= "https://mcspace.me".$setnewpass_form."&code=".$codeAcc."";*/

	$result = $mailSMTP->send($email, 'MCSpace.me | Восстановление пароля', $body, $headers);

	header('Location: '.$sendpass_setlink.'&email='.$email);

}