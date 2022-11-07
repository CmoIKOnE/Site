<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="box">
		<h1 class="text_box">Восстановление пароля<h1>
		<div>
		<center>
	        <? require_once "cnt.php";
			require_once '/var/www/mcspace.me/data/www/mcspace.me/PHPMailerAutoload.php';
			$timerEmail = 600;
			$email = safeGet($_GET, 'email');
			$aMS = getMailSent($email);
			if($aMS == "1") $alreadyMailSent = true; else $alreadyMailSent = false;
			
			$isExpired = delCodeTimer($email, $timerEmail);
			
			if (!is_null($email)) 
			{
				if ($alreadyMailSent)
					echo "<div class='fs20'>Ваша ссылка на восстановление пароля отправлена по почте.</div>";
				else echo "<div class='fs20'>Почту отправить не удалось. Перезайдите позже.</div>";
					if ($isExpired) echo "<div class='fs20'>Ваш код истек.</div>";
				echo $isExpired;
			} else echo "<div class='fs20'>Неверный E-mail</div>";
	        ?> 
		</center>		
	    </div>
	</div>
</div>
 