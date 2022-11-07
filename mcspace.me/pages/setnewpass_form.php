<?php require_once "cnt.php"; $code = safeGet($_GET, 'code');?>
<div class="content-other">
	<div class="box">
		<h1 class="text_box">Восстановление пароля</h1>
		<div class="d_b w300 m0_auto">
			<form class="reg_form" action='<?=$php?>setnewpass.php' method='post'>
				<div class="flex">
					<p class="text-log">Новый пароль</p>
					<input type="password" name="pass" id="pass" class="input" required maxlength="24" placeholder="* * * * * * * *">
				</div>
				<div class="flex">
					<p class="text-log">Повторите пароль</p>
					<input type="password" name="pass1" id="pass1" class="input" required maxlength="24" placeholder="* * * * * * * *">
				</div>
				<div class="g-recaptcha" data-sitekey="6LelOsUUAAAAAHVrLEJbzfshCLjH8Va0zc42cfmF"></div>
				<input type="hidden" name="code" id="code" class="log-input" value="<?php echo $code; ?>">
				<div class="ta_c">
					<button class="btn_submit" name="submit" type="submit">Восстановить</button>
				</div>
			</form>
		</div> 
	</div>
</div>     