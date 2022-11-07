<?php 
	require_once "cnt.php";

	function getSignature($account, $desc, $sum, $secretKey) {
	 $hash = $account.'{up}'.$desc.'{up}'.$sum.'{up}'.$secretKey;
	 return hash('sha256', $hash);
	}
	
	function emailRequest($to, $subject, $message){
		$headers = 'From: support@mcspace.me' . "\r\n" .
		'Reply-To: support@mcspace.me' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		return mail($to, $subject, $message, $headers);
	}
	function emailRequestSenko($to, $subject, $message){
		$headers = 'From: support@senko.space' . "\r\n" .
		'Reply-To: support@senko.space' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		return mail($to, $subject, $message, $headers);
	}
	function checkParam($param, $error, $color){
		if(isset($_GET["$param"]))
			return "<h3><font color='".$color."'>".$error." </font></h3>";	
	}
	
	function translitEN_RU($str) {
		$lat = array('Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', '{', '}', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', '|:', '|"', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', '|<', '|>', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', '|[', '|]', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', '|;', "|'", 'z', 'x', 'c', 'v', 'b', 'n', 'm', '|,', '|.');
		$rus = array('Й', 'Ц', 'У', 'К', 'Е', 'Н', 'Г', 'Ш', 'Щ', 'З', 'Х', 'Ъ', 'Ф', 'Ы', 'В', 'А', 'П', 'Р', 'О', 'Л', 'Д', 'Ж', 'Э', 'Я', 'Ч', 'С', 'М', 'И', 'Т', 'Ь', 'Б', 'Ю', 'й', 'ц', 'у', 'к', 'е', 'н', 'г', 'ш', 'щ', 'з', 'х', 'ъ', 'ф', 'ы', 'в', 'а', 'п', 'р', 'о', 'л', 'д', 'ж', 'э', 'я', 'ч', 'с', 'м', 'и', 'т', 'ь', 'б', 'ю');
		return str_replace($lat, $rus, $str);
	}
	
	function translitRU_EN($str) {
		$rus = array('Й', 'Ц', 'У', 'К', 'Е', 'Н', 'Г', 'Ш', 'Щ', 'З', 'Х', 'Ъ', 'Ф', 'Ы', 'В', 'А', 'П', 'Р', 'О', 'Л', 'Д', 'Ж', 'Э', 'Я', 'Ч', 'С', 'М', 'И', 'Т', 'Ь', 'Б', 'Ю', 'й', 'ц', 'у', 'к', 'е', 'н', 'г', 'ш', 'щ', 'з', 'х', 'ъ', 'ф', 'ы', 'в', 'а', 'п', 'р', 'о', 'л', 'д', 'ж', 'э', 'я', 'ч', 'с', 'м', 'и', 'т', 'ь', 'б', 'ю');
		$lat = array('Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', '{', '}', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', '|:', '|"', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', '|<', '|>', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', '|[', '|]', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', '|;', "|'", 'z', 'x', 'c', 'v', 'b', 'n', 'm', '|,', '|.');
		return str_replace($rus, $lat, $str);
	}
  
	function safeGet(&$array, $varName, $defaultValue = NULL ) {
		return isset($array[$varName]) ? $array[$varName] : $defaultValue;
	}
	function randomChar(){
		$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$count = strlen($chars);
		$index = rand(0, $count - 1);
		return $chars[$index];
	}
	
	function randomFormId(){
		$chars = '0123456789';
		$count = strlen($chars);
		$index = rand(0, $count - 1);
		return $chars[$index];
	}
	function randomId($count = 32){
		$randomId = '';
		for($i=1; $i<=$count; $i++ ){
			$randomId = randomFormId() . $randomId;
		}
		return $randomId;
	}
	function randomCode($count = 20){
		$randomCode = '';
		for($i=1; $i<=$count; $i++ ){
			$randomCode = randomChar() . $randomCode;
		}
		return $randomCode;
	}
	
	function randomActivation($count = 8){
		$randomCode = '';
		for($i=1; $i<=$count; $i++ ){
			$randomCode = randomChar() . $randomCode;
		}
		return $randomCode;
	}
	function checkEmail($email){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['email'])) ? true : false;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	function getValidCode($email){
		$result = NULL;
		global $pdo; 
		try {
			$sql = "SELECT code FROM `users` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['code'])) ? $arr['code'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	function getValidActivation($email){
		$result = NULL;
		global $pdo; 
		try {
			$sql = "SELECT activation FROM `activation` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['activation'])) ? $arr['activation'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	function getMailSent($email){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT mailsent FROM `users` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['mailsent'])) ? $arr['mailsent'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	
	function getMailSentAct($email){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT mailsent FROM `activation` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['mailsent'])) ? $arr['mailsent'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	function setMailSent($email, $mailSent){
		global $pdo; 
		if($mailSent) $sent	= 1; else $sent = 0;
		try { 
			$sql_c = "UPDATE `users` SET mailsent=".$sent." WHERE email='".$email."'";
			$count = $pdo->exec($sql_c);
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());	
		}
		return getMailSent($email);
	}	
	
	function setMailSentAct($email, $mailSent){
		global $pdo; 
		if($mailSent) $sent	= 1; else $sent = 0;
		try { 
			$sql_c = "UPDATE `activation` SET mailsent=".$sent." WHERE email='".$email."'";
			$count = $pdo->exec($sql_c);
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());	
		}
		return getMailSent($email);
	}	
	function getName($email){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT login FROM `users` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['login'])) ? $arr['login'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	function getLogin($formid){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT login FROM `ajax` WHERE formid='$formid' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['login'])) ? $arr['login'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}	
	function getNameAct($email){
		$result = NULL;
		global $pdo; 
		try { 
			$sql = "SELECT login FROM `activation` WHERE email='$email' LIMIT 1";
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$result = (isset($arr['login'])) ? $arr['login'] : NULL;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	
	function delCodeTimer($email, $timerEmail){
		$result = NULL;
		global $pdo;
		$timer = "Y-m-d H:i:s";	
		$date = date($timer);
		
		$time = time();
		try {
			//$sql = "SELECT timer FROM `users` WHERE email='$email' LIMIT 1";
			$sql = "SELECT UNIX_TIMESTAMP(timer) AS timestamp FROM `users` WHERE email='$email' LIMIT 1";
			
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$timestamp = (isset($arr['timestamp'])) ? $arr['timestamp'] : NULL;
			$timeT = $time - $timestamp; // +
			$timerT = $timerEmail - $timeT;
			$timerTInMinute = round($timerT / 60);
			
			//var_dump($timerT);
			if($timeT > $timerEmail) {
				$sql_t = "UPDATE `users` SET `timer`='0000-00-00 00:00:00', `code`='', `mailsent`='' WHERE email='$email' LIMIT 1";
				$stm_t = $pdo->query($sql_t);
				//$result = "Досвидания";
				$result = true;
			}
			else
				echo "<div class='fs20'>Ваш код истекает через $timerTInMinute минут.</div>";
				$result = false;
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	
	function delGroupTimer_ST($login_g, $timerGroup){
		$result = NULL;
		global $pdo;
		$timer = "Y-m-d H:i:s";	
		$date = date($timer);
		$time = time();
		try {
			$sql = "SELECT UNIX_TIMESTAMP(group_timer) AS timestamp FROM groupsST WHERE login='$login_g' LIMIT 1";
			
			$stm = $pdo->query($sql);
			$arr = $stm->fetch(PDO::FETCH_ASSOC);
			$timestamp = (isset($arr['timestamp'])) ? $arr['timestamp'] : NULL;
			$timeT = $time - $timestamp;
			$timerT = $timerGroup - $timeT;
			//var_dump($timerT);
			if($timeT > $timerGroup) {
				$sql_t = "UPDATE groupsST SET `group_timer_ST`='0000-00-00 00:00:00', set_group=0, groupp_month=1 WHERE login='$login_g' LIMIT 1";
				$stm_t = $pdo->query($sql_t);
				$result = true;
			}
			else
			{
				$result = $timerT;
				//echo $timerT;
			}
		} catch (Exception $e){
			echo '==============';
			var_dump($e->getMessage());
		}
		return $result;
	}
	
	function safeInsertUserAct($login, $email, $pass, $sex, $code_invite){
		$result = NULL;
		global $pdo;
		$timer = "Y-m-d H:i:s";
		$date = date($timer);
		$pass_md5 = md5(md5($pass));
		$activation = randomActivation();
		return $pdo->query("INSERT INTO `activation` (login, email, password, sex, register, activation, mailsent, code_invite) VALUES ('$login', '$email', '$pass_md5', '$sex', '$date', '$activation', 1, '$code_invite')");
	}

?>