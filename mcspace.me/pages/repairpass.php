<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Восстановление пароля</div>
	</div>
	<div class="page-content">
		<? if(empty($tele_id)) { ?>
		<form class="pass-form" action='<?=$php?>checkemail.php' method='post'>
			<center>
			<p class="reg-info">E-mail</p>
			<div class="mcs-login login">
				<input type="password" name="email" id="email" class="input" required placeholder="sample@mail.ru">
			</div>
				<div class="g-recaptcha captcha" data-sitekey="6LelOsUUAAAAAHVrLEJbzfshCLjH8Va0zc42cfmF"></div>
			</center>
			<button class="reg-button" name="submit" type="submit">Отправить</button>
		</form>
		<? } else { ?>
			<p class="text-log">Telegram-bot - /changepass</p>
		<?	} ?>
	</div>
</div>    