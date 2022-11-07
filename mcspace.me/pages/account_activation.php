<? 	
require_once "cnt.php";
require_once '/var/www/mcspace.me/data/www/mcspace.me/PHPMailerAutoload.php';
$email = safeGet($_GET, 'email');
$error = '';
?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Подтверждение нового аккаунта</div>
	</div>
	<div class="page-content">
		<h1 class="text_box"></h1>
		<form class="reg_form" action="<?=$php?>checkfull.php" method="post" autocomplete="on">
			<center>
				<p class="text-log">Введите код из письма в поле ниже</p>
				<div class="gr_pass mcs-login login">
					<input type="text" name="code" id="code" class="input" maxlength="24" required placeholder="* * * * * * * *">
					<input type="hidden" name="email" id="email" class="log-input" maxlength="24" required value="<?=$email?>">
				</div>
				<div class="g-recaptcha" data-sitekey="6LelOsUUAAAAAHVrLEJbzfshCLjH8Va0zc42cfmF"></div>
					<?=$error?>
				<div class="activation-submit">
					<button class="reg-button" name="submit" type="submit">Подтвердить</button>
				</div>
			</center>
		</form>
		<form class="reg_form" action="<?=$php?>restart_email.php" method="post" autocomplete="on">
			<div>Письмо должно прийти в течении 5 минут, если этого не произошло, воспользуйтесь функцией повторной отправки письма.</div>
			<?php echo "<button class='reg-button' name='restart' type='submit'>Отправить письмо повторно</button>"; ?>
			<input type="hidden" name="email" id="email" class="log-input" maxlength="24" required value="<?=$email?>">
		</form>
	</div>
</div>