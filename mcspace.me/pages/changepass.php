<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Смена пароля</div>
	</div>
	<div class="page-content">
		<? if(empty($tele_id)) { ?>
		<form class="pass-form" action='<?=$php?>changenewpass.php' method='post'>
			<center>
			<p class="reg-info">Новый пароль</p>
			<div class="mcs-login login">
				<input type="password" name="pass" id="pass" class="input" maxlength="24" required placeholder="* * * * * * * *">
			</div>
			<p class="reg-info">Повторите пароль</p>
			<div class="mcs-login password">
				<input type="password" name="pass1" id="pass1" class="input" maxlength="24" required placeholder="* * * * * * * *">
			</div>
			
				<div class="g-recaptcha captcha" data-sitekey="6LelOsUUAAAAAHVrLEJbzfshCLjH8Va0zc42cfmF"></div>
			</center>
			<button class="reg-button" name="submit" type="submit">Сменить</button>
		</form>
		<? } else { ?>
			<p class="text-log">Telegram-bot - /changepass</p>
		<?	} ?>
	</div>
</div>    