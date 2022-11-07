<?php require_once "cnt.php";
$login_get = $_REQUEST['login'];
$email_get = $_REQUEST['email'];
$email = safeGet($_GET, 'email');
$login = $_POST['login'];
?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Регистрация через Телеграм-бот</div>
	</div>
	<div class="page-content">
		<a href='http://t.me/MCSpace_bot'><img src='/img/telegram.png' width="100" height="100"></a>
		<!--div class="help-info">
			<div>
				<div>
					<img id="loginimg" src=" "><span id="loginerrmsg"></span>
				</div>
				<div>
					<img id="emailimg" src=" "><span id="emailerrmsg"></span>
				</div>
				<div>
					<img id="email1img" src=" "><span id="email1errmsg"></span>
				</div>
			</div>
			<div class="right-info">
				<img id="seximg" src=" "><span id="sexerrmsg"></span>
				<img id="passimg" src=" "><span id="passerrmsg"></span>
				<img id="pass1img" src=" "><span id="pass1errmsg"></span>
			</div>
		</div>
		<div class="reg-info">
			<div>Регистрация на нашем проекте позволит Вам стать его полноценным участником.</div>
			<div>Некоторые регистрационные данные будет невозможно изменить, отнеситесь к этому серьезно.</div>
		</div>
		<form action="/sent_acc_reg.php" method="post" autocomplete="off" id="reg_form">
			<div id="left-reg">
				<div class="mcs-login login">
					<input name="login" id="login" type="text" placeholder="Введите логин">
				</div>
				<div class="mcs-login password">
					<input name="email" id="email" type="email" placeholder="Введите почту">
					<p>Код подтверждения без проблем отправляется на домены mail.ru, yandex.ru. С другими доменами, могут возникнуть проблемы.</p>
				</div>
				<div class="mcs-login login">
					<input name="email1" id="email1" type="email" placeholder="Повторите почту">
				</div>
			</div>
			<div id="right-reg">
				<select id="sex" class="mcs-login reg-sex">
					<option disabled selected>Выберите пол</option>
					<option value="male">Мужской</option>
					<option value="female">Женский</option>
				</select>
				<div class="mcs-login reg-sex">
					<input name="pass" id="pass" type="password" placeholder="Введите пароль">
				</div>
				<div class="mcs-login reg-pass">
					<input name="pass1" id="pass1" type="password" placeholder="Повторите пароль">
				</div>
			</div>
			<center><div class="g-recaptcha captcha bar" data-sitekey="6LelOsUUAAAAAHVrLEJbzfshCLjH8Va0zc42cfmF"></center>
			<div class="reg-more"></div> < Клик показывает и скрывает доп инфу по правилам ввода для полей >
			<div class="reg-info reg-rules"><div>Регистрируясь на проекте, Вы подтверждаете свое полное согласие с <a href="<?=$rules?>" target="_blank">правилами</a> проекта.</div></div>
			<button class="reg-button" id="btn" type="submit">Регистрация</button>
			<span id="reg"></span>
		</form-->
	</div>
</div>