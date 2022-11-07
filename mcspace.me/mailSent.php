<?
require_once "cnt.php";
require_once "SendMailSmtpClass.php";
$email 		= 	safeGet($_GET, 'email');

$activationAcc = getValidActivation($email);
$player = getNameAct($email);

if(isset($email)){

	$sqlMail = "UPDATE `activation` SET mailsent=0 WHERE email='$email' LIMIT 1";
	$resultMail = $pdo->query($sqlMail);

	if($resultMail == true)
	{

		$mailSMTP = new SendMailSmtpClass($userMail, $passMail, $hostMail, 'mcspace.me', 465);
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: MCSpace.me <support@mcspace.me>\r\n";

		$body = "Здравствуйте, ".$player."! Ваш код, что бы подтвердить почту: ".$activationAcc; 
		/*		             
		$body .= "Если вы считаете, что данное сообщение отправлено вам ошибочно, <br>"; 
		$body .= "просто проигнорируйте его. <br><br>"; 
				                
		$body .= "Мы отправили это письмо, потому что вы или кто-то другой указал этот адрес на https://mcspace.me/ <br><br>"; 
					                
		$body .= "Ваш код, что бы подтвердить почту: <br>"; 
		$body .= $activationAcc;*/

		$result = $mailSMTP->send($email, "MCSpace.me | Подтверждение", $body, $headers);

		header('Location: '.$accAct.'&yesEmail&email='.$email);
	}

}